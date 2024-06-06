<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /**
         * MAPEAMENTO DE SALAS X PROFESSORES
         * EDUARDO = SALA 05A
         * DIOGO = SALA 10A
         * CELSO = SALA 08A/07A
         * BRUNO = SALA 15A
         * RENATA = MANUFATURA
         * THIAGO = COMPETIDOR/ROBOTICA/outras salas de outros blocos
         *
         */

        //Seeders de salas do bloco A
        DB::table('salas')->insert([
            'numero_sala' => '05A',
            'bloco_sala' => 'A',
            'user_id' => 1,
        ]);

        DB::table('salas')->insert([
            'numero_sala' => '07A',
            'bloco_sala' => 'A',
            'user_id' => 3,
        ]);

        DB::table('salas')->insert([
            'numero_sala' => '08A',
            'bloco_sala' => 'A',
            'user_id' => 3,
        ]);

        DB::table('salas')->insert([
            'numero_sala' => '10A',
            'bloco_sala' => 'A',
            'user_id' => 2,
        ]);

        DB::table('salas')->insert([
            'numero_sala' => '15A',
            'bloco_sala' => 'A',
            'user_id' => 4,
        ]);

        DB::table('salas')->insert([
            'numero_sala' => 'COMPETIDOR',
            'bloco_sala' => 'A',
            'user_id' => 6,
        ]);

        DB::table('salas')->insert([
            'numero_sala' => 'ROBOTICA',
            'bloco_sala' => 'A',
            'user_id' => 6,
        ]);

        DB::table('salas')->insert([
            'numero_sala' => 'MANUFATURA',
            'bloco_sala' => 'A',
            'user_id' => 5,
        ]);


        //Salas de outros blocos
        DB::table('salas')->insert([
            'numero_sala' => '7B',
            'bloco_sala' => 'B',
            'user_id' => 6,
        ]);

        DB::table('salas')->insert([
            'numero_sala' => '1C',
            'bloco_sala' => 'C',
            'user_id' => 6,
        ]);

        DB::table('salas')->insert([
            'numero_sala' => '14D',
            'bloco_sala' => 'D',
            'user_id' => 6,
        ]);

    }
}
