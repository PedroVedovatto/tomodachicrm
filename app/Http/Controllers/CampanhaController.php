<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campanha;
use App\Models\Promocao;
use App\Models\Mensagem;
use App\Models\Cliente;

class CampanhaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campanhas = Campanha::with(['promocao', 'mensagem', 'usuario'])
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('campanhas.index', compact('campanhas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $promocoes = Promocao::ativas()->get();
        $mensagens = Mensagem::ativas()->get();
        $clientes = Cliente::ativos()->get();

        return view('campanhas.create', compact('promocoes', 'mensagens', 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'promocao_id' => 'required|exists:promocaos,id',
            'mensagem_id' => 'required|exists:mensagems,id',
            'clientes_selecionados' => 'required|array|min:1',
            'clientes_selecionados.*' => 'exists:clientes,id',
        ]);

        $data = $request->all();
        $data['usuario_id'] = 1; // TODO: Pegar do usuário logado
        $data['total_clientes'] = count($request->clientes_selecionados);
        $data['pendentes'] = count($request->clientes_selecionados);

        $campanha = Campanha::create($data);

        return redirect()->route('campanhas.show', $campanha)
            ->with('success', 'Campanha criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Campanha $campanha)
    {
        $campanha->load(['promocao', 'mensagem', 'usuario']);
        
        return view('campanhas.show', compact('campanha'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campanha $campanha)
    {
        $promocoes = Promocao::ativas()->get();
        $mensagens = Mensagem::ativas()->get();
        $clientes = Cliente::ativos()->get();

        return view('campanhas.edit', compact('campanha', 'promocoes', 'mensagens', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Campanha $campanha)
    {
        $request->validate([
            'promocao_id' => 'required|exists:promocaos,id',
            'mensagem_id' => 'required|exists:mensagems,id',
            'clientes_selecionados' => 'required|array|min:1',
            'clientes_selecionados.*' => 'exists:clientes,id',
        ]);

        $data = $request->all();
        $data['total_clientes'] = count($request->clientes_selecionados);
        $data['pendentes'] = count($request->clientes_selecionados);

        $campanha->update($data);

        return redirect()->route('campanhas.show', $campanha)
            ->with('success', 'Campanha atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campanha $campanha)
    {
        $campanha->delete();

        return redirect()->route('campanhas.index')
            ->with('success', 'Campanha removida com sucesso!');
    }

    /**
     * Iniciar envio da campanha
     */
    public function iniciarEnvio(Campanha $campanha)
    {
        $campanha->update([
            'status' => 'enviando',
            'iniciada_em' => now()
        ]);

        // TODO: Implementar lógica de envio via WhatsApp

        return response()->json([
            'success' => true,
            'message' => 'Envio iniciado com sucesso!'
        ]);
    }
}
