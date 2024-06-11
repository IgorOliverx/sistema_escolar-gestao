<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

//Rota index Não-logada
Route::get('/', [IndexController::class, 'index'])->name('/');

Route::fallback(function (){
    return view('404');
});


/**
 * Middleware de proteção de rotas
*/
Route::middleware(['auth'])->group(function (){
   Route::resource('/dashboard', DashboardController::class);

   //Rota para acessar o estoque
    Route::get('/painel/estoque', [DashboardController::class, 'estoque'])->name('estoque');

   //Rotas de acesso aos painéis dos blocos
   Route::get('/painel/blocoA', [DashboardController::class, 'painelBlocoA'])->name('painelBlocosA');
   Route::get('/painel/blocoB', [DashboardController::class, 'painelBlocoB'])->name('painelBlocosB');
   Route::get('/painel/blocoC', [DashboardController::class, 'painelBlocoC'])->name('painelBlocosC');
   Route::get('/painel/blocoD', [DashboardController::class, 'painelBlocoD'])->name('painelBlocosD');


   //Rota para acessar sua salas
    Route::get('/painel/minha-sala/{sala}', [DashboardController::class, 'minhaSala'])->name('minhaSala');


    //Rota para colocar um ativo em manutencao
    Route::get('/painel/minha-sala/manutencao/{ativo}', [DashboardController::class, 'solicitarManutencao'])->name('manutencao');


    //ROTA SOMENTE PARA O THIAGO
    Route::get('/painel/ativos/manutencao/{sala}', [DashboardController::class, 'ativosManutencao'])->name('ativosManutencao');



});

//Rotas de login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('autenticar');


//Rota para logout
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

//Rota de teste
Route::get('/teste', [\App\Models\Sala::class, 'retornaResponsavel']);


Route::get('/funciona', function (){

    $mail = \Illuminate\Support\Facades\Mail::to('luigienricossilva@gmail.com')->send(new \App\Mail\Mailfun);

});

