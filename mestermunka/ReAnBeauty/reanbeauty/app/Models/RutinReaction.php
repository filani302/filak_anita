<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RutinReaction extends Model
{
    use HasFactory;
    protected $table = 'rutin_reaction';

    protected $fillable = [
        'comment',
        'like'
    ];

    protected $hidden = [
        'rutin_r_id',
        'rutin_id',
        'product_id',
        'user_id',
        'reacted_at',
        'modified_at',
    ];
}
