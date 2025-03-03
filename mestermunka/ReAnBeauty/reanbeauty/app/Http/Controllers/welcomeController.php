<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
     // Főoldal megjelenítése
     public function index()
     {
         return view('welcome'); // Ez visszaadja a 'home' nevű nézetet
     }
}
