<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsFilterController extends Controller
{
    public function index(Request $request)
    {
        $query = Products::query();

        // Szűrés termék típus szerint
        if ($request->has('type')) {
            $query->whereIn('product_type', $request->input('type'));
        }

        // Termékek lekérése az adatbázisból
        $products = $query->get();

        return view('termekek', compact('products'));
    }
}
