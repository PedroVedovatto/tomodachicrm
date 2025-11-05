<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        // Cores padrão do tema
        $colors = [
            'main_palette' => [
                'black' => '#000000',
                'red' => '#dc2626',
                'white' => '#ffffff',
                'dark_blue' => '#1f2937'
            ],
            'red_shades' => [
                'red' => '#dc2626',
                'lighter_red' => '#ef4444',
                'even_lighter_red' => '#f87171',
                'lightest_red' => '#fca5a5'
            ],
            'black_gray_shades' => [
                'black' => '#000000',
                'dark_blue' => '#1f2937',
                'dark_gray' => '#374151',
                'medium_gray' => '#6b7280'
            ]
        ];

        return view('colors.index', compact('colors'));
    }

    public function update(Request $request)
    {
        // Aqui você pode implementar a lógica para salvar as cores no banco de dados
        // Por enquanto, apenas retornamos uma mensagem de sucesso
        
        return response()->json([
            'success' => true,
            'message' => 'Cores atualizadas com sucesso!'
        ]);
    }
}
