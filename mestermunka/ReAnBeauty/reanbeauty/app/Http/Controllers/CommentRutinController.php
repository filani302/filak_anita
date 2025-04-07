<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Rutin;
use Illuminate\Support\Facades\Auth;

class CommentRutinController extends Controller
{
    public function show(Rutin $rutin)
    {
        // Kérdezzük le a kommenteket a termék alapján
        $comments = Comments::where('rutin_id', $rutin->id)
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->get();
    
        // Visszaadjuk a nézetet a termék és kommentek adataival
        return view('kommentekrutin', compact('rutin', 'comments'));
    }
    
    public function store(Request $request)
    {

        $request->validate([
            'comment' => 'required|string|max:1000',
            'rutin_id' => 'required|exists:rutin,id', // Csak termék ID-t fogadunk el
        ]);

        // Új komment hozzáadása
        Comments::create([
            'user_id' => Auth::id(),
            'rutin_id' => $request->rutin_id,
            'description' => $request->comment,
        ]);

       
        // Visszairányítjuk a felhasználót a kommentek oldalára
        return redirect()->back();
    }
}
