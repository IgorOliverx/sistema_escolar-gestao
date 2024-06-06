<?php

namespace App\Http\Controllers;

use App\Models\Ativo;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public readonly Ativo $ativo;

    public function __construct()
    {
        $this->ativo = new Ativo();
    }

    public function index():View
    {
        return \view('dashboard.index');
    }

    public function estoque():View
    {
        return \view('dashboard.estoque');
    }

    public function painelBlocoA():View
    {

        $ativosBlocoA = $this->ativo->retornaAtivoBloco('A');


        return view('dashboard.painelBlocos', ['ativosBlocoA' => $ativosBlocoA]);
    }

    public function painelBlocoB():View
    {
        $ativosBlocoB = $this->ativo->retornaAtivoBloco('B');
        return \view('dashboard.painelBlocos');
    }

    public function painelBlocoC():View
    {
        $ativosBlocoC = $this->ativo->retornaAtivoBloco('C');
        return \view('dashboard.painelBlocos');
    }

    public function painelBlocoD():View
    {
        $ativosBlocoD = $this->ativo->retornaAtivoBloco('D');
        return \view('dashboard.painelBlocos');
    }
}
