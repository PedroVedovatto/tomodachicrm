<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promocao;

class PromocaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promocoes = Promocao::ativas()
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('promocoes.index', compact('promocoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('promocoes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'desconto' => 'required|string|max:255',
            'validade' => 'required|date|after:today',
            'termos' => 'required|string',
        ]);

        Promocao::create($request->all());

        return redirect()->route('promocoes.index')
            ->with('success', 'Promoção criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promocao $promocao)
    {
        return view('promocoes.show', compact('promocao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promocao $promocao)
    {
        return view('promocoes.edit', compact('promocao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promocao $promocao)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'desconto' => 'required|string|max:255',
            'validade' => 'required|date',
            'termos' => 'required|string',
        ]);

        $promocao->update($request->all());

        return redirect()->route('promocoes.index')
            ->with('success', 'Promoção atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promocao $promocao)
    {
        $promocao->update(['ativa' => false]);

        return redirect()->route('promocoes.index')
            ->with('success', 'Promoção desativada com sucesso!');
    }
}
