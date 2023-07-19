<?php

namespace Database\Seeders;

use App\Models\Produtos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    public function run(): void
    {
        Produtos::create([
            'nome' => 'Água',
            'valor' => '1.99',
        ]);
        Produtos::create([
            'nome' => 'Café',
            'valor' => '3.99',
        ]);
        Produtos::create([
            'nome' => 'Pão de Queijo',
            'valor' => '2.99',
        ]);
        Produtos::create([
            'nome' => 'Croissant',
            'valor' => '3.99',
        ]);
        Produtos::create([
            'nome' => 'Bolo de Chocolate',
            'valor' => '5.99',
        ]);
        Produtos::create([
            'nome' => 'Pastel de Frango',
            'valor' => '4.99',
        ]);
    }
}
