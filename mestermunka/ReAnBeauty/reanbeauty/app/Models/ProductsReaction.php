<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsReaction extends Model
{
    use HasFactory;
    protected $table = 'products_reaction';

    protected $fillable = [
        'comment',
        'like'
    ];

    protected $hidden = [
        'product_r_id',
        'product_id',
        'user_id',
        'reacted_at',
        'modified_at',
    ];
}
