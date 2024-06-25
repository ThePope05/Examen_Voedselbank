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
            $items = Product::with('categorie', 'leverancier')->get();
            return view('voorraad.index', compact('items'));
        } catch (\Exception $e) {
            // Handle exception gracefully, e.g., log it or show an error message
            return back()->withError('Failed to fetch products. ' . $e->getMessage());
        }
    }

    public function create()
    {
        try {
            $categories = Categorie::all();
            $suppliers = Leverancier::all();

            return view('voorraad.create', compact('categories', 'suppliers'));
        } catch (\Exception $e) {
            // Handle exception gracefully, e.g., log it or show an error message
            return back()->withError('Failed to load create page. ' . $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'naam' => 'required',
                'categorie_id' => 'required|exists:categorie,id',
                'streepjescode' => 'required|unique:producten,streepjescode',
                'voorraad' => 'required|integer',
                'leverancier_id' => 'required|exists:leveranciers,id',
            ]);

            Product::create($request->all());

            return redirect()->route('voorraad.index')
                ->with('success', 'Product is successfully added.');
        } catch (\Exception $e) {
            // Handle exception gracefully, e.g., log it or show an error message
            return back()->withError('Failed to store product. ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $item = Product::findOrFail($id);
            return view('voorraad.show', compact('item'));
        } catch (\Exception $e) {
            // Handle exception gracefully, e.g., log it or show an error message
            return back()->withError('Failed to fetch product details. ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $item = Product::findOrFail($id);
            $categories = Categorie::all();
            $suppliers = Leverancier::all();

            return view('voorraad.edit', compact('item', 'categories', 'suppliers'));
        } catch (\Exception $e) {
            // Handle exception gracefully, e.g., log it or show an error message
            return back()->withError('Failed to load edit page. ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
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
                ->with('success', 'Product is successfully updated.');
        } catch (\Exception $e) {
            // Handle exception gracefully, e.g., log it or show an error message
            return back()->withError('Failed to update product. ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $item = Product::findOrFail($id);
            $item->delete();

            return redirect()->route('voorraad.index')
                ->with('success', 'Product is successfully deleted.');
        } catch (\Exception $e) {
            // Handle exception gracefully, e.g., log it or show an error message
            return back()->withError('Failed to delete product. ' . $e->getMessage());
        }
    }
}
