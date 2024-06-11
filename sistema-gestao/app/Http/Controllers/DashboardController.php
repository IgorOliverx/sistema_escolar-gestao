<?php

namespace App\Http\Controllers;

use App\Models\Ativo;
use App\Models\Sala;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public readonly Ativo $ativo;
    public readonly User $user;
    public readonly Sala $sala;
    public function __construct()
    {
        $this->ativo = new Ativo();
        $this->user = new User();
        $this->sala = new Sala();
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
        $professorResponsavel = $this->sala->retornaResponsavel();
        $ativosBlocoB = $this->ativo->retornaAtivoBloco('B');
        return \view('dashboard.painelBlocoB', ['responsavel' => $professorResponsavel]);
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

    public function solicitarManutencao(string $id)
    {
        try{
        $this->ativo->colocarEmManutencao($id);
        //enviar email pro thiago
        //emitir pdf
        notify()->success('Um relatório foi gerado e o ativo está sob manutenção', 'Ativo Em Manutenção');
        return back();

        }catch (\Exception $error){
            notify()->error('Erro ao solicitar manutenção', 'Erro');
            return back();
        }
    }

    public function ativosManutencao($sala)
    {
        $ativos = $this->ativo->retornaAtivosManutencao($sala);
        return \view('dashboard.todos-blocos', ['ativos' => $ativos]);
    }
}
