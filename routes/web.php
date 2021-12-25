<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ArbolController;
use App\Http\Controllers\TierraController;

Route::get('/', function () {
    return view('home');
})->middleware('auth')
->name('public'); /*SI NO HAY SESION ACTIVA REDIRECCIONA AL LOGIN*/

Route::get('/register', [RegisterController::class , 'create'])
        ->middleware('guest')
        ->name('register.index'); /*MUESTRA FORMULARIO PARA REGISTRO*/

Route::post('/register', [RegisterController::class , 'store'])
        ->name('register.store'); /*ALMACENA NUEVO USUARIO*/

Route::get('/login', [SessionsController::class , 'create'])
        ->middleware('guest')        
        ->name('login.index'); /*MUESTRA FORMULARIO PARA LOGIN*/


Route::post('/login', [SessionsController::class , 'store'])
        ->name('login.store'); /*VALIDA EL MAIL Y EL PASSWORD*/

Route::get('/logout', [SessionsController::class , 'destroy'])
        ->middleware('auth')        
        ->name('login.destroy'); /*CERRAR SESION*/

Route::get('/profile', [SessionsController::class , 'index'])
        ->name('profile.index');/*CONTROLADOR PARA MOSTRAR PERFIL DE USUARIO*/

Route::resource('arbol', ArbolController::class); /*CONTROLADOR PARA ARBOLES*/
Route::resource('tierra', TierraController::class);/*CONTROLADOR PARA ESPACIOS EN TIERRA DISPONIBLES*/