<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Rutin;
use App\Models\Favourites;
use App\Models\Likes;
use App\Models\Comments;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        $products = Products::all();
        $rutins = Rutin::all();
        return view('adminfelulet', compact('products', 'rutins'));
    }

    public function deleteProduct($id)
    {
        // Kapcsolódó like-ok és kedvencek törlése
        Likes::where('product_id', $id)->delete();
        Favourites::where('product_id', $id)->delete();
        Comments::where('product_id', $id)->delete();
        // A termék törlése
        Products::destroy($id);

        return redirect()->route('adminfelulet')->with('success', 'Termék sikeresen törölve.');
    }

    public function deleteRutin($id)
    {
        Likes::where('rutin_id', $id)->delete();
        Favourites::where('rutin_id', $id)->delete();
        Comments::where('rutin_id', $id)->delete();
        // A rutin törlése
        Rutin::destroy($id);

        return redirect()->route('adminfelulet')->with('success', 'Rutin sikeresen törölve.');
    }
}
