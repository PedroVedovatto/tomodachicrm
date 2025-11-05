<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    protected $fillable = [
        'titulo',
        'categoria',
        'caminho_arquivo',
        'nome_arquivo',
        'tamanho_arquivo',
        'tipo_mime',
        'ativa'
    ];

    protected $casts = [
        'ativa' => 'boolean'
    ];

    // Escopos
    public function scopeAtivas($query)
    {
        return $query->where('ativa', true);
    }

    public function scopePorCategoria($query, $categoria)
    {
        return $query->where('categoria', $categoria);
    }

    // Categorias disponíveis
    public static function categorias()
    {
        return [
            'entradas' => 'Entradas',
            'principal' => 'Principal (Temakis e Peças)',
            'bebidas' => 'Bebidas',
            'site_banners' => 'Site e Banners'
        ];
    }
}
