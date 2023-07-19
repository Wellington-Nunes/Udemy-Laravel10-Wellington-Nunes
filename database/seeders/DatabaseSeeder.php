<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
         ProdutosSeeder::class,
         ClientesSeeder::class,
         VendaSeeder::class,
         UsuarioSedeer::class,
         TagSeeder::class,
         ProdutoTagSeeder::class,
        ]);
    }
}
