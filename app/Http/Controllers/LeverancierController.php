<?php

namespace App\Http\Controllers;

use App\Models\Leverancier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LeverancierController extends Controller
{
    /**
     * Toon een lijst van de resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leveranciers = Leverancier::all();
        return view('leveranciers.index', compact('leveranciers'));
    }

    /**
     * Toon het formulier voor het aanmaken van een nieuwe resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leveranciers.create');
    }

    /**
     * Sla een nieuw aangemaakte resource op in opslag.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'bedrijfsnaam' => 'required|string|max:255',
                'adres' => 'required|string|max:255',
                'contactpersoon' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:leveranciers',
                'telefoonnummer' => 'required|string|max:20',
            ]);
        
            Leverancier::create($request->all());
        
            return redirect()->route('leveranciers.index')
                             ->with('success', 'Leverancier succesvol aangemaakt.');
        } catch (\Exception $e) {
            // Log de fout bijvoorbeeld
            Log::error('Fout bij het aanmaken van een leverancier: ' . $e->getMessage());
            
            // Geef een foutmelding aan de gebruiker terug
            return back()->withInput()->withErrors(['error' => 'Er is een fout opgetreden bij het aanmaken van de leverancier. Probeer het opnieuw.']);
        }
    }


    /**
     * Toon de opgegeven resource.
     *
     * @param  \App\Models\Leverancier  $leverancier
     * @return \Illuminate\Http\Response
     */
    public function show(Leverancier $leverancier)
    {
        return view('leveranciers.show', compact('leverancier'));
    }

    /**
     * Toon het formulier voor het bewerken van de opgegeven resource.
     *
     * @param  \App\Models\Leverancier  $leverancier
     * @return \Illuminate\Http\Response
     */
    public function edit(Leverancier $leverancier)
    {
        return view('leveranciers.edit', compact('leverancier'));
    }

    /**
     * Werk de opgegeven resource bij in opslag.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leverancier  $leverancier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leverancier $leverancier)
    {
        $request->validate([
            'bedrijfsnaam' => 'required|string|max:255',
            'adres' => 'required|string|max:255',
            'contactpersoon' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:leveranciers,email,' . $leverancier->id,
            'telefoonnummer' => 'required|string|max:20',
        ]);

        $leverancier->update($request->all());

        return redirect()->route('leveranciers.index')
                         ->with('success', 'Leverancier succesvol bijgewerkt.');
    }

    /**
     * Verwijder de opgegeven resource uit opslag.
     *
     * @param  \App\Models\Leverancier  $leverancier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leverancier $leverancier)
    {
        $leverancier->delete();

        return redirect()->route('leveranciers.index')
                         ->with('success', 'Leverancier succesvol verwijderd.');
    }
}
