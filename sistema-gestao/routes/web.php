<?php

use App\Http\Controllers\AtivosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

//Rota index Não-logada
Route::get('/', [IndexController::class, 'index'])->name('/');

Route::middleware(['auth'])->group(function (){
   Route::resource('/dashboard', DashboardController::class);
});

//Rotas de login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('autenticar');


//Rota para logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/ativos', [AtivosController::class, 'index'])->name('ativos.index');
