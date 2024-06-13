<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'estoque';

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

    public function cadastrarEstoque()
    {

    }
}
