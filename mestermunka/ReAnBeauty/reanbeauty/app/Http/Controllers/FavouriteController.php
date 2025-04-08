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
        // Ellenőrizzük, hogy a felhasználó be van-e jelentkezve
        $user = auth()->user();

        // A termék/rutin ID lekérése a kérésből
        $productId = $request->input('product_id');
        $rutinId = $request->input('rutin_id');

        // Ha már létezik a kedvenc, nem csinálunk semmit
        if (Favourites::where('user_id', $user->id)
                    ->where('product_id', $productId)
                    ->where('rutin_id', $rutinId)
                    ->exists()) {
            return redirect()->back()->with('info', 'Ez a termék már a kedvenceid között van!');
        }

        // Új kedvenc hozzáadása
        Favourites::create([
            'user_id' => $user->id,
            'product_id' => $productId,
            'rutin_id' => $rutinId,
        ]);

        // Visszairányítás a kedvencek oldalra
        return redirect()->route('favourites.index');
    }

    public function index()
{
    $favourites = Favourites::where('user_id', Auth::id())
        ->with(['product', 'rutin'])
        ->get();

    return view('kedvencek', compact('favourites'));
}

}
