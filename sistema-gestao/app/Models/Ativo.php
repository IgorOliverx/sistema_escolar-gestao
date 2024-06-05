<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


//Lembrar de criar o repositorio desses metodos daqui do modelo

class Ativo extends Model
{

    use HasFactory;

    public $timestamps = false;

    protected $table = 'ativos';

    protected $fillable = [
        'nome',
        'patrimonio',
        'categoria_patrimonio'
    ];

    /**
     * CRUD
     */
    public function retornarAtivos(): Collection
    {
        return $this
            ->with('sala')
                ->get();
    }
    public function cadastrarAtivo(array $data)
    {
        return Ativo::create($data);
    }
    public function atualizarAtivo($id, $obj)
    {
        return $this->where('id', $id)->update($obj);
    }
    public function apagarAtivo($id)
    {
        return $this->where('id', $id)->delete();
    }


    /**
     * Consultas adicionais
    */
    public function retornarAtivo(string $id)
    {
        return $this->where('id', $id)->first();

    }

    public function idExiste(string $id)
    {
        return $this->where('id', $id)->exists();
    }

    public function salaExiste(string $sala)
    {
        return Ativo::with('sala')
            ->whereHas('sala', function ($query) use ($sala){
               $query->where('numero_sala', $sala)->exists();
            })->get();
    }


    public function retornaAtivoSala(string $sala): Collection|array
    {
        return Ativo::with('sala')
            ->whereHas('sala', function($query) use ($sala) {
                $query->where('numero_sala', '=',  $sala);
            })->get();
    }

    public function retornaAtivoBloco(string $bloco): Collection|array
    {
        return Ativo::with('sala')
            ->whereHas('sala', function($query) use ($bloco) {
                $query->where('bloco_sala', '=',  $bloco);
            })->get();

    }




    /**
     * CHAVE ESTRANGEIRA
     * Cada ativo tem somente 1 sala
     *
     */
    public function sala(): BelongsTo
    {
        return $this->belongsTo(Sala::class, 'id_sala');
    }
}
