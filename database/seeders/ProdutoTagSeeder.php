<?php

namespace Database\Seeders;

use App\Models\TagsProdutos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoTagSeeder extends Seeder
{
    
    public function run(): void
    {
        TagsProdutos::create([
            'produto_id' => 3,
            'tag_id' => 1,
        ]);

        TagsProdutos::create([
            'produto_id' => 2,
            'tag_id' => 2,
        ]);
    }
}
