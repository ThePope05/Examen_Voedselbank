<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\Leverancier;

class VoorraadController extends Controller
{
    public function index()
    {
        try {
            // Haal alle producten op met hun categorie en leverancier gegevens
            $items = Product::with('categorie', 'leverancier')->get();
            return view('voorraad.index', compact('items'));
        } catch (\Exception $e) {
            // Handel de fout af als het ophalen van producten mislukt
            return back()->withError('Kon producten niet ophalen. ' . $e->getMessage());
        }
    }

    public function create()
    {
        try {
            // Haal alle categorieën en leveranciers op voor het create formulier
            $categories = Categorie::all();
            $suppliers = Leverancier::all();

            return view('voorraad.create', compact('categories', 'suppliers'));
        } catch (\Exception $e) {
            // Handel de fout af als het laden van het create formulier mislukt
            return back()->withError('Kon create pagina niet laden. ' . $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            // Valideer de invoer van het formulier
            $request->validate([
                'naam' => 'required',
                'categorie_id' => 'required|exists:categorie,id',
                'streepjescode' => 'required|unique:producten,streepjescode',
                'voorraad' => 'required|integer',
                'leverancier_id' => 'required|exists:leveranciers,id',
            ]);

            // Maak een nieuw product aan
            Product::create($request->all());

            // Keer terug naar de voorraad index met een succesmelding
            return redirect()->route('voorraad.index')
                ->with('success', 'Product is succesvol toegevoegd.');
        } catch (\Exception $e) {
            // Handel de fout af als het opslaan van het product mislukt
            return back()->withError('Kon product niet opslaan. ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            // Zoek het product op basis van het ID en toon de details
            $item = Product::findOrFail($id);
            return view('voorraad.show', compact('item'));
        } catch (\Exception $e) {
            // Handel de fout af als het ophalen van productdetails mislukt
            return back()->withError('Kon productdetails niet ophalen. ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            // Zoek het product op basis van het ID en haal alle categorieën en leveranciers op voor het bewerk formulier
            $item = Product::findOrFail($id);
            $categories = Categorie::all();
            $suppliers = Leverancier::all();

            return view('voorraad.edit', compact('item', 'categories', 'suppliers'));
        } catch (\Exception $e) {
            // Handel de fout af als het laden van het bewerk formulier mislukt
            return back()->withError('Kon bewerk pagina niet laden. ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Valideer de invoer van het formulier
            $request->validate([
                'naam' => 'required',
                'categorie_id' => 'required|exists:categorie,id',
                'streepjescode' => 'required|unique:producten,streepjescode,' . $id,
                'voorraad' => 'required|integer',
                'leverancier_id' => 'required|exists:leveranciers,id',
            ]);

            // Zoek het product op basis van het ID en update de gegevens
            $item = Product::findOrFail($id);
            $item->update($request->all());

            // Keer terug naar de voorraad index met een succesmelding
            return redirect()->route('voorraad.index')
                ->with('success', 'Product is succesvol bijgewerkt.');
        } catch (\Exception $e) {
            // Handel de fout af als het bijwerken van het product mislukt
            return back()->withError('Kon product niet bijwerken. ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            // Zoek het product op basis van het ID en verwijder het
            $item = Product::findOrFail($id);
            $item->delete();

            // Keer terug naar de voorraad index met een succesmelding
            return redirect()->route('voorraad.index')
                ->with('success', 'Product is succesvol verwijderd.');
        } catch (\Exception $e) {
            // Handel de fout af als het verwijderen van het product mislukt
            return back()->withError('Kon product niet verwijderen. ' . $e->getMessage());
        }
    }
}
