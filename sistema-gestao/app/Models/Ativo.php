<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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
    public function retornarAtivos(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->all();
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


}
