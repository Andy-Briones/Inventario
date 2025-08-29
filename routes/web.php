<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;
use App\Http\Controllers\PersonaController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('biens', BienController::class);
Route::resource('persons', PersonaController::class);