<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    /**
     * ATRIBUTOS ATRIBUÍDOS EM MASSA.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'nome',
        'email',
        'ultimo_login',
        'is_admin',
        'photo',
    ];

    /**
     * ATRIBUTOS QUE PRECISAM DE SERIALIZAÇÃO
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password'
    ];

    /**
     * ATRIBUTOS QUE PRECISAM DE CAST
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'ultimo_login' => 'datetime',
            'password' => 'hashed',
        ];
    }




    /**
     * Retorna as salas da qual o User logado é responsável
    */
    public function retornarSalaUserLogado()
    {
        $idUserLogado = Auth::user()->id;

        $collection = $this->with('sala')
            ->where('id', $idUserLogado)
            ->first();
        return $collection->sala;
    }


    /**
     * CHAVE ESTRANGEIRA
     * Cada Professor pode ter várias salas
     * @return HasMany
     */
    public function sala(): HasMany
    {
        return $this->hasMany(Sala::class);
    }

}


