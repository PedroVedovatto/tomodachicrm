<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    protected $fillable = [
        'promocao_id',
        'mensagem_id',
        'usuario_id',
        'clientes_selecionados',
        'total_clientes',
        'enviados',
        'pendentes',
        'erros',
        'status',
        'iniciada_em',
        'concluida_em'
    ];

    protected $casts = [
        'clientes_selecionados' => 'array',
        'iniciada_em' => 'datetime',
        'concluida_em' => 'datetime'
    ];

    // Relacionamentos
    public function promocao()
    {
        return $this->belongsTo(Promocao::class);
    }

    public function mensagem()
    {
        return $this->belongsTo(Mensagem::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class, 'campanha_cliente');
    }

    // Escopos
    public function scopeConcluidas($query)
    {
        return $query->where('status', 'concluida');
    }

    public function scopePendentes($query)
    {
        return $query->where('status', 'pendente');
    }
}
