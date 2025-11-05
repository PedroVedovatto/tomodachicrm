<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'desconto',
        'validade',
        'termos',
        'ativa'
    ];

    protected $casts = [
        'validade' => 'date',
        'ativa' => 'boolean'
    ];

    // Relacionamento com campanhas
    public function campanhas()
    {
        return $this->hasMany(Campanha::class);
    }

    // Escopos
    public function scopeAtivas($query)
    {
        return $query->where('ativa', true);
    }

    public function scopeVigentes($query)
    {
        return $query->where('validade', '>=', now());
    }
}
