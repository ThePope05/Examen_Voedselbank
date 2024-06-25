<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoorraadController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/voorraad', [VoorraadController::class, 'index'])->name('voorraad.index');
Route::get('/voorraad/create', [VoorraadController::class, 'create'])->name('voorraad.create');
Route::post('/voorraad', [VoorraadController::class, 'store'])->name('voorraad.store');
Route::get('/voorraad/{id}', [VoorraadController::class, 'show'])->name('voorraad.show');
Route::get('/voorraad/{id}/edit', [VoorraadController::class, 'edit'])->name('voorraad.edit');
Route::put('/voorraad/{id}', [VoorraadController::class, 'update'])->name('voorraad.update');
Route::delete('/voorraad/{id}', [VoorraadController::class, 'destroy'])->name('voorraad.destroy');
