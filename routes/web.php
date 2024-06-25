<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoedselpakketController;

Route::get('/', function () {
    return view('welcome');
});


//alle routes voor voedselpakketten
Route::get('/voedselpakket', [VoedselpakketController::class, 'index'])->name('voedselpakket.index');
Route::get('/voedselpakket/create', [VoedselpakketController::class, 'create'])->name('voedselpakket.create');
Route::post('/voedselpakket', [VoedselpakketController::class, 'store'])->name('voedselpakket.store');
Route::get('/voedselpakket/{voedselpakketten}/edit', [VoedselpakketController::class, 'edit'])->name('voedselpakket.edit');
Route::put('/voedselpakket/{voedselpakketten}', [VoedselpakketController::class, 'update'])->name('voedselpakket.update');
Route::delete('/voedselpakket/{voedselpakketten}', [VoedselpakketController::class, 'destroy'])->name('voedselpakket.destroy');