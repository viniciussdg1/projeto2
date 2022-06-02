<?php

namespace Database\Seeders;

use App\Models\produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //água, cerveja, refrigerante, PF e brigadeiro
        produto::create(['nome' => 'Água', 'descricao' => 'blabla', 'preco' => '1.0']);
        produto::create(['nome' => 'cerveja', 'descricao' => 'blabla', 'preco' => '5.0']);
        produto::create(['nome' => 'refrigerante', 'descricao' => 'blabla', 'preco' => '5.0']);
        produto::create(['nome' => 'PF', 'descricao' => 'blabla', 'preco' => '10.0']);
        produto::create(['nome' => 'brigadeiro', 'descricao' => 'blabla', 'preco' => '1.0']);
    }
}
