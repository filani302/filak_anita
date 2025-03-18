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
        'p_image',
        'a_image',
        'description',
        
    ];

    protected $hidden = [
        'rutin_id',
        'product_id',
        'user_id',
        'created_at',
        'modified_at'
    ];

    
}
