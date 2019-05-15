<?php

use Illuminate\Database\Seeder;
use App\Atividade;

class atividadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Atividade::create([
            'titulo' => 'Desenvolver o trabalho de Tópicos Especiais',
            'texto' => 'Implementar o trabalho final da disciplina',
            'autor' => 'Cleiton Oswaldo',
        ]);

    }
}
