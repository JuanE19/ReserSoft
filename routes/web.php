<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HabitacionController;

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('usuario','App\Http\Controllers\UsuarioController');
Route::post('usuarios/{usuario?}', [UsuarioController::class, "actualizarEstado"])->name('usuarioEstado');

// rutas clientes
Route::resource('clientes','App\Http\Controllers\ClienteController');
Route::post('clientes/{cliente?}', [ClienteController::class, "actualizarEstado"])->name('clienteEstado');

// rutas habitaciones
Route::resource('habitaciones','App\Http\Controllers\HabitacionController');
Route::post('habitaciones/{habitacion?}', [HabitacionController::class, "actualizarEstado"])->name('habitacionestado');

// rutas reservas
Route::resource('reserva','App\Http\Controllers\ReservaController');
Route::post('reserva/{reserva?}', [ReservaController::class, "actualizarEstadoReserva"])->name('estadoReserva');

//ruta ayuda en linea
Route::get('/ayudaenlinea', function() {
return view ('ayudaenlinea.ayuda');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});

