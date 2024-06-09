<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index():View
    {
        return \view('login');

    }

    /**
     * @throws ValidationException
     */
    public function store(LoginRequest $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $userLogado = Auth::user()->nome;
        notify()->success('Este é um web-app para facilitar o gerenciamento de ativos patrimoniais', 'Seja Bem-vindo(a), '. $userLogado);

        return redirect('/dashboard/');
    }

    public function destroy(Request $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        emotify('success', 'Obrigado por utilizar nosso sistema! Luigi, Ezequiel e Igor');
        return redirect('/');
    }
}
