<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PromocaoController;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\CampanhaController;

Route::get('/', function () {
    return view('welcome');
});

// Rotas para gerenciamento de cores
Route::get('/colors', [ColorController::class, 'index'])->name('colors.index');
Route::post('/colors/update', [ColorController::class, 'update'])->name('colors.update');

// Rotas para gerenciamento de imagens
Route::get('/images', [ImageController::class, 'index'])->name('images.index');
Route::get('/images/sidebar', [ImageController::class, 'sidebar'])->name('images.sidebar');
Route::post('/images/upload', [ImageController::class, 'upload'])->name('images.upload');
Route::post('/images', [ImageController::class, 'store'])->name('images.store');
Route::delete('/images/{id}', [ImageController::class, 'destroy'])->name('images.destroy');

// Rotas para gerenciamento de clientes
Route::resource('clientes', ClienteController::class);
Route::post('/api/clientes/cadastrar', [ClienteController::class, 'cadastrarPeloSite'])->name('clientes.cadastrar-pelo-site');

// Rotas para gerenciamento de usuários
Route::resource('usuarios', UsuarioController::class);

// Rotas para gerenciamento de promoções
Route::resource('promocoes', PromocaoController::class);

// Rotas para gerenciamento de mensagens
Route::resource('mensagens', MensagemController::class);

// Rotas para gerenciamento de campanhas
Route::resource('campanhas', CampanhaController::class);
Route::post('/campanhas/{campanha}/iniciar-envio', [CampanhaController::class, 'iniciarEnvio'])->name('campanhas.iniciar-envio');

// Rotas para páginas e textos (placeholder)
Route::get('/paginas', function () {
    return view('paginas.index');
})->name('paginas.index');

Route::get('/textos', function () {
    return view('textos.index');
})->name('textos.index');
