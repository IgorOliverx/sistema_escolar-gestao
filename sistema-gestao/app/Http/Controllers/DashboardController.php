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

    public function index(): View
    {
//     $idUserLogado = Auth::user()->id;

//     //Retorno uma coleção da entidade de usuários e as chaves que foram carregadas
//  //   $usuario = $this->user->retornarSalas($idUserLogado);
//   //  $sala = $usuario->first();
//   //  $teste = $sala->sala;

//     $teste =  $this->user->with('sala')
//           ->where('id', $idUserLogado)
//               ->get();

//       foreach ($teste as $item) {
//           $a = $item->sala;
//           foreach ($a as $b){
//             dd($b->numero_sala);
//           }
//     }

      return view('dashboard.index');

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
}
