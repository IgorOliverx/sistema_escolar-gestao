<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'estoques';

    protected $fillable = [
        'nome',
        'quantidade',
        'departamento',
        'data_de_compra',
        'fornecedor'
    ];

    public function retornarEstoque()
    {
        return $this->get();
    }

    public function cadastrarEstoque(array $data)
    {
        return Estoque::create($data);
    }

    public function atualizaEstoque($id, $obj)
    {
        return $this->where('id', $id)->update($obj);
    }

    public function deletarEstoque($id)
    {
        return $this->where('id', $id)->delete();
    }

    public function retornarEstoquePorId($id)
    {
        return $this->where('id', $id)->get();
    }


}
