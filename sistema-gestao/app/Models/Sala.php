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
