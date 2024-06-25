<?php

namespace App\Http\Controllers;

use App\Models\Voedselpakket;
use Illuminate\Http\Request;

class VoedselpakketController extends Controller
{
    /**
     * Toon een lijst van de resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voedselpakketten = Voedselpakket::all();
        return view('voedselpakket.index', compact('voedselpakketten'));
    }

    /**
     * Toon het formulier voor het aanmaken van een nieuwe resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voedselpakket.create');
    }

    /**
     * Sla een nieuw aangemaakte resource op in opslag.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'klant_id' => 'required|int',
            'gemaakt_door_id' => 'required|int',
            'uitgiftedatum' => 'date',
        ]);

        Voedselpakket::create($request->all());

        return redirect()->route('voedselpakket.index')
            ->with('success', 'Voedselpakket succesvol aangemaakt.');
    }

    /**
     * Toon het formulier voor het bewerken van de opgegeven resource.
     *
     * @param  \App\Models\Voedselpakket  $voedselpakket
     * @return \Illuminate\Http\Response
     */
    public function edit(Voedselpakket $voedselpakketten)
    {
        return view('voedselpakket.edit', compact('voedselpakketten'));
    }

    /**
     * Werk de opgegeven resource bij in opslag.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voedselpakket  $voedselpakket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voedselpakket $voedselpakket)
    {
        $request->validate([
            'klant_id' => 'required|int',
            'gemaakt_door_id' => 'required|int',
            'uitgiftedatum' => 'date',
        ]);

        $voedselpakket->update($request->all());

        return redirect()->route('voedselpakket.index')
            ->with('success', 'Voedselpakket succesvol bijgewerkt.');
    }

    /**
     * Verwijder de opgegeven resource uit opslag.
     *
     * @param  \App\Models\Voedselpakket  $voedselpakket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voedselpakket $voedselpakketten)
    {
        $voedselpakketten->delete();

        return redirect()->route('voedselpakket.index')
            ->with('success', 'Voedselpakket succesvol verwijderd.');
    }
}
