<?php

namespace App\Livewire;

use App\Models\Contato;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class LandingOfertaForm extends Component
{
    // ✅ SEM ATRIBUTOS #[Validate] - só propriedades
    public $nome = '';
    public $email = '';
    public $whatsapp = '';
    public $estabelecimento = '';
    public $agendamentos_semana = '';

    public $success_message = '';
    public $is_sending = false;
    public $vagas_restantes = 6;

    public function mount()
    {
        // Simular vagas dinâmicas (você pode buscar do banco depois)
        $this->vagas_restantes = rand(3, 7);
    }

    public function submitForm()
    {
        $this->is_sending = true;

        try {
            // ✅ LIMPAR ERROS ANTERIORES
            $this->resetErrorBag();

            // ✅ VALIDATOR MANUAL (que sabemos que funciona)
            $validator = \Illuminate\Support\Facades\Validator::make([
                'nome' => $this->nome,
                'email' => $this->email,
                'whatsapp' => $this->whatsapp,
                'estabelecimento' => $this->estabelecimento,
                'agendamentos_semana' => $this->agendamentos_semana,
            ], [
                'nome' => 'required|min:2|max:100',
                'email' => 'required|email|max:255',
                'whatsapp' => 'required|min:10|max:20',
                'estabelecimento' => 'required|min:2|max:150',
                'agendamentos_semana' => 'required|in:0-20,21-50,51-100,100+',
            ], [
                'nome.required' => 'O nome é obrigatório.',
                'nome.min' => 'O nome deve ter pelo menos 2 caracteres.',
                'email.required' => 'O email é obrigatório.',
                'email.email' => 'Digite um email válido.',
                'whatsapp.required' => 'O WhatsApp é obrigatório.',
                'whatsapp.min' => 'WhatsApp deve ter pelo menos 10 dígitos.',
                'estabelecimento.required' => 'O nome do estabelecimento é obrigatório.',
                'agendamentos_semana.required' => 'Selecione quantos agendamentos por semana.',
            ]);

            if ($validator->fails()) {
                // ✅ ADICIONAR ERROS AO LIVEWIRE PARA EXIBIR NA VIEW
                foreach ($validator->errors()->messages() as $field => $messages) {
                    $this->addError($field, $messages[0]);
                }
                
                $this->is_sending = false;
                return; // Para aqui - erros serão exibidos
            }

            // ✅ VALIDAÇÃO PASSOU - CONTINUAR COM SAVE
            
            // Limpar WhatsApp (só números)
            $whatsappLimpo = preg_replace('/[^0-9]/', '', $this->whatsapp);

            // Salvar no banco
            $contato = Contato::create([
                'nome' => $this->nome,
                'email' => $this->email,
                'telefone' => $whatsappLimpo,
                'whatsapp' => $whatsappLimpo,
                'estabelecimento' => $this->estabelecimento,
                'agendamentos_semana' => $this->agendamentos_semana,
                'tipo_lead' => 'oferta_lancamento',
                'valor_oferta' => 97.00,
                'assunto' => 'Oferta de Lançamento - Sistema Agendamento',
                'mensagem' => "Lead da oferta de lançamento:\n" .
                            "Estabelecimento: {$this->estabelecimento}\n" .
                            "Agendamentos/semana: {$this->agendamentos_semana}\n" .
                            "WhatsApp: {$whatsappLimpo}",
                'ip_address' => Request::ip(),
                'user_agent' => Request::userAgent(),
                'utm_source' => Request::get('utm_source'),
                'utm_campaign' => Request::get('utm_campaign', 'oferta_lancamento'),
                'email_enviado' => false,
                'respondido' => false,
            ]);

            // Log para acompanhamento
            Log::info('Novo lead oferta de lançamento', [
                'contato_id' => $contato->id,
                'nome' => $this->nome,
                'estabelecimento' => $this->estabelecimento,
                'agendamentos_semana' => $this->agendamentos_semana,
                'ip' => Request::ip()
            ]);

            // Enviar notificações
            $this->enviarNotificacoes($contato);

            // Sucesso
            $nomeTemp = $this->nome;
            $estabelecimentoTemp = $this->estabelecimento;

            // Limpar formulário
            $this->reset(['nome', 'email', 'whatsapp', 'estabelecimento', 'agendamentos_semana']);

            // Mensagem de sucesso
            $this->success_message = 'Perfeito! Vou analisar seu perfil e entrar em contato em até 2 horas via WhatsApp para confirmar sua vaga da oferta de lançamento.';

            // Reduzir vagas
            $this->vagas_restantes = max(1, $this->vagas_restantes - 1);

            // Evento JS
            $this->dispatch('lead-captured', [
                'nome' => $nomeTemp,
                'estabelecimento' => $estabelecimentoTemp
            ]);

        } catch (\Exception $e) {
            Log::error('Erro ao capturar lead da oferta', [
                'erro' => $e->getMessage(),
                'dados' => [
                    'nome' => $this->nome,
                    'email' => $this->email,
                    'estabelecimento' => $this->estabelecimento
                ]
            ]);

            session()->flash('error', 'Erro ao enviar formulário. Tente novamente em alguns segundos.');
        }

        $this->is_sending = false;
    }

    private function enviarNotificacoes($contato)
    {
        // TODO: Implementar envio de email/WhatsApp
        // Por enquanto, apenas log
        Log::info('Notificação deveria ser enviada', [
            'contato_id' => $contato->id,
            'whatsapp' => $contato->whatsapp
        ]);
    }

    public function clearSuccess()
    {
        $this->success_message = '';
    }

    public function render()
    {
        return view('livewire.landing-oferta-form');
    }
}