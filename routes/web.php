<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;




Route::get('/', function () {
    return view('auth.login');
});


Route::resource('clientes','App\Http\Controllers\ClienteController');
Route::post('clientes/{cliente?}', [ClienteController::class, "actualizarEstado"])->name('clienteEstado');

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
