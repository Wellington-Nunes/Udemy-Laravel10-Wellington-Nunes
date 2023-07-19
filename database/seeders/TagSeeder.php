<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        Tag::create([
            'nome' => 'Bebida',
        ]);
        Tag::create([
            'nome' => 'Doce',
        ]);
        Tag::create([
            'nome' => 'Salgado',
        ]);
        Tag::create([
            'nome' => 'Padaria',
        ]);
        Tag::create([
            'nome' => 'Café',
        ]);
        Tag::create([
            'nome' => 'Lanche',
        ]);
    }
}
