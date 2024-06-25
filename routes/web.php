<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlantController;
use App\Models\Allergy;
use App\Models\Klant;
use App\Http\Controllers\VoedselpakketController;
use App\Http\Controllers\VoorraadController;
use App\Http\Controllers\LeverancierController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//alle routes voor voorraad
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


//alle routes voor voedselpakketten
Route::get('/voedselpakket', [VoedselpakketController::class, 'index'])->name('voedselpakket.index');
Route::get('/voedselpakket/create', [VoedselpakketController::class, 'create'])->name('voedselpakket.create');
Route::post('/voedselpakket', [VoedselpakketController::class, 'store'])->name('voedselpakket.store');
Route::get('/voedselpakket/{voedselpakketten}/edit', [VoedselpakketController::class, 'edit'])->name('voedselpakket.edit');
Route::put('/voedselpakket/{voedselpakketten}', [VoedselpakketController::class, 'update'])->name('voedselpakket.update');
Route::delete('/voedselpakket/{voedselpakketten}', [VoedselpakketController::class, 'destroy'])->name('voedselpakket.destroy');

//Dit zijn de routes voor acties (C UD)
Route::post('/', [KlantController::class, 'store'])->name('klanten.bewaar');
Route::put('/{id}', [KlantController::class, 'update'])->name('klanten.update');
Route::delete('/{id}', [KlantController::class, 'destroy'])->name('klanten.verwijder');

//Dit is de routes voor de pagina's
Route::get('/', function () {
    $klanten = Klant::all();
    return view('klanten.overzicht', compact('klanten'));
})->name('klanten.overzicht');
Route::get('/nieuw', function () {
    $allergenen = Allergy::all();
    return view('klanten.formulier', ['klant' => null, 'allergenen' => $allergenen]);
})->name('klanten.nieuw');
Route::get('/bewerk/{id}', function ($id) {
    $klant = Klant::find($id);
    $allergenen = Allergy::all();
    return view('klanten.formulier', ['klant' => $klant, 'allergenen' => $allergenen]);
})->name('klanten.bewerk');
