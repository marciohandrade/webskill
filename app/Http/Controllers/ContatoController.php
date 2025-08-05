<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\Contato;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContatoRequest;

class ContatoController extends Controller
{
    public function enviar(ContatoRequest $request)
    {
        // Os dados já vêm validados pelo ContatoRequest
        $validatedData = $request->validated();
        
        // Log da tentativa para monitoramento
        Log::info('Nova tentativa de contato', [
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'nome' => $validatedData['nome'],
            'email' => $validatedData['email']
        ]);

        // Usar transação para garantir consistência
        DB::beginTransaction();

        try {
            // 1. Salvar contato no banco de dados
            $contato = Contato::create([
                'nome' => $validatedData['nome'],
                'email' => $validatedData['email'],
                'telefone' => $validatedData['tel'],
                'assunto' => $validatedData['assunto'] ?? 'Contato Geral',
                'mensagem' => $validatedData['mensagem'],
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'tipo_lead' => 'contato_geral' // Para diferenciar dos spams
            ]);

            // 2. Preparar dados para o email
            $dadosEmail = [
                'id' => $contato->id,
                'nome' => $contato->nome,
                'email' => $contato->email,
                'telefone' => $contato->telefone_formatado ?? $contato->telefone,
                'assunto' => $contato->assunto_formatado ?? $contato->assunto,
                'mensagem' => $contato->mensagem,
                'data_envio' => $contato->data_formatada ?? $contato->created_at->format('d/m/Y H:i'),
                'ip_address' => $contato->ip_address,
            ];

            // 3. Enviar email
            $emailDestino = 'contato@webskill.com.br'; // Seu email real

            Mail::send('emails.contato', $dadosEmail, function ($message) use ($dadosEmail, $emailDestino) {
                $message->to($emailDestino)
                        ->subject('✅ Contato Verificado #' . $dadosEmail['id'] . ' - ' . $dadosEmail['assunto'])
                        ->replyTo($dadosEmail['email'], $dadosEmail['nome']);
            });

            // 4. Marcar email como enviado
            $contato->update(['email_enviado' => true]);

            // 5. Log de sucesso
            Log::info('✅ Contato legítimo salvo e email enviado', [
                'contato_id' => $contato->id,
                'nome' => $contato->nome,
                'email' => $contato->email,
                'ip' => $request->ip()
            ]);

            // Confirmar transação
            DB::commit();

            // Resposta diferente para AJAX vs navegação normal
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Mensagem enviada com sucesso!',
                    'protocolo' => '#' . $contato->id
                ]);
            }

            // Fallback para navegação normal (se JS estiver desabilitado)
            return redirect()->back()->with('success',
                'Mensagem enviada com sucesso! Entraremos em contato em breve. Protocolo: #' . $contato->id
            );

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Erros de validação para AJAX
            DB::rollback();
            
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);
            }
            
            return redirect()->back()->withErrors($e->errors())->withInput();

        } catch (\Exception $e) {
            // Reverter transação em caso de erro
            DB::rollback();

            // Se já salvou no banco mas erro no email, atualizar status
            if (isset($contato) && $contato->exists) {
                $contato->update(['email_enviado' => false]);
                Log::warning('Contato salvo mas erro no envio de email', [
                    'contato_id' => $contato->id,
                    'erro' => $e->getMessage()
                ]);
            }

            // Log do erro
            Log::error('Erro ao processar contato: ' . $e->getMessage(), [
                'dados' => $validatedData,
                'ip' => $request->ip(),
                'erro_completo' => $e->getTraceAsString()
            ]);

            // Resposta para AJAX
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Erro ao enviar mensagem. Tente novamente ou entre em contato pelo WhatsApp.'
                ], 500);
            }

            // Fallback para navegação normal
            return redirect()->back()
                        ->with('error', 'Erro ao enviar mensagem. Tente novamente ou entre em contato pelo WhatsApp.')
                        ->withInput();
        }
    }

    // Painel Admin - Lista de contatos
    public function admin()
    {
        $contatos = Contato::orderBy('created_at', 'desc')
                          ->paginate(20);
        
        $estatisticas = [
            'total' => Contato::count(),
            'nao_respondidos' => Contato::naoRespondidos()->count(),
            'hoje' => Contato::whereDate('created_at', today())->count(),
            'esta_semana' => Contato::recentes(7)->count(),
        ];

        return view('admin.contatos.index', compact('contatos', 'estatisticas'));
    }

    // Ver contato individual
    public function show(Contato $contato)
    {
        return view('admin.contatos.show', compact('contato'));
    }

    // Marcar como respondido
    public function marcarRespondido(Contato $contato)
    {
        $contato->update(['respondido' => true]);
        
        return redirect()->back()->with('success', 'Contato marcado como respondido!');
    }

    // Adicionar observação
    public function adicionarObservacao(Request $request, Contato $contato)
    {
        $request->validate([
            'observacoes' => 'required|string|max:1000'
        ]);

        $contato->update(['observacoes' => $request->observacoes]);
        
        return redirect()->back()->with('success', 'Observação adicionada com sucesso!');
    }
}