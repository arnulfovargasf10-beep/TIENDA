<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('Cliente', ClienteController::class);
Route::delete('/cliente/{id}', [ClienteController::class, 'destroy'])->name('Cliente.destroy');
Route::get('/flight', [flightController::class, 'index'])->name('flight.index');
Route::post('/Cliente', [ClienteController::class, 'store'])->name('Cliente.store');

Route::put('Cliente/{Clientes}', [ClienteController::class, 'update'])->name('Cliente.update');