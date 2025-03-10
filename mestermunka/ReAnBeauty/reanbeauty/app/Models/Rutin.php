<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutin extends Model
{
    use HasFactory;
    protected $table = 'rutin';

    protected $fillable = [
        'rutin_type',
        'title',
        'image',
        'description',
        'allergen'
    ];

    protected $hidden = [
        'rutin_id',
        'product_id',
        'user_id',
        'created_at',
        'modified_at'
    ];

    public function allergens()
    {
    return $this->belongsToMany(Allergen::class, 'conection', 'rutin_id', 'allergen_id');
    }   
    
}
