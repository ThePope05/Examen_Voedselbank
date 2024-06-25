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
        $items = Product::with('categorie', 'leverancier')->get();
        return view('voorraad.index', compact('items'));
    }

    public function create()
    {
        $categories = Categorie::all();
        $suppliers = Leverancier::all();

        return view('voorraad.create', compact('categories', 'suppliers'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'naam' => 'required',
            'categorie_id' => 'required|exists:categories,id',
            'streepjescode' => 'required|unique:producten,streepjescode',
            'voorraad' => 'required|integer',
            'leverancier_id' => 'required|exists:leveranciers,id',
        ]);

        Product::create($request->all());

        return redirect()->route('voorraad.index')
            ->with('success', 'Product is succesvol toegevoegd.');
    }

    public function show($id)
    {
        $item = Product::findOrFail($id);
        return view('voorraad.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Product::findOrFail($id);
        $categories = Categorie::all(); // Fetch all categories
        $suppliers = Leverancier::all(); // Fetch all suppliers

        return view('voorraad.edit', compact('item', 'categories', 'suppliers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'naam' => 'required',
            'categorie_id' => 'required|exists:categorie,id',
            'streepjescode' => 'required|unique:producten,streepjescode,' . $id,
            'voorraad' => 'required|integer',
            'leverancier_id' => 'required|exists:leveranciers,id',
        ]);

        $item = Product::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('voorraad.index')
            ->with('success', 'Product is succesvol bijgewerkt.');
    }

    public function destroy($id)
    {
        $item = Product::findOrFail($id);
        $item->delete();

        return redirect()->route('voorraad.index')
            ->with('success', 'Product is succesvol verwijderd.');
    }
}
