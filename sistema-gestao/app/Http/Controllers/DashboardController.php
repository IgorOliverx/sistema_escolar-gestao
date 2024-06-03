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

    public function painelBlocoA():View
    {

        //Esses são os ativos do blocoA
        $ativosBlocoA = $this->ativo->retornaAtivoBloco('A');

        //Agora precisamos extrair os ativos do blocoA mas concomitante as suas salas
        //o método ja está criado, precisa da lógica de negócio agora

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
