<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
        'p_image' => 'nullable|image|mimes:jpeg,png|max:700',
        'a_image' => 'nullable|image|mimes:jpeg,png|max:700',
    ]);

    $product = new Products();
    $product->title = $request->title;
    $product->product_type = $request->product_type;
    $product->description = $request->description;
    $product->user_id = Auth::id(); // Felhasználó hozzárendelése

    $images = []; // Üres tömb a képekhez

    // Az új könyvtárak elérési útja az "upload" mappán belül
    $termekKepPath = public_path('upload/termekKep');
    $rutinKepPath = public_path('upload/rutinKep');

    // Ha a mappák nem léteznek, hozzuk létre őket
    if (!File::exists($termekKepPath)) {
        File::makeDirectory($termekKepPath, 0777, true);
    }
    if (!File::exists($rutinKepPath)) {
        File::makeDirectory($rutinKepPath, 0777, true);
    }

    // Termék kép feltöltése
    if ($request->hasFile('p_image')) {
        $pImage = $request->file('p_image');
        $pImageName = time() . '_' . $pImage->getClientOriginalName();
        $pImage->move($termekKepPath, $pImageName);
        $product->p_image = 'upload/termekKep/' . $pImageName;

        $images[] = 'upload/termekKep/' . $pImageName; // Hozzáadjuk a tömbhöz
    }

    // Allergén kép feltöltése
    if ($request->hasFile('a_image')) {
        $aImage = $request->file('a_image');
        $aImageName = time() . '_' . $aImage->getClientOriginalName();
        $aImage->move($rutinKepPath, $aImageName);
        $product->a_image = 'upload/rutinKep/' . $aImageName;

        $images[] = 'upload/rutinKep/' . $aImageName; // Hozzáadjuk a tömbhöz
    }

    $product->save();

    return redirect('/termekek')->with(['success' => 'A termék sikeresen feltöltve!', 'images' => $images]);
}

    
}
