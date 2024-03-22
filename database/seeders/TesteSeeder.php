<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teste;

class TesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teste::create([
            'nome' => 'Marcus Levi',
            'cpf' => '80032165257',
            'peso' => 86,
            'idade' => 22,
            'data_nascimento' => '2001-03-25'
        ]);
    }
}
