<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mensagem;

class MensagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mensagens = [
            [
                'assunto' => 'Promoção Especial - Temakis',
                'conteudo' => "🍣 *Olá {nome}!* 🍣\n\nTemos uma promoção especial esperando por você!\n\n🎉 *{promocao}*\n\n{descricao}\n\n📱 *Como aproveitar:*\n1. Faça seu pedido pelo WhatsApp\n2. Mencione esta promoção\n3. Aproveite o desconto!\n\n⏰ *Válido até:* {validade}\n\n📍 *Restaurante Tomodachi*\n📞 (11) 99999-9999\n\n{call_to_action}",
                'call_to_action' => 'Faça seu pedido agora!',
                'ativa' => true,
                'created_at' => now()->subDays(5),
            ],
            [
                'assunto' => 'Combo Família - Oferta Limitada',
                'conteudo' => "👨‍👩‍👧‍👦 *Família Tomodachi!* 👨‍👩‍👧‍👦\n\nReúna a família e aproveite nossa oferta especial!\n\n🎊 *{promocao}*\n\n{descricao}\n\n🍱 *O que está incluído:*\n• Temakis variados\n• Sushis frescos\n• Bebidas geladas\n• Petiscos deliciosos\n\n📱 *Para pedir:*\nEnvie uma mensagem com \"COMBO FAMÍLIA\"\n\n⏰ *Válido até:* {validade}\n\n{call_to_action}",
                'call_to_action' => 'Peça seu combo agora!',
                'ativa' => true,
                'created_at' => now()->subDays(3),
            ],
            [
                'assunto' => 'Happy Hour - Bebidas 50% OFF',
                'conteudo' => "🍻 *Happy Hour Tomodachi!* 🍻\n\nDas 17h às 19h, todas as bebidas com 50% de desconto!\n\n🎉 *{promocao}*\n\n{descricao}\n\n🍺 *Bebidas incluídas:*\n• Cervejas geladas\n• Refrigerantes\n• Sucos naturais\n• Bebidas alcoólicas\n\n⏰ *Horário:* 17h às 19h\n📅 *Válido até:* {validade}\n\n📍 *Venha nos visitar!*\nRestaurante Tomodachi\n\n{call_to_action}",
                'call_to_action' => 'Venha aproveitar!',
                'ativa' => true,
                'created_at' => now()->subDays(1),
            ],
            [
                'assunto' => 'Delivery Grátis - Peça Agora',
                'conteudo' => "🚚 *Delivery Grátis Tomodachi!* 🚚\n\nAproveite nossos pratos favoritos no conforto da sua casa!\n\n🎁 *{promocao}*\n\n{descricao}\n\n🍱 *Como funciona:*\n1. Faça seu pedido acima de R$ 60,00\n2. Frete grátis para toda a cidade\n3. Entrega rápida e segura\n\n📱 *Para pedir:*\nWhatsApp: (11) 99999-9999\n\n⏰ *Válido até:* {validade}\n\n{call_to_action}",
                'call_to_action' => 'Peça seu delivery!',
                'ativa' => true,
                'created_at' => now()->subDays(2),
            ],
            [
                'assunto' => 'Sushi Premium - Desconto Especial',
                'conteudo' => "🍣 *Sushi Premium Tomodachi* 🍣\n\nDesconto especial em nossos sushis mais exclusivos!\n\n✨ *{promocao}*\n\n{descricao}\n\n🐟 *Sushis Premium:*\n• Salmão fresco\n• Atum de qualidade\n• Peixes importados\n• Combinações únicas\n\n💰 *Condição:* Pedidos acima de R$ 80,00\n\n⏰ *Válido até:* {validade}\n\n{call_to_action}",
                'call_to_action' => 'Experimente nossos sushis premium!',
                'ativa' => true,
                'created_at' => now()->subDays(4),
            ],
        ];

        foreach ($mensagens as $mensagem) {
            Mensagem::create($mensagem);
        }
    }
}
