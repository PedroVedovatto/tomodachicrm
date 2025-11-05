<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'endereco',
        'ativo'
    ];

    protected $casts = [
        'ativo' => 'boolean'
    ];

    // Escopo para clientes ativos
    public function scopeAtivos($query)
    {
        return $query->where('ativo', true);
    }

    // Relacionamento com campanhas
    public function campanhas()
    {
        return $this->belongsToMany(Campanha::class, 'campanha_cliente');
    }
}
