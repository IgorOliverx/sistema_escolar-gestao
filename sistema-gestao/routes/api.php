<?php

use App\Http\Controllers\AtivoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::middleware(['auth'])->group(function (){
    Route::resource('/ativos', AtivoController::class);
//});
