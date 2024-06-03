<?php

use App\Http\Controllers\API\AtivoController;
use Illuminate\Support\Facades\Route;


//Route::middleware(['auth'])->group(function (){
    Route::resource('/ativos', AtivoController::class);
//});
