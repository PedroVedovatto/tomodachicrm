<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientes = [
            [
                'nome' => 'Maria Silva',
                'email' => 'maria@email.com',
                'telefone' => '(11) 99999-9999',
                'endereco' => 'Rua das Flores, 123 - Centro, São Paulo - SP',
                'ativo' => true,
                'created_at' => now()->subDays(10),
            ],
            [
                'nome' => 'João Santos',
                'email' => 'joao@email.com',
                'telefone' => '(11) 88888-8888',
                'endereco' => 'Av. Principal, 456 - Vila Nova, São Paulo - SP',
                'ativo' => true,
                'created_at' => now()->subDays(8),
            ],
            [
                'nome' => 'Ana Costa',
                'email' => 'ana@email.com',
                'telefone' => '(11) 77777-7777',
                'endereco' => 'Rua do Comércio, 789 - Centro, São Paulo - SP',
                'ativo' => true,
                'created_at' => now()->subDays(5),
            ],
            [
                'nome' => 'Carlos Oliveira',
                'email' => 'carlos@email.com',
                'telefone' => '(11) 66666-6666',
                'endereco' => 'Rua da Paz, 321 - Jardim das Flores, São Paulo - SP',
                'ativo' => true,
                'created_at' => now()->subDays(3),
            ],
            [
                'nome' => 'Fernanda Lima',
                'email' => 'fernanda@email.com',
                'telefone' => '(11) 55555-5555',
                'endereco' => 'Av. Brasil, 654 - Centro, São Paulo - SP',
                'ativo' => true,
                'created_at' => now()->subDays(1),
            ],
            [
                'nome' => 'Roberto Alves',
                'email' => 'roberto@email.com',
                'telefone' => '(11) 44444-4444',
                'endereco' => 'Rua das Palmeiras, 987 - Vila Rica, São Paulo - SP',
                'ativo' => false,
                'created_at' => now()->subDays(15),
            ],
        ];

        foreach ($clientes as $cliente) {
            Cliente::create($cliente);
        }
    }
}
