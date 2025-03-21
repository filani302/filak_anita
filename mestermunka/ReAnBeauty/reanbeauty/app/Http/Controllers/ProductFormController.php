<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProductFormController extends Controller
{
    /**
     * Store a newly created product in database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'product_type' => 'required|integer',
            'description' => 'required|string',
            'p_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:700',
            'a_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:700',
        ]);

        $product = new Products();
        $product->title = $request->title;
        $product->product_type = $request->product_type;
        $product->description = $request->description;
        $product->user_id = Auth::id(); // Felhasználó hozzárendelése

        // Termék kép feltöltése
        if ($request->hasFile('p_image')) {
            $pimagePath = $request->file('p_image')->store('products', 'public');
            $product->p_image = $pimagePath;
        }

        // Allergén kép feltöltése
        if ($request->hasFile('a_image')) {
            $aimagePath = $request->file('a_image')->store('products', 'public');
            $product->a_image = $aimagePath;
        }

        $product->save();

        return redirect('/termekek')->with('success', 'A termék sikeresen feltöltve!');

    }
}
