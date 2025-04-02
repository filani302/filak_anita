<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
//use PHPUnit\Metadata\Uses;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:50', 
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|string|max:12',
            'password' => 'required|min:12|confirmed',
           
        ]);
    
        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'] ?? null, 
            'password' => Hash::make($validatedData['password']),
            'role' => 1,  // Alapértelmezett 'user' szerepkör
        ]);
    
        // Bejelentkeztetjük az új felhasználót
        Auth::login($user);

        // Átirányítjuk a főoldalra
        return redirect()->route('welcome'); 
    }
}
