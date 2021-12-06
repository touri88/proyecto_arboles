<?php
use App\Http\Controllers\ArbolController;
use App\Http\Controllers\TierraController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Route::resource('arbol', ArbolController::class);
Route::resource('tierra', TierraController::class);
Route::resource('registro', RegistroController::class);
Route::resource('login', LoginController::class);
//Route::post('registro', [RegistroController::class, 'store']);