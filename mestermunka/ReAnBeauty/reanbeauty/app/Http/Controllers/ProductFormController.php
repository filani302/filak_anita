<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allergen;
use App\Models\Products;



class ProductFormController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'product_type' => 'required|integer',
            'description' => 'required|string|max:700',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'allergens' => 'nullable|integer',
        ]);

        // Kép feltöltés és mentés
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        } else {
            $imagePath = null;
        }

        // Termék mentése az adatbázisba
        $product = new Products();
        $product->title = $request->title;
        $product->product_type = $request->product_type;
        $product->description = $request->description;
        $product->image = $imagePath;
        $product->save();

        // Allergének hozzárendelése
        if ($request->has('allergens')) {
            $product->allergens()->attach($request->allergens);
        }

        return redirect()->back()->with('success', 'Termék sikeresen feltöltve!');
    }

}
