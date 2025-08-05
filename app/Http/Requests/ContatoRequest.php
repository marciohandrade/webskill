<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class ContatoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => [
                'required',
                'string',
                'min:2',
                'max:100',
                'regex:/^[a-zA-ZÀ-ÿ\s]+$/', // Só letras e acentos
                'not_regex:/^(Search Engine|Leemix|Georgemix|Mike|Annabelle)$/i' // Bloquear nomes spam conhecidos
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                'not_regex:/\.(tk|ml|ga|cf|gq)$/', // Bloquear domínios suspeitos
                'not_regex:/@(search-registry|gmail\.com)$/' // Bloquear emails spam conhecidos
            ],
            'tel' => [
                'nullable',
                'string',
                'max:20',
                'regex:/^(\+55\s?)?(\(?\d{2}\)?\s?)?\d{4,5}[-\s]?\d{4}$/' // Formato brasileiro
            ],
            'assunto' => 'nullable|string|max:80',
            'mensagem' => [
                'required',
                'string',
                'min:10', // Aumentado para 10 caracteres
                'max:1000',
                'not_regex:/Add your website to Google/i', // Bloquear mensagens spam típicas
                'not_regex:/SEO|search engine|ranking|backlink/i'
            ],
            'honeypot' => 'sometimes|nullable|size:0', // Campo honeypot deve estar vazio
            'start_time' => 'required|integer|min:' . (time() - 3600) // Formulário aberto há menos de 1h
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome é obrigatório.',
            'nome.min' => 'O nome deve ter pelo menos 2 caracteres.',
            'nome.max' => 'O nome não pode ter mais de 100 caracteres.',
            'nome.regex' => 'O nome deve conter apenas letras.',
            'nome.not_regex' => 'Nome não permitido.',
            
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Por favor, informe um e-mail válido.',
            'email.not_regex' => 'E-mail não permitido.',
            
            'tel.regex' => 'Por favor, informe um telefone brasileiro válido.',
            
            'mensagem.required' => 'A mensagem é obrigatória.',
            'mensagem.min' => 'A mensagem deve ter pelo menos 10 caracteres.',
            'mensagem.max' => 'A mensagem não pode ter mais de 1000 caracteres.',
            'mensagem.not_regex' => 'Mensagem não permitida.',
            
            'honeypot.size' => 'Formulário inválido.',
            'start_time.required' => 'Formulário inválido.',
            'start_time.min' => 'Formulário enviado muito rapidamente.'
        ];
    }

    protected function prepareForValidation(): void
    {
        // Rate limiting por IP
        $key = 'contact-form:' . $this->ip();
        
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            abort(429, "Muitas tentativas. Tente novamente em " . ceil($seconds/60) . " minutos.");
        }
        
        RateLimiter::hit($key, 3600); // 1 hora de bloqueio após 3 tentativas
        
        // Limpar telefone para validação
        if ($this->tel) {
            $this->merge([
                'tel' => preg_replace('/[^0-9]/', '', $this->tel)
            ]);
        }
        
        // Verificar tempo mínimo no formulário (5 segundos)
        if ($this->start_time && (time() - $this->start_time) < 5) {
            abort(422, 'Formulário enviado muito rapidamente.');
        }
    }

    /**
     * 🔥 MÉTODO CRUCIAL: Tratar falhas de validação para AJAX
     */
    protected function failedValidation(Validator $validator)
    {
        // Se for uma requisição AJAX, retornar JSON em vez de redirect
        if ($this->ajax() || $this->wantsJson()) {
            throw new HttpResponseException(
                response()->json([
                    'success' => false,
                    'message' => 'Dados inválidos.',
                    'errors' => $validator->errors()
                ], 422)
            );
        }

        // Para requisições normais, usar comportamento padrão (redirect)
        parent::failedValidation($validator);
    }
}