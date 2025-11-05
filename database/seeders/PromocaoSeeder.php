<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promocao;

class PromocaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promocoes = [
            [
                'titulo' => 'Desconto de 20% em Temakis',
                'descricao' => 'Aproveite nossa promoção especial! 20% de desconto em todos os temakis do cardápio. Uma explosão de sabores japoneses esperando por você.',
                'desconto' => '20% OFF',
                'validade' => now()->addDays(15),
                'termos' => 'Promoção válida apenas para pedidos acima de R$ 50,00. Não cumulativa com outras promoções. Válida até a data especificada.',
                'ativa' => true,
                'created_at' => now()->subDays(5),
            ],
            [
                'titulo' => 'Combo Família - 30% OFF',
                'descricao' => 'Reúna a família e aproveite nosso combo especial! 30% de desconto em combos para 4 pessoas. Inclui temakis, sushis e bebidas.',
                'desconto' => '30% OFF',
                'validade' => now()->addDays(10),
                'termos' => 'Promoção válida apenas para combos familiares. Mínimo de 4 pessoas. Não cumulativa com outras promoções.',
                'ativa' => true,
                'created_at' => now()->subDays(3),
            ],
            [
                'titulo' => 'Happy Hour - Bebidas 50% OFF',
                'descricao' => 'Happy Hour especial! 50% de desconto em todas as bebidas das 17h às 19h. Acompanhe com nossos deliciosos petiscos.',
                'desconto' => '50% OFF',
                'validade' => now()->addDays(7),
                'termos' => 'Promoção válida apenas das 17h às 19h. Aplicável apenas em bebidas. Não cumulativa com outras promoções.',
                'ativa' => true,
                'created_at' => now()->subDays(1),
            ],
            [
                'titulo' => 'Sushi Premium - R$ 10 OFF',
                'descricao' => 'Desconto especial em nossos sushis premium! R$ 10,00 de desconto em pedidos acima de R$ 80,00. Sabores únicos e frescos.',
                'desconto' => 'R$ 10,00 OFF',
                'validade' => now()->addDays(12),
                'termos' => 'Promoção válida para pedidos acima de R$ 80,00. Aplicável apenas em sushis premium. Não cumulativa.',
                'ativa' => true,
                'created_at' => now()->subDays(2),
            ],
            [
                'titulo' => 'Delivery Grátis',
                'descricao' => 'Frete grátis para pedidos acima de R$ 60,00! Aproveite nossos pratos favoritos no conforto da sua casa.',
                'desconto' => 'Frete Grátis',
                'validade' => now()->addDays(20),
                'termos' => 'Promoção válida para pedidos acima de R$ 60,00. Aplicável apenas para delivery. Válida em toda a cidade.',
                'ativa' => true,
                'created_at' => now()->subDays(4),
            ],
        ];

        foreach ($promocoes as $promocao) {
            Promocao::create($promocao);
        }
    }
}
