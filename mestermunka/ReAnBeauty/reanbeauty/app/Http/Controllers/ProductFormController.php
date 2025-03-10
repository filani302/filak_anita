<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
public function allergens()
{
    return $this->belongsToMany(Allergen::class, 'conection', 'rutin_id', 'allergen_id');
}

class ProductFormController extends Controller
{
    //
}
