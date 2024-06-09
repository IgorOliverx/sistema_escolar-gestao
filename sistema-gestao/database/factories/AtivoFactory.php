<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ativo>
 */
class AtivoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'=> 'Patrimonio',
            'categoria_patrimonio' => 'INFORMÁTICA',
            'patrimonio' => rand(1000000, 9999999),
            'status'=> 'Ativo',
            'manutencao' => 0,
            'data_compra' => Carbon::now(),
            'id_sala' => DB::table('salas')->inRandomOrder()->first()->id,
        ];
    }
}
