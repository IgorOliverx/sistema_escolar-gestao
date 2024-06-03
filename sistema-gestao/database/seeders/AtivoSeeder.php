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
        DB::table('ativos')->insert([
            'nome' => 'computador DELL',
            'patrimonio' => rand(0,10000),
        ]);

        DB::table('ativos')->insert([
            'nome' => 'Cadeira',
            'patrimonio' => rand(0,10000),
        ]);

        DB::table('ativos')->insert([
            'nome' => 'impressora',
            'patrimonio' => rand(0,10000),
        ]);

        DB::table('ativos')->insert([
            'nome' => 'Monitor Dell',
            'patrimonio' => rand(0,10000),
        ]);

        DB::table('ativos')->insert([
            'nome' => 'mouse DELL',
            'patrimonio' => rand(0,10000),
        ]);

        DB::table('ativos')->insert([
            'nome' => 'teclado DELL',
            'patrimonio' => rand(0,10000),
        ]);

        DB::table('ativos')->insert([
            'nome' => 'fonte DELL',
            'patrimonio' => rand(0,10000),
        ]);

        DB::table('ativos')->insert([
            'nome' => 'notebook DELL',
            'patrimonio' => rand(0,10000),
        ]);

    }
}
