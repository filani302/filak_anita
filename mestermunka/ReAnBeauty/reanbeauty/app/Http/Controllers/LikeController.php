<?php

namespace App\Http\Controllers;

use App\Models\Likes;
use App\Models\Products;
use App\Models\ProductsReaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LikeController extends Controller
{
    
    public function store(Request $request)
    {
        
        
    }

    public function toggleLike(Request $request)
    {
        $request->validate([
            'product_id' => 'nullable|exists:products,id',
            'rutin_id' => 'nullable|exists:rutin,id',
        ]);
    
        $user = auth()->user();
        $productId = $request->input('product_id') ?? null;
        $rutinId = $request->input('rutin_id') ?? null;
        
    
        if (!$productId && !$rutinId) {
            return redirect()->back()->with('error', 'Hiba: Nem található termék vagy rutin.');
        }
    
        $like = Likes::where('user_id', $user->id)
            ->when($productId, fn($query) => $query->where('product_id', $productId))
            ->when($rutinId, fn($query) => $query->where('rutin_id', $rutinId))
            ->first();
    
        if ($like) {
            $like->delete();
            return redirect()->back()->with('success', 'Like törölve.');
        } else {
            Likes::create([
                'user_id' => $user->id,
                'product_id' => $productId,
                'rutin_id' => $rutinId,
                'like' => true
            ]);
            return redirect()->back()->with('success', 'Sikeresen like-oltad!');

           

        }
    }
    

}
