<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nome' => 'Eduardo Ananias',
            'username' => '12312312312',
            'password' => Hash::make('senai123'),
            'ultimo_login' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'nome' => 'Diogo Takamori Barbosa',
            'username' => '123.456.789-10',
            'password' => Hash::make('senai@2024'),
            'ultimo_login' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'nome' => 'Celso Ricardo Carvalho',
            'username' => '109.876.543-21',
            'password' => Hash::make('senai@2024'),
            'ultimo_login' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'nome' => 'Bruno Oliveira',
            'username' => '109.876.263-23',
            'password' => Hash::make('senai@2024'),
            'ultimo_login' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'nome' => 'Igor Oliveira',
            'username' => '1',
            'password' => Hash::make('senai'),
            'ultimo_login' => Carbon::now(),
        ]);
    }
}
