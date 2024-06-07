<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

//Rota index Não-logada
Route::get('/', [IndexController::class, 'index'])->name('/');

Route::middleware(['auth'])->group(function (){
   Route::resource('/dashboard', DashboardController::class);
    Route::get('/painel/estoque', [DashboardController::class, 'estoque'])->name('estoque');
   Route::get('/painel/blocoA', [DashboardController::class, 'painelBlocoA'])->name('painelBlocosA');
   Route::get('/painel/blocoB', [DashboardController::class, 'painelBlocoB'])->name('painelBlocosB');
   Route::get('/painel/blocoC', [DashboardController::class, 'painelBlocoC'])->name('painelBlocosC');
   Route::get('/painel/blocoD', [DashboardController::class, 'painelBlocoD'])->name('painelBlocosD');
});

//Rotas de login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('autenticar');


//Rota para logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

