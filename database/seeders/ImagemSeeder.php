<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Imagem;

class ImagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imagens = [
            // Entradas
            [
                'titulo' => 'Gyoza Tradicional',
                'categoria' => 'entradas',
                'caminho_arquivo' => 'imagens/gyoza_tradicional.jpg',
                'nome_arquivo' => 'gyoza_tradicional.jpg',
                'tamanho_arquivo' => 245760,
                'tipo_mime' => 'image/jpeg',
                'ativa' => true,
                'created_at' => now()->subDays(10),
            ],
            [
                'titulo' => 'Sunomono',
                'categoria' => 'entradas',
                'caminho_arquivo' => 'imagens/sunomono.jpg',
                'nome_arquivo' => 'sunomono.jpg',
                'tamanho_arquivo' => 198432,
                'tipo_mime' => 'image/jpeg',
                'ativa' => true,
                'created_at' => now()->subDays(9),
            ],
            [
                'titulo' => 'Edamame',
                'categoria' => 'entradas',
                'caminho_arquivo' => 'imagens/edamame.jpg',
                'nome_arquivo' => 'edamame.jpg',
                'tamanho_arquivo' => 156789,
                'tipo_mime' => 'image/jpeg',
                'ativa' => true,
                'created_at' => now()->subDays(8),
            ],
            
            // Principal
            [
                'titulo' => 'Temaki Salmão',
                'categoria' => 'principal',
                'caminho_arquivo' => 'imagens/temaki_salmao.jpg',
                'nome_arquivo' => 'temaki_salmao.jpg',
                'tamanho_arquivo' => 312456,
                'tipo_mime' => 'image/jpeg',
                'ativa' => true,
                'created_at' => now()->subDays(7),
            ],
            [
                'titulo' => 'Sushi Premium',
                'categoria' => 'principal',
                'caminho_arquivo' => 'imagens/sushi_premium.jpg',
                'nome_arquivo' => 'sushi_premium.jpg',
                'tamanho_arquivo' => 287654,
                'tipo_mime' => 'image/jpeg',
                'ativa' => true,
                'created_at' => now()->subDays(6),
            ],
            [
                'titulo' => 'Combo Temaki',
                'categoria' => 'principal',
                'caminho_arquivo' => 'imagens/combo_temaki.jpg',
                'nome_arquivo' => 'combo_temaki.jpg',
                'tamanho_arquivo' => 423567,
                'tipo_mime' => 'image/jpeg',
                'ativa' => true,
                'created_at' => now()->subDays(5),
            ],
            
            // Bebidas
            [
                'titulo' => 'Sake Premium',
                'categoria' => 'bebidas',
                'caminho_arquivo' => 'imagens/sake_premium.jpg',
                'nome_arquivo' => 'sake_premium.jpg',
                'tamanho_arquivo' => 189234,
                'tipo_mime' => 'image/jpeg',
                'ativa' => true,
                'created_at' => now()->subDays(4),
            ],
            [
                'titulo' => 'Chá Verde',
                'categoria' => 'bebidas',
                'caminho_arquivo' => 'imagens/cha_verde.jpg',
                'nome_arquivo' => 'cha_verde.jpg',
                'tamanho_arquivo' => 134567,
                'tipo_mime' => 'image/jpeg',
                'ativa' => true,
                'created_at' => now()->subDays(3),
            ],
            
            // Site e Banners
            [
                'titulo' => 'Banner Principal',
                'categoria' => 'site_banners',
                'caminho_arquivo' => 'imagens/banner_principal.jpg',
                'nome_arquivo' => 'banner_principal.jpg',
                'tamanho_arquivo' => 567890,
                'tipo_mime' => 'image/jpeg',
                'ativa' => true,
                'created_at' => now()->subDays(2),
            ],
            [
                'titulo' => 'Ambiente do Restaurante',
                'categoria' => 'site_banners',
                'caminho_arquivo' => 'imagens/ambiente_restaurante.jpg',
                'nome_arquivo' => 'ambiente_restaurante.jpg',
                'tamanho_arquivo' => 678901,
                'tipo_mime' => 'image/jpeg',
                'ativa' => true,
                'created_at' => now()->subDays(1),
            ],
        ];

        foreach ($imagens as $imagem) {
            Imagem::create($imagem);
        }
    }
}
