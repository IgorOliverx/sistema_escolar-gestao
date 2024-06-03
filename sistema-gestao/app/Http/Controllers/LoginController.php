<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
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
        //$request->session()->regenerateToken();

        return redirect('/');
    }

    public function destroy(string $id)
    {

    }
}
