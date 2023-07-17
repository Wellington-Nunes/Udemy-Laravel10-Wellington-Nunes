<?php

namespace Database\Seeders;

use App\Models\Produtos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    public function run(): void
    {
        Produtos::create(
            [
            'nome' => 'Cerveja',
            'valor' => "5.99"
            ]
        );
        
        Produtos::create([
            'nome' => 'Vinho',
            'valor' => '19.99'
        ]);

        Produtos::create([
            'nome' => 'Refrigerante',
            'valor' => '3.50'
        ]);

        Produtos::create([
            'nome' => 'Água',
            'valor' => '1.99'
        ]);

    }
}
