<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSedeer extends Seeder
{
    public function run(): void
    {
        User::create(
            [
                'name' => 'Guiulherme',
                'email' => 'gui@mail.com',
                'password' => Hash::make('1234'),
            ]
        );
    }
}
