<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'product_type',
        'title',
        'image',
        'description',
        'allergen'
    ];

    protected $hidden = [
        'product_id',
        'user_id',
        'created_at',
        'modified_at'
    ];

    public function allergens()
{
    return $this->belongsToMany(Allergen::class, 'conection', 'product_id', 'allergen_id');
}
}
