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
                'nome' => 'João da Silva',
                'email' => 'joao.silva@example.com',
                'endereco' => 'Rua da Paz, 123',
                'logradouro' => 'Centro',
                'cep' => '12345-678',
                'bairro' => 'Bairro 1',
            ]
        );
        Cliente::create(
            [
                'nome' => 'Maria do Carmo',
                'email' => 'maria.carmo@example.com',
                'endereco' => 'Rua da Felicidade, 456',
                'logradouro' => 'Bairro 2',
                'cep' => '98765-432',
                'bairro' => 'Bairro 2',
            ]
        );
        Cliente::create(
            [
                'nome' => 'José da Costa',
                'email' => 'jose.costa@example.com',
                'endereco' => 'Rua da Esperança, 789',
                'logradouro' => 'Bairro 3',
                'cep' => '54321-098',
                'bairro' => 'Bairro 3',
            ]
        );
        Cliente::create(
            [
                'nome' => 'Ana Paula',
                'email' => 'ana.paula@example.com',
                'endereco' => 'Rua da Alegria, 1011',
                'logradouro' => 'Bairro 4',
                'cep' => '98765-432',
                'bairro' => 'Bairro 4',
            ]
        );
        Cliente::create(
            [
                'nome' => 'Pedro Henrique',
                'email' => 'pedro.henrique@example.com',
                'endereco' => 'Rua da Paz, 1234',
                'logradouro' => 'Bairro 5',
                'cep' => '23456-789',
                'bairro' => 'Bairro 5',
            ]
        );

    }
}
