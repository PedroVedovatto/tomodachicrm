<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $fillable = [
        'assunto',
        'conteudo',
        'call_to_action',
        'ativa'
    ];

    protected $casts = [
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
}
