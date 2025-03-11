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

}
