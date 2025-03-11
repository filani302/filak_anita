<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfilController extends Controller
{
    

public function showProfile()
{
    $user = Auth::user(); // Bejelentkezett felhasználó lekérése
    return view('profil', compact('user'));
}

public function updateProfile(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . Auth::id(),
    ]);

    $user = Auth::user(); // Lekéri a bejelentkezett felhasználót

    $user->update([
        'username' => $request->name,
        'email' => $request->email,
        'phone_number' => $request->phone,
    ]);

    return redirect()->back()->with('success', 'Profil frissítve!');
}


}
