<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\Contato;
use Illuminate\Support\Facades\DB;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'nome' => 'required|string|min:2|max:100',
            'email' => 'required|email|max:255',
            'tel' => 'nullable|string|max:20',
            'assunto' => 'nullable|string|max:80',
            'mensagem' => 'required|string|min:5|max:1000',
        ], [
            'nome.required' => 'O nome é obrigatório.',
            'nome.min' => 'O nome deve ter pelo menos 2 caracteres.',
            'nome.max' => 'O nome não pode ter mais de 100 caracteres.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Por favor, informe um e-mail válido.',
            'mensagem.required' => 'A mensagem é obrigatória.',
            'mensagem.min' => 'A mensagem deve ter pelo menos 5 caracteres.',
            'mensagem.max' => 'A mensagem não pode ter mais de 1000 caracteres.',
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
            ]);

            // 2. Preparar dados para o email
            $dadosEmail = [
                'id' => $contato->id,
                'nome' => $contato->nome,
                'email' => $contato->email,
                'telefone' => $contato->telefone_formatado,
                'assunto' => $contato->assunto_formatado,
                'mensagem' => $contato->mensagem,
                'data_envio' => $contato->data_formatada,
            ];

            // 3. Enviar email
            $emailDestino = 'contato@webskill.com.br'; // Seu email real
            
            Mail::send('emails.contato', $dadosEmail, function ($message) use ($dadosEmail, $emailDestino) {
                $message->to($emailDestino)
                        ->subject('Novo Contato #' . $dadosEmail['id'] . ' - ' . $dadosEmail['assunto'])
                        ->replyTo($dadosEmail['email'], $dadosEmail['nome']);
            });

            // 4. Marcar email como enviado
            $contato->update(['email_enviado' => true]);

            // 5. Log de sucesso
            Log::info('Contato salvo e email enviado', [
                'contato_id' => $contato->id,
                'nome' => $contato->nome,
                'email' => $contato->email
            ]);

            // Confirmar transação
            DB::commit();

            // Retorna com mensagem de sucesso
            return redirect()->back()->with('success', 
                'Mensagem enviada com sucesso! Entraremos em contato em breve. Protocolo: #' . $contato->id
            );

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
                'erro_completo' => $e->getTraceAsString()
            ]);

            // Retorna com mensagem de erro
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