<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sala extends Model
{
    use HasFactory;

    protected $table = 'salas';

    public $timestamps = false;
    protected $fillable = [
        'nome_sala'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function ativos()
    {

    }
}
