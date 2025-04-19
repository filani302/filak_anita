<?php

namespace App\Http\Controllers;

use App\Models\Favourites;
use App\Models\Products;
use App\Models\Rutin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    public function store(Request $request)
{
    $user = auth()->user();

    // Ellenőrzés, hogy be van-e jelentkezve
    if (!$user) {
        return redirect()->back()->with('error', 'Be kell jelentkezned a kedvencek használatához.');
    }

    $productId = $request->input('product_id');
    $rutinId = $request->input('rutin_id');

    // Megnézzük, hogy már kedvenc-e
    $alreadyExists = Favourites::where('user_id', $user->id)
        ->where(function ($query) use ($productId, $rutinId) {
            if ($productId) {
                $query->where('product_id', $productId);
            }
            if ($rutinId) {
                $query->orWhere('rutin_id', $rutinId);
            }
        })
        ->exists();

    if ($alreadyExists) {
        return redirect()->back()->with('error', 'Ez már a kedvenceid között van!');
    }

    // Mentés
    Favourites::create([
        'user_id' => $user->id,
        'product_id' => $productId,
        'rutin_id' => $rutinId,
    ]);

    return redirect()->back()->with('success', 'Sikeresen hozzáadtad a kedvencekhez!');
}

public function index()
    {
        $favourites = Favourites::where('user_id', Auth::id())
            ->with(['product', 'rutin'])
            ->get();

        return view('kedvencek', compact('favourites'));
    }


}
