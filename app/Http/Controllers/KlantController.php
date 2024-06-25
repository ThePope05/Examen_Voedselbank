<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klant;
use Illuminate\Support\Facades\Validator;

class KlantController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Klant();
    }

    //Met deze functie slaan we een nieuwe klant op in de database via de model
    public function store(Request $request)
    {
        //We valideren de input van de gebruiker
        $validator = Validator::make($request->all(), [
            'naam' => 'required',
            'email' => 'required|email',
            'telefoon' => 'required',
            'adres' => 'required',
            'postcode' => 'required',
            'woonplaats' => 'required',
            'volwassenen' => 'required',
            'kinderen' => 'required',
            'babies' => 'required',
            'allergenen' => 'required|nullable|string',
        ]);

        try {
            $this->model->storeKlant($request);
        } catch (\Exception $e) {
            //We sturen de gebruiker terug naar de klanten overzicht pagina met een error melding
            return redirect()->route('klanten.overzicht')->with('error', 'Er is iets misgegaan');
        }

        //We sturen de gebruiker terug naar de klanten overzicht pagina met een success melding
        return redirect()->route('klanten.overzicht')->with('success', 'Klant is toegevoegd');
    }

    //Met deze functie veranderen we een klant in de database via de model
    public function update(Request $request, $id)
    {
        //We valideren de input van de gebruiker
        $validator = Validator::make($request->all(), [
            'naam' => 'required',
            'email' => 'required|email',
            'telefoon' => 'required',
            'adres' => 'required',
            'postcode' => 'required',
            'woonplaats' => 'required',
            'volwassenen' => 'required',
            'kinderen' => 'required',
            'babies' => 'required',
            'allergenen' => 'required|nullable|string',
        ]);

        try {
            $this->model->updateKlant($request, $id);
        } catch (\Exception $e) {
            //We sturen de gebruiker terug naar de klanten overzicht pagina met een error melding
            return redirect()->route('klanten.overzicht')->with('error', 'Er is iets misgegaan');
        }

        //We sturen de gebruiker terug naar de klanten overzicht pagina met een success melding
        return redirect()->route('klanten.overzicht')->with('success', 'Klant is aangepast');
    }

    //Met deze functie verwijderen we een klant uit de database via de model
    public function destroy($id)
    {
        try {
            $this->model->deleteKlant($id);
        } catch (\Exception $e) {
            //We sturen de gebruiker terug naar de klanten overzicht pagina met een error melding
            return redirect()->route('klanten.overzicht')->with('error', 'Er is iets misgegaan');
        }

        //We sturen de gebruiker terug naar de klanten overzicht pagina met een success melding
        return redirect()->route('klanten.overzicht')->with('success', 'Klant is verwijderd');
    }
}
