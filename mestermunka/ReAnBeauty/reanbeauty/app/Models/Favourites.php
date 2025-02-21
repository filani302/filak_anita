<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourites extends Model
{
    use HasFactory;
    protected $table = 'favourite';

    protected $fillable = [
        
    ];

    protected $hidden = [
        'fav_id',
        'rutin_id',
        'product_id',
        'user_id',
        'created_at',
    ];
}
