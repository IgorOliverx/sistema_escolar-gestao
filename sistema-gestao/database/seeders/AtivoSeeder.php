<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //Seeders de salas
        DB::table('salas')->insert([
            'numero_sala' => '10A',
            'bloco_sala' => 'A',
            'user_id' => DB::table('users')->inRandomOrder()->first()->id,
        ]);

        DB::table('salas')->insert([
            'numero_sala' => '11A',
            'bloco_sala' => 'A',
            'user_id' => DB::table('users')->inRandomOrder()->first()->id,
        ]);

        DB::table('salas')->insert([
            'numero_sala' => '14D',
            'bloco_sala' => 'D',
            'user_id' => DB::table('users')->inRandomOrder()->first()->id,
        ]);

        DB::table('salas')->insert([
            'numero_sala' => '13B',
            'bloco_sala' => 'B',
            'user_id' => DB::table('users')->inRandomOrder()->first()->id,
        ]);

        DB::table('salas')->insert([
            'numero_sala' => '8A',
            'bloco_sala' => 'A',
            'user_id' => DB::table('users')->inRandomOrder()->first()->id,
        ]);

        DB::table('salas')->insert([
            'numero_sala' => '15C',
            'bloco_sala' => 'C',
            'user_id' => DB::table('users')->inRandomOrder()->first()->id,
        ]);




        //Seeders de ativos
        DB::table('ativos')->insert([
            'nome' => 'computador DELL',
            'categoria_patrimonio' => 'INFORMÁTICA',
            'patrimonio' => rand(0,10000),
            'id_sala' => DB::table('salas')->inRandomOrder()->first()->id,
        ]);

        DB::table('ativos')->insert([
            'nome' => 'Cadeira',
            'categoria_patrimonio' => 'GERAL',
            'patrimonio' => rand(0,10000),
            'id_sala' => DB::table('salas')->inRandomOrder()->first()->id,
        ]);

        DB::table('ativos')->insert([
            'nome' => 'impressora',
            'categoria_patrimonio' => 'INFORMÁTICA',
            'patrimonio' => rand(0,10000),
            'id_sala' => DB::table('salas')->inRandomOrder()->first()->id,
        ]);

        DB::table('ativos')->insert([
            'nome' => 'Monitor Dell',
            'categoria_patrimonio' => 'INFORMÁTICA',
            'patrimonio' => rand(0,10000),
            'id_sala' => DB::table('salas')->inRandomOrder()->first()->id,
        ]);

        DB::table('ativos')->insert([
            'nome' => 'mouse DELL',
            'categoria_patrimonio' => 'INFORMÁTICA',
            'patrimonio' => rand(0,10000),
            'id_sala' => DB::table('salas')->inRandomOrder()->first()->id,
        ]);

        DB::table('ativos')->insert([
            'nome' => 'teclado DELL',
            'categoria_patrimonio' => 'INFORMÁTICA',
            'patrimonio' => rand(0,10000),
            'id_sala' => DB::table('salas')->inRandomOrder()->first()->id,
        ]);

        DB::table('ativos')->insert([
            'nome' => 'fonte DELL',
            'categoria_patrimonio' => 'INFORMÁTICA',
            'patrimonio' => rand(0,10000),
            'id_sala' => DB::table('salas')->inRandomOrder()->first()->id,
        ]);

        DB::table('ativos')->insert([
            'nome' => 'notebook DELL',
            'categoria_patrimonio' => 'INFORMÁTICA',
            'patrimonio' => rand(0,10000),
            'id_sala' => DB::table('salas')->inRandomOrder()->first()->id,
        ]);

    }
}
