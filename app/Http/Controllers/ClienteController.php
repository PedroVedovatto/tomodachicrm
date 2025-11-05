<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::ativos()
            ->orderBy('nome')
            ->paginate(20);

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Clientes são cadastrados pelo site, não manualmente
        return redirect()->route('clientes.index')
            ->with('info', 'Clientes são cadastrados automaticamente pelo site.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Clientes são cadastrados pelo site, não manualmente
        return redirect()->route('clientes.index')
            ->with('info', 'Clientes são cadastrados automaticamente pelo site.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email,' . $cliente->id,
            'telefone' => 'required|string|max:20',
            'endereco' => 'required|string',
            'ativo' => 'boolean'
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->update(['ativo' => false]);

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente desativado com sucesso!');
    }

    /**
     * API endpoint para cadastro de clientes pelo site
     */
    public function cadastrarPeloSite(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email',
            'telefone' => 'required|string|max:20',
            'endereco' => 'required|string'
        ]);

        $cliente = Cliente::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Cliente cadastrado com sucesso!',
            'cliente' => $cliente
        ], 201);
    }
}
