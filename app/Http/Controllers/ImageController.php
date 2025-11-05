<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagem;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $imagens = Imagem::ativas()
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        $categorias = Imagem::categorias();

        return view('images.index', compact('imagens', 'categorias'));
    }

    public function sidebar()
    {
        $imagens = Imagem::ativas()
            ->orderBy('categoria')
            ->orderBy('created_at', 'desc')
            ->get()
            ->groupBy('categoria');

        $categorias = Imagem::categorias();

        return view('images.sidebar', compact('imagens', 'categorias'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'categoria' => 'required|string|in:entradas,principal,bebidas,site_banners',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagem = $request->file('imagem');
        $nomeArquivo = time() . '_' . $imagem->getClientOriginalName();
        $caminho = $imagem->storeAs('imagens', $nomeArquivo, 'public');

        $dados = [
            'titulo' => $request->titulo,
            'categoria' => $request->categoria,
            'caminho_arquivo' => $caminho,
            'nome_arquivo' => $nomeArquivo,
            'tamanho_arquivo' => $imagem->getSize(),
            'tipo_mime' => $imagem->getMimeType(),
        ];

        Imagem::create($dados);

        return response()->json([
            'success' => true,
            'message' => 'Imagem enviada com sucesso!'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'categoria' => 'required|string|in:entradas,principal,bebidas,site_banners',
        ]);

        Imagem::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Imagem adicionada com sucesso!'
        ]);
    }

    public function destroy($id)
    {
        $imagem = Imagem::findOrFail($id);
        
        // Remove o arquivo do storage
        if (Storage::disk('public')->exists($imagem->caminho_arquivo)) {
            Storage::disk('public')->delete($imagem->caminho_arquivo);
        }
        
        $imagem->update(['ativa' => false]);

        return response()->json([
            'success' => true,
            'message' => 'Imagem removida com sucesso!'
        ]);
    }
}
