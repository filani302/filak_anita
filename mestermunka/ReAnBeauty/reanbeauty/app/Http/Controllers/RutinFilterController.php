<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rutin;

class RutinFilterController extends Controller
{
   public function index(Request $request)
    {
    $query = Rutin::query();

    // Szűrés termék típus szerint
    if ($request->has('type')) {
        $query->whereIn('rutin_type', $request->input('type'));
    }

    // Termékek lekérése az adatbázisból
    $rutins = $query->get();

    return view('rutinok', compact('rutins'));
    } 
}
