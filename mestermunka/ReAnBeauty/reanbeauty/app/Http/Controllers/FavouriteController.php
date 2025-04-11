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
        $productId = $request->input('product_id');
        $rutinId = $request->input('rutin_id');

        if (Favourites::where('user_id', $user->id)
                    ->where(function ($query) use ($productId, $rutinId) {
                        $query->where('product_id', $productId)
                              ->orWhere('rutin_id', $rutinId);
                    })->exists()) {
            return response()->json(['message' => 'Ez a tétel már a kedvenceid között van!'], 400);
        }

        Favourites::create([
            'user_id' => $user->id,
            'product_id' => $productId,
            'rutin_id' => $rutinId,
        ]);

        return response()->json(['message' => 'Sikeresen hozzáadva a kedvencekhez!'], 200);
    }

    public function index()
    {
        $favourites = Favourites::where('user_id', Auth::id())
            ->with(['product', 'rutin'])
            ->get();

        return view('kedvencek', compact('favourites'));
    }

}
