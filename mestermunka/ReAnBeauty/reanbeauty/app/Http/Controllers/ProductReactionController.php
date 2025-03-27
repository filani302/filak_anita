<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ProductsReaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductReactionController extends Controller
{
    
    public function likeProduct(Request $request)
    {
        // A termék ID és a felhasználó ID megadása
        $productId = $request->input('product_id');
        $userId = Auth::id();

        // Ellenőrizzük, hogy már kedvelte-e a felhasználó a terméket
        $existingReaction = ProductsReaction::where('product_id', $productId)
                                           ->where('user_id', $userId)
                                           ->first();

        // Ha még nem kedvelte, akkor hozzáadjuk a "like"-ot
        if ($existingReaction) {
            // Ha már kedvelte, eltávolítjuk a like-ot
            $existingReaction->delete();
        } else {
            // Ha még nem kedvelte, új like-ot adunk hozzá
            ProductsReaction::create([
                'product_id' => $productId,
                'user_id' => $userId,
                'like' => 1, // 1 = liked
            ]);
        }

        return back(); // Visszatérünk ugyanarra az oldalra
    }

}
