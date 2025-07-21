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
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('email', 255);
            $table->string('telefone', 20)->nullable();
            $table->string('assunto', 80)->nullable();
            $table->text('mensagem');
            $table->string('ip_address', 45)->nullable();
            $table->string('user_agent')->nullable();
            $table->boolean('email_enviado')->default(false);
            $table->boolean('respondido')->default(false);
            $table->text('observacoes')->nullable();
            $table->timestamps();
            
            // Índices para otimização
            $table->index(['created_at']);
            $table->index(['respondido']);
            $table->index(['email_enviado']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contatos');
    }
};