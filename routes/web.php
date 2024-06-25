<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoorraadController;
use App\Http\Controllers\LeverancierController;

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


//alle routes voor leveranciers
Route::get('/leveranciers', [LeverancierController::class, 'index'])->name('leveranciers.index');
Route::get('/leveranciers/create', [LeverancierController::class, 'create'])->name('leveranciers.create');
Route::post('/leveranciers', [LeverancierController::class, 'store'])->name('leveranciers.store');
Route::get('/leveranciers/{leverancier}', [LeverancierController::class, 'show'])->name('leveranciers.show');
Route::get('/leveranciers/{leverancier}/edit', [LeverancierController::class, 'edit'])->name('leveranciers.edit');
Route::put('/leveranciers/{leverancier}', [LeverancierController::class, 'update'])->name('leveranciers.update');
Route::delete('/leveranciers/{leverancier}', [LeverancierController::class, 'destroy'])->name('leveranciers.destroy');
