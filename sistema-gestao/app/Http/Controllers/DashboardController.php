<?php

namespace App\Http\Controllers;

use App\Models\Ativo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public readonly Ativo $ativo;
    public readonly User $user;
    public function __construct()
    {
        $this->ativo = new Ativo();
        $this->user = new User();
    }

    public function index()
    {
        $salas = $this->user->retornarSalaUserLogado();
      return view('dashboard.index', ['salas' => $salas]);

    }

    public function painelBlocoA():View
    {

        $ativosBlocoA = $this->ativo->retornaAtivoBloco('A');

        return view('dashboard.painelBlocos');
    }

    public function painelBlocoB():View
    {
        $ativosBlocoB = $this->ativo->retornaAtivoBloco('B');
        return \view('dashboard.painelBlocoB');
    }

    public function painelBlocoC():View
    {
        $ativosBlocoC = $this->ativo->retornaAtivoBloco('C');
        return \view('dashboard.painelBlocoC');
    }

    public function painelBlocoD():View
    {
        $ativosBlocoD = $this->ativo->retornaAtivoBloco('D');
        return \view('dashboard.painelBlocoD');
    }

    public function estoque(): View
    {
        return \view('dashboard.estoque');
    }

    public function minhaSala(string $sala): View
    {
        $ativos = $this->ativo->retornaAtivoSala($sala);
        return \view('dashboard.sua-sala', ['ativos' => $ativos]);
    }

    public function solicitarManutencao()
    {
        //quando clicar no botao
        //mudar o campo precisa de manutenção
        //enviar email pro thiago
        //emitir pdf
    }
}
