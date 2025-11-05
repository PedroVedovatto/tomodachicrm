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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('telefone');
            $table->string('cpf')->unique();
            $table->string('cargo');
            $table->string('password');
            $table->boolean('ativo')->default(true);
            
            // Permissões
            $table->boolean('perm_clientes')->default(false);
            $table->boolean('perm_cores')->default(false);
            $table->boolean('perm_imagens')->default(false);
            $table->boolean('perm_paginas')->default(false);
            $table->boolean('perm_textos')->default(false);
            $table->boolean('perm_promocoes')->default(false);
            $table->boolean('perm_usuarios')->default(false);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
