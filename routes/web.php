<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeverancierController;

Route::get('/', function () {
    return view('welcome');
});


//alle routes voor leveranciers
Route::get('/leveranciers', [LeverancierController::class, 'index'])->name('leveranciers.index');
Route::get('/leveranciers/create', [LeverancierController::class, 'create'])->name('leveranciers.create');
Route::post('/leveranciers', [LeverancierController::class, 'store'])->name('leveranciers.store');
Route::get('/leveranciers/{leverancier}', [LeverancierController::class, 'show'])->name('leveranciers.show');
Route::get('/leveranciers/{leverancier}/edit', [LeverancierController::class, 'edit'])->name('leveranciers.edit');
Route::put('/leveranciers/{leverancier}', [LeverancierController::class, 'update'])->name('leveranciers.update');
Route::delete('/leveranciers/{leverancier}', [LeverancierController::class, 'destroy'])->name('leveranciers.destroy');
