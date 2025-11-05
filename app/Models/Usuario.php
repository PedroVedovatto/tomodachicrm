<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'cpf',
        'cargo',
        'password',
        'ativo',
        'perm_clientes',
        'perm_cores',
        'perm_imagens',
        'perm_paginas',
        'perm_textos',
        'perm_promocoes',
        'perm_usuarios'
    ];

    protected $hidden = [
        'password'
    ];

    protected $casts = [
        'ativo' => 'boolean',
        'perm_clientes' => 'boolean',
        'perm_cores' => 'boolean',
        'perm_imagens' => 'boolean',
        'perm_paginas' => 'boolean',
        'perm_textos' => 'boolean',
        'perm_promocoes' => 'boolean',
        'perm_usuarios' => 'boolean'
    ];

    // Escopo para usuários ativos
    public function scopeAtivos($query)
    {
        return $query->where('ativo', true);
    }

    // Verificar se tem permissão específica
    public function temPermissao($permissao)
    {
        return $this->{"perm_{$permissao}"} ?? false;
    }

    // Relacionamento com campanhas
    public function campanhas()
    {
        return $this->hasMany(Campanha::class);
    }
}
