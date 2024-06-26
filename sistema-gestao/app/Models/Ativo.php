<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Auth;
use Laravel\SerializableClosure\UnsignedSerializableClosure;
use PhpParser\Node\Stmt\Return_;


class Ativo extends Model
{

    use HasFactory;

    public $timestamps = false;

    protected $table = 'ativos';

    protected $fillable = [
        'nome',
        'patrimonio',
        'categoria_patrimonio',
        'status',
        'manutencao'
    ];

    /**
     * LISTA TODOS OS ATIVOS
     */
    public function retornarAtivos(): Collection
    {
        return $this
            ->with('sala')
                ->get();
    }

    /**
     * CADASTRA ATIVOS
     * @param array $data
     * @return mixed
     */
    public function cadastrarAtivo(array $data)
    {
        return Ativo::create($data);
    }

    /**
     * ATUALIZA O ATIVO
    */
    public function atualizarAtivo($id, $obj)
    {
        return $this->where('id', $id)->update($obj);
    }

    /**
     * APAGA O ATIVO
    */
    public function apagarAtivo($id)
    {
        return $this->where('id', $id)->delete();
    }

    /**
     * RETORNA ATIVO PELO ID
    */
    public function retornarAtivo(string $id)
    {
        return $this->where('id', $id)->first();
    }

    /**
     * VERIFICA SE O ID DO ATIVO EXISTE
    */
    public function idExiste(string $id)
    {
        return $this->where('id', $id)->exists();
    }

    /**
     * RETORNA ATIVO POR SALA
    */
    public function retornaAtivoSala(string $sala): Collection|array
    {
       return Ativo::with('sala')
        ->whereHas('sala', function($query) use ($sala) {
           $query->where('numero_sala', '=',  $sala);
        })->get();

    }

    /**
     * RETORNA ATIVO POR BLOCO
    */
    public function retornaAtivoBloco(string $bloco): Collection|array
    {
        return Ativo::with(['sala', 'sala.user'])
            ->whereHas('sala', function($query) use ($bloco) {
                $query->where('bloco_sala', '=',  $bloco);
            })->get();

    }

    /**
     * COLOCA O ATIVO EM MANUTENÇÃO
     */
    public function colocarEmManutencao(string $id)
    {
        return $this->where('id', $id)->update(['manutencao' => 1]);
    }

    /**
     * DEFINE O STATUS COMO INATIVO
    */
    public function definirComoInativo(string $id)
    {
        return $this->where('id', $id)->update(['status' => 'Inativo']);
    }


    /**
     * RETORNA ATIVOS EM MANUTENÇÃO
    */
    public function retornaAtivosManutencao(string $sala): Collection|array
    {
        return Ativo::with('sala')
            ->whereHas('sala', function($query) use ($sala) {
                $query->where('numero_sala', '=',  $sala);
            })
            ->where('manutencao', 1)
            ->get();
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
