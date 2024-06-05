<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'nome',
        'ultimo_login',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password'
    ];

    /**
     * Get the attributes that should be cast.
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
     * Cada Professor pode ter várias salas
     * @return HasMany
     */
    public function sala(): HasMany
    {
      return $this->hasMany(Sala::class);
    }


    public function is_admin(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value == 1 ? 'Yes' : 'No',
            set: fn($value) => $value == 'Yes' ? 1 : 0,
        );
    }


}
