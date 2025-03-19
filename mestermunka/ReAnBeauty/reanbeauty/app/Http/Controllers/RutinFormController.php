<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rutin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RutinFormController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'rutin_type' => 'required|integer',
            'description' => 'required|string',
            'p_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:700',
            'a_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:700',
        ]);

        $rutin = new Rutin();
        $rutin->title = $request->title;
        $rutin->rutin_type = $request->rutin_type;
        $rutin->description = $request->description;
        $rutin->user_id = Auth::id(); // Felhasználó hozzárendelése

        // Termék kép feltöltése
        if ($request->hasFile('p_image')) {
            $pimagePath = $request->file('p_image')->store('rutin', 'public');
            $rutin->p_image = $pimagePath;
        }

        // Allergén kép feltöltése
        if ($request->hasFile('a_image')) {
            $aimagePath = $request->file('a_image')->store('rutin', 'public');
            $rutin->a_image = $aimagePath;
        }

        $rutin->save();

        return redirect()->route('rutinok')->with('success', 'A rutin sikeresen feltöltve!');

       
    }

   
    
}
