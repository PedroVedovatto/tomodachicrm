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
        Schema::create('campanhas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('promocao_id')->constrained('promocaos');
            $table->foreignId('mensagem_id')->constrained('mensagems');
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->json('clientes_selecionados'); // IDs dos clientes
            $table->integer('total_clientes');
            $table->integer('enviados')->default(0);
            $table->integer('pendentes')->default(0);
            $table->integer('erros')->default(0);
            $table->enum('status', ['pendente', 'enviando', 'concluida', 'erro'])->default('pendente');
            $table->timestamp('iniciada_em')->nullable();
            $table->timestamp('concluida_em')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campanhas');
    }
};
