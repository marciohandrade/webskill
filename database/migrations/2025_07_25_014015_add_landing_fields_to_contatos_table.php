<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('contatos', function (Blueprint $table) {
            // Campos específicos da landing page de agendamento
            $table->string('whatsapp', 20)->nullable()->after('telefone');
            $table->string('estabelecimento', 150)->nullable()->after('email');
            $table->enum('agendamentos_semana', ['0-20', '21-50', '51-100', '100+'])->nullable()->after('estabelecimento');
            $table->enum('tipo_lead', ['oferta_lancamento', 'contato_geral', 'portfolio'])->default('contato_geral')->after('agendamentos_semana');
            $table->decimal('valor_oferta', 8, 2)->nullable()->after('tipo_lead');
            $table->string('utm_source', 100)->nullable()->after('valor_oferta');
            $table->string('utm_campaign', 100)->nullable()->after('utm_source');
            
            // Índices para otimização
            $table->index(['tipo_lead']);
            $table->index(['agendamentos_semana']);
            $table->index(['created_at', 'tipo_lead']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contatos', function (Blueprint $table) {
            $table->dropIndex(['tipo_lead']);
            $table->dropIndex(['agendamentos_semana']);
            $table->dropIndex(['created_at', 'tipo_lead']);
            
            $table->dropColumn([
                'whatsapp',
                'estabelecimento', 
                'agendamentos_semana',
                'tipo_lead',
                'valor_oferta',
                'utm_source',
                'utm_campaign'
            ]);
        });
    }
};