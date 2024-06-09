<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sala extends Model
{
    use HasFactory;

    protected $table = 'salas';

    public $timestamps = false;
    protected $fillable = [
        'nome_sala',
        'bloco_sala'
    ];



    public function retornaResponsavel(string $sala)
    {
         //pegar o numero_sala
        //pesquisar pelo user que bate com o user)_id de acordo com o numero sala
        return $this->with('user')
           ->where('numero_sala', '=', $sala)
            ->get();

    }


    /**
     * Cada sala só pode ter um professor
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Cada sala tem vários ativos
     */
    public function ativos(): HasMany
    {
        return $this->hasMany(Ativo::class);
    }
}
