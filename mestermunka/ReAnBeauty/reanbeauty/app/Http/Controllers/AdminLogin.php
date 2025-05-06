<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminLogin extends Controller
{
   // Admin bejelentkezési űrlap megjelenítése
   public function showLoginForm()
   {
       return view('adminfeluletBejelentkezes');
   }

   // Bejelentkezési logika
   public function login(Request $request)
   {
       $validated = $request->validate([
           'email' => 'required|email',
           'password' => 'required|string|min:12', 
           'kod' => 'required|string',
       ]);

       // Megpróbáljuk bejelentkeztetni a felhasználót
       if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
           $user = Auth::user();

           // Ha az admin kód helyes
           if ($validated['kod'] === 'admin123') {
               $user->role = 2; // vagy 'admin', ha stringként kezeled
               $user->save();

               return redirect()->route('adminfelulet'); // ✅ Sikeres belépés után admin felület
           } else {
               Auth::logout(); // ❌ Hibás kód esetén kiléptetjük
               return back()->withErrors(['kod' => 'Hibás admin kód.']);
           }
       }

       return back()->withErrors(['email' => 'Hibás bejelentkezési adatok.']);
   }
}
