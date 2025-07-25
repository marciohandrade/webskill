<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Contato extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'whatsapp',
        'estabelecimento',
        'agendamentos_semana',
        'tipo_lead',
        'valor_oferta',
        'utm_source',
        'utm_campaign',
        'assunto',
        'mensagem',
        'ip_address',
        'user_agent',
        'email_enviado',
        'respondido',
        'observacoes'
    ];

    protected $casts = [
        'email_enviado' => 'boolean',
        'respondido' => 'boolean',
        'valor_oferta' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Scopes existentes
    public function scopeNaoRespondidos($query)
    {
        return $query->where('respondido', false);
    }

    public function scopeRespondidos($query)
    {
        return $query->where('respondido', true);
    }

    public function scopeEmailEnviado($query)
    {
        return $query->where('email_enviado', true);
    }

    public function scopeRecentes($query, $dias = 7)
    {
        return $query->where('created_at', '>=', Carbon::now()->subDays($dias));
    }

    // Novos scopes para landing page
    public function scopeOfertaLancamento($query)
    {
        return $query->where('tipo_lead', 'oferta_lancamento');
    }

    public function scopeAltoVolume($query)
    {
        return $query->whereIn('agendamentos_semana', ['51-100', '100+']);
    }

    public function scopePorVolume($query, $volume)
    {
        return $query->where('agendamentos_semana', $volume);
    }

    // Accessors existentes
    public function getDataFormatadaAttribute()
    {
        return $this->created_at->format('d/m/Y H:i:s');
    }

    public function getTelefoneFormatadoAttribute()
    {
        return $this->telefone ?? 'Não informado';
    }

    public function getAssuntoFormatadoAttribute()
    {
        return $this->assunto ?? 'Contato Geral';
    }

    // Novos accessors
    public function getWhatsappFormatadoAttribute()
    {
        if (!$this->whatsapp) return 'Não informado';
        
        $numero = preg_replace('/[^0-9]/', '', $this->whatsapp);
        
        if (strlen($numero) == 11) {
            return '(' . substr($numero, 0, 2) . ') ' . substr($numero, 2, 5) . '-' . substr($numero, 7);
        }
        
        return $this->whatsapp;
    }

    public function getValorOfertaFormatadoAttribute()
    {
        return $this->valor_oferta ? 'R$ ' . number_format($this->valor_oferta, 2, ',', '.') : 'N/A';
    }

    public function getVolumeAgendamentosDescricaoAttribute()
    {
        $descricoes = [
            '0-20' => 'Baixo volume (0-20/semana)',
            '21-50' => 'Médio volume (21-50/semana)', 
            '51-100' => 'Alto volume (51-100/semana)',
            '100+' => 'Muito alto volume (100+/semana)'
        ];

        return $descricoes[$this->agendamentos_semana] ?? 'Não informado';
    }

    public function getPrioridadeAttribute()
    {
        // Prioridade baseada no volume de agendamentos
        switch ($this->agendamentos_semana) {
            case '100+': return 'Muito Alta';
            case '51-100': return 'Alta';
            case '21-50': return 'Média';
            case '0-20': return 'Normal';
            default: return 'Baixa';
        }
    }

    // Mutators existentes
    public function setTelefoneAttribute($value)
    {
        $this->attributes['telefone'] = preg_replace('/[^0-9]/', '', $value);
    }

    // Novos mutators
    public function setWhatsappAttribute($value)
    {
        $this->attributes['whatsapp'] = preg_replace('/[^0-9]/', '', $value);
    }

    public function setEstabelecimentoAttribute($value)
    {
        $this->attributes['estabelecimento'] = ucwords(strtolower($value));
    }
}