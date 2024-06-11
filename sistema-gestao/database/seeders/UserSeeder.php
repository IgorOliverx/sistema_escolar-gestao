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
            'nome' => 'Eduardo Furlanetti',
            'username' => '123.123.123-12',
            'password' => Hash::make('senai@2024'),
            'ultimo_login' => Carbon::now(),
            'email' => 'edujujunior@gmail.com',
            'is_admin' => false,
        ]);

        DB::table('users')->insert([
            'nome' => 'Diogo Takamori Barbosa',
            'username' => '123.456.789-10',
            'password' => Hash::make('senai@2024'),
            'ultimo_login' => Carbon::now(),
            'is_admin' => false,
            'email' => 'digogo@gmail.com',
        ]);

        DB::table('users')->insert([
            'nome' => 'Celso Ricardo Carvalho',
            'username' => '109.876.543-21',
            'password' => Hash::make('senai@2024'),
            'ultimo_login' => Carbon::now(),
            'is_admin' => false,
            'email' => 'celsoricarvalho@gmail.com'
        ]);

        DB::table('users')->insert([
            'nome' => 'Bruno A. Moraes',
            'username' => '109.876.263-23',
            'password' => Hash::make('senai@2024'),
            'ultimo_login' => Carbon::now(),
            'is_admin' => false,
            'email' => 'luigicartolafc@gmail.com'
        ]);
        DB::table('users')->insert([
            'nome' => 'Renata',
            'username' => '342.564.235-32',
            'password' => Hash::make('senai@2024'),
            'ultimo_login' => Carbon::now(),
            'is_admin' => false,
            'email' => 'cl201249@g.unicamp.br'
        ]);

        DB::table('users')->insert([
            'nome' => 'Thiago Barbosa',
            'username' => '478.460.858-32',
            'password' => Hash::make('senai@2024'),
            'ultimo_login' => Carbon::now(),
            'is_admin' => true,
            'email' => 'igorferoli019@gmail.com'
        ]);
    }
}
