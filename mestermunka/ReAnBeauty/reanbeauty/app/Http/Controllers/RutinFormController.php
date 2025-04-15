<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rutin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class RutinFormController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:50',
        'rutin_type' => 'required|string|max:50',
        'description' => 'required|string',
        'p_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,bmp,jfif|max:1000',
        'a_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,bmp,jfif|max:1000',
    ]);

    $rutin = new Rutin();
    $rutin->title = $request->title;
    $rutin->rutin_type = $request->rutin_type;
    $rutin->description = $request->description;
    $rutin->user_id = Auth::id(); // Felhasználó hozzárendelése

    $images = []; // Üres tömb a képekhez

    // Az új könyvtárak elérési útja az "upload" mappán belül
    $allergenKepPath = public_path('upload/rutin/allergenKep');
    $rutinKepPath = public_path('upload/rutin/rutinKep');

    // Ha a mappák nem léteznek, hozzuk létre őket
    if (!File::exists($allergenKepPath)) {
        File::makeDirectory($allergenKepPath, 0777, true);
    }
    if (!File::exists($rutinKepPath)) {
        File::makeDirectory($rutinKepPath, 0777, true);
    }

  // Allergén kép feltöltése   
    if ($request->hasFile('a_image')) {
        $aImage = $request->file('a_image');
        $aImageName = time() . '_' . $aImage->getClientOriginalName();
        $aImage->move($allergenKepPath, $aImageName);
        $rutin->a_image = 'upload/rutin/allergenKep/' . $aImageName;

        $images[] = 'upload/rutin/allergenKep/' . $aImageName; // Hozzáadjuk a tömbhöz
    }
// Termék kép feltöltése
   
    if ($request->hasFile('p_image')) {
        $pImage = $request->file('p_image');
        $pImageName = time() . '_' . $pImage->getClientOriginalName();
        $pImage->move($rutinKepPath, $pImageName);
        $rutin->p_image = 'upload/rutin/rutinKep/' . $pImageName;

        $images[] = 'upload/rutin/rutinKep/' . $pImageName; // Hozzáadjuk a tömbhöz
    }

    $rutin->save();

    return redirect('/rutinok')->with(['success' => 'A termék sikeresen feltöltve!', 'images' => $images]);
}

public function index()
{
    $rutins = Rutin::with('user')->get(); // Lekéri az összes terméket
    return view('rutinok', compact('rutins')); // Átadja őket a nézetnek
}
   
    
}
