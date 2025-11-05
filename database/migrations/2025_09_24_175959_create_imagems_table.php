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
        Schema::create('imagems', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('categoria'); // entradas, principal, bebidas, site_banners
            $table->string('caminho_arquivo');
            $table->string('nome_arquivo');
            $table->integer('tamanho_arquivo');
            $table->string('tipo_mime');
            $table->boolean('ativa')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagems');
    }
};
