<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;




Route::get('/', function () {
    return view('auth.login');
});

Route::resource('usuario','App\Http\Controllers\UsuarioController');
Route::post('usuarios/{usuario?}', [UsuarioController::class, "actualizarEstado"])->name('usuarioEstado');


Route::resource('clientes','App\Http\Controllers\ClienteController');
Route::resource('habitaciones','App\Http\Controllers\HabitacionController');
Route::resource('reserva','App\Http\Controllers\ReservaController');

 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});
