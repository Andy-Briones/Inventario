<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('biens', BienController::class);
Route::resource('persons', PersonaController::class);
Route::resource('users', UserController::class);