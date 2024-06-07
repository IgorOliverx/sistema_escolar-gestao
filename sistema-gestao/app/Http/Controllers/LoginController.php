<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index():View
    {
        return \view('login');

    }

    public function store(LoginRequest $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        notify()->success('Este é um web-app para facilitar o gerenciamento de ativos patrimoniais', 'Seja Bem-vindo(a), Professor(a)!');

        return redirect('/dashboard/');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        emotify('success', 'Obrigado por utilizar nosso sistema! Luigi, Ezequiel e Igor');
        return redirect('/');
    }
}
