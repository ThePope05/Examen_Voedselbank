<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlantController;
use App\Models\Allergy;
use App\Models\Klant;

Route::get('/', function () {
    return view('welcome');
});

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
