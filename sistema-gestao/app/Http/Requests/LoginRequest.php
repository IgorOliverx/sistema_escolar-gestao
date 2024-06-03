<?php

namespace App\Http\Requests;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required'],
            'password' => ['required', 'string', 'min:8', 'max:255'],
        ];
    }

    /**
     *
     * @return void
     *
     * @throws ValidationException
     */
    public function authenticate()
    {
        if(!Auth::attempt($this->only('username', 'password'), $this->boolean('remember'))) {

            RateLimiter::hit($this->chave());

           throw ValidationException::withMessages([
               'username' => 'CPF incorreto.',
               'password' => 'Senha incorreta.',
           ]);
        }
        RateLimiter::clear($this->chave());
    }

    /**
     * @throws ValidationException
     */
    public function limitacao():void
    {
        if(!RateLimiter::tooManyAttempts($this->chave(), 3)){
            return;
        }
        event(new Lockout($this));

        $seconds = \Illuminate\Support\Facades\RateLimiter::availableIn($this->chave());

        throw \Illuminate\Validation\ValidationException::withMessages([
            'username' => trans('auth.chave', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60)
            ])
        ]);
    }

    public function chave():string
    {
        return Str::transliterate(Str::lower($this->string('username')). '|' .$this->ip());
    }

}
