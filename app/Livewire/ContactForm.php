<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class ContactForm extends Component
{
    #[Validate('required|min:2|max:100')]
    public $name = '';
    
    #[Validate('required|email|max:255')]
    public $email = '';
    
    #[Validate('nullable|min:10|max:20')]
    public $phone = '';
    
    #[Validate('required|min:5|max:1000')]
    public $message = '';
    
    #[Validate('required')]
    public $subject = '';
    
    public $portfolio_type = 'geral';
    public $success_message = '';
    public $is_sending = false;

    public function mount($portfolioType = 'geral')
    {
        $this->portfolio_type = $portfolioType;
        $this->setDefaultSubject();
    }

    public function setDefaultSubject()
    {
        $subjects = [
            'clinica' => 'Consulta Médica',
            'estetica' => 'Agendamento de Procedimento',
            'advocacia' => 'Consulta Jurídica',
            'loja' => 'Informações sobre Produto',
            'autonomo' => 'Solicitação de Serviço',
            'geral' => 'Contato Geral'
        ];
        
        $this->subject = $subjects[$this->portfolio_type] ?? $subjects['geral'];
    }

    public function submitForm()
    {
        $this->is_sending = true;
        
        // Validar todos os campos
        $this->validate();
        
        try {
            // Simular envio de email (você pode implementar o envio real aqui)
            $this->sendEmail();
            
            // Limpar formulário
            $this->reset(['name', 'email', 'phone', 'message']);
            $this->setDefaultSubject();
            
            // Mostrar mensagem de sucesso
            $this->success_message = 'Mensagem enviada com sucesso! Entraremos em contato em breve.';
            
            // Limpar mensagem após 5 segundos
            $this->dispatch('form-success');
            
        } catch (\Exception $e) {
            session()->flash('error', 'Erro ao enviar mensagem. Tente novamente.');
        }
        
        $this->is_sending = false;
    }

    private function sendEmail()
    {
        // Aqui você pode implementar o envio real do email
        // Por exemplo, usando Mail::send() ou uma API como SendGrid
        
        // Dados do formulário para o email
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
            'subject' => $this->subject,
            'portfolio_type' => $this->portfolio_type,
        ];
        
        // Log para desenvolvimento
        \Log::info('Formulário submetido', $data);
        
        // Simular delay de envio
        sleep(1);
    }

    public function clearSuccess()
    {
        $this->success_message = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}