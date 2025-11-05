<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagem;

class MensagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensagens = Mensagem::ativas()
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('mensagens.index', compact('mensagens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mensagens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'assunto' => 'required|string|max:255',
            'conteudo' => 'required|string',
            'call_to_action' => 'nullable|string|max:255',
        ]);

        Mensagem::create($request->all());

        return redirect()->route('mensagens.index')
            ->with('success', 'Mensagem criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mensagem $mensagem)
    {
        return view('mensagens.show', compact('mensagem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mensagem $mensagem)
    {
        return view('mensagens.edit', compact('mensagem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mensagem $mensagem)
    {
        $request->validate([
            'assunto' => 'required|string|max:255',
            'conteudo' => 'required|string',
            'call_to_action' => 'nullable|string|max:255',
        ]);

        $mensagem->update($request->all());

        return redirect()->route('mensagens.index')
            ->with('success', 'Mensagem atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mensagem $mensagem)
    {
        $mensagem->update(['ativa' => false]);

        return redirect()->route('mensagens.index')
            ->with('success', 'Mensagem desativada com sucesso!');
    }
}
