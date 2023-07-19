<?php

namespace Database\Seeders;

use App\Models\Produtos_Tags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoTagSeeder extends Seeder
{
    public function run(): void
    {
        Produtos_Tags::create([
            'produto_id' => 3,
            'tag_id' => 1,
        ]);

        Produtos_Tags::create([
            'produto_id' => 2,
            'tag_id' => 2,
        ]);

        Produtos_Tags::create([
            'produto_id' => 1,
            'tag_id' => 3,
        ]);

    }
}
