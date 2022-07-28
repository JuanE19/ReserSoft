<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('auth.login');
});


Route::resource('clientes','App\Http\Controllers\ClienteController');

Route::resource('reservas','App\Http\Controllers\ReservaController');
 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});
