<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conection extends Model
{
    use HasFactory;
    protected $table = 'conection';
    protected $fillable = ['rutin_id', 'product_id', 'allergen_id'];

    public function rutin()
    {
        return $this->belongsTo(Rutin::class, 'rutin_id');
    }

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }

    public function allergen()
    {
        return $this->belongsTo(Allergen::class, 'allergen_id');
    }
}
