<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::ativos()
            ->orderBy('nome')
            ->paginate(20);

        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'telefone' => 'required|string|max:20',
            'cpf' => 'required|string|unique:usuarios,cpf',
            'cargo' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'perm_clientes' => 'boolean',
            'perm_cores' => 'boolean',
            'perm_imagens' => 'boolean',
            'perm_paginas' => 'boolean',
            'perm_textos' => 'boolean',
            'perm_promocoes' => 'boolean',
            'perm_usuarios' => 'boolean',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        Usuario::create($data);

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuário criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email,' . $usuario->id,
            'telefone' => 'required|string|max:20',
            'cpf' => 'required|string|unique:usuarios,cpf,' . $usuario->id,
            'cargo' => 'required|string|max:255',
            'password' => 'nullable|string|min:6|confirmed',
            'perm_clientes' => 'boolean',
            'perm_cores' => 'boolean',
            'perm_imagens' => 'boolean',
            'perm_paginas' => 'boolean',
            'perm_textos' => 'boolean',
            'perm_promocoes' => 'boolean',
            'perm_usuarios' => 'boolean',
        ]);

        $data = $request->all();
        
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        } else {
            unset($data['password']);
        }

        $usuario->update($data);

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->update(['ativo' => false]);

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuário desativado com sucesso!');
    }
}
