<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Győződj meg róla, hogy a nézeted elérhető a resources/views mappában!
    }

    /**
     * Kezeli a bejelentkezési kérést.
     */
    public function login(Request $request)
    {
        // Validáció
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:12',
        ]);

        // Bejelentkezés megkísérlése
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            // Sikeres bejelentkezés: átirányítás a /home oldalra
            return redirect()->intended('/welcome');
        }

        // Sikertelen bejelentkezés: visszatérés hibaüzenettel
        return back()->withErrors([
            'email' => 'Hibás bejelentkezési adatok.',
        ])->withInput();
    }

    /**
     * Kijelentkezés.
     */
   // public function logout()
   //{
   //    Auth::logout();
   //     return redirect('/login');
   // }
}
