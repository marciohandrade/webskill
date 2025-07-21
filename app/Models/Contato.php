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
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Scopes para facilitar consultas
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

    // Accessors
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

    // Mutators
    public function setTelefoneAttribute($value)
    {
        // Remove caracteres especiais do telefone
        $this->attributes['telefone'] = preg_replace('/[^0-9]/', '', $value);
    }
}