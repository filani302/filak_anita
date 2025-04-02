<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class CommentProductController extends Controller
{
    public function show(Products $product)
    {
        // Kérdezzük le a kommenteket a termék alapján
        $comments = Comments::where('product_id', $product->id)
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->get();
    
        // Visszaadjuk a nézetet a termék és kommentek adataival
        return view('kommentektermek', compact('product', 'comments'));
    }
    
    public function store(Request $request)
    {

        $request->validate([
            'comment' => 'required|string|max:1000',
            'product_id' => 'required|exists:products,id', // Csak termék ID-t fogadunk el
        ]);

        // Új komment hozzáadása
        Comments::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'description' => $request->comment,
        ]);

       
        // Visszairányítjuk a felhasználót a kommentek oldalára
        return redirect()->back();
    }
}
