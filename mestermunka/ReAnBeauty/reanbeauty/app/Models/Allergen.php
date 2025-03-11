<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergen extends Model
{
    use HasFactory;
    protected $table = 'allergen';

    
    protected $fillable = ['name', 'db'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function products()
    {
        return $this->belongsToMany(Products::class, 'conection', 'allergen_id', 'product_id');
    }

    public function rutins()
    {
        return $this->belongsToMany(Rutin::class, 'conection', 'allergen_id', 'rutin_id');
    }
}
