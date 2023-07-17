<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
  
    public function run(): void
    {
        Cliente::create(
            [
                'nome' => 'Lionel Messi',
                'email' => 'messi@example.com',
                'endereco' => 'Endereço 1',
                'logradouro' => 'Logradouro 1',
                'cep' => '12345-678',
                'bairro' => 'Bairro 1',
            ]
        );
        Cliente::create(
            [
                'nome' => 'Cristiano Ronaldo',
                'email' => 'ronaldo@example.com',
                'endereco' => 'Endereço 2',
                'logradouro' => 'Logradouro 2',
                'cep' => '98765-432',
                'bairro' => 'Bairro 2',
            ]
        );
        Cliente::create(
            [
                'nome' => 'Neymar Jr.',
                'email' => 'neymar@example.com',
                'endereco' => 'Endereço 3',
                'logradouro' => 'Logradouro 3',
                'cep' => '54321-098',
                'bairro' => 'Bairro 3',
            ]
        );
        Cliente::create(
            [
                'nome' => 'Kylian Mbappé',
                'email' => 'mbappe@example.com',
                'endereco' => 'Endereço 4',
                'logradouro' => 'Logradouro 4',
                'cep' => '98765-432',
                'bairro' => 'Bairro 4',
            ]
        );
        Cliente::create(
            [
                'nome' => 'Robert Lewandowski',
                'email' => 'lewandowski@example.com',
                'endereco' => 'Endereço 5',
                'logradouro' => 'Logradouro 5',
                'cep' => '23456-789',
                'bairro' => 'Bairro 5',
            ]
        );

    }
}
