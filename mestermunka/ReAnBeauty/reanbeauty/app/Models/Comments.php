<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'user_id',
        'product_id',
        'rutin_id',
        'description'
    ];

    

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    

    public function rutin()
    {
        return $this->belongsTo(Rutin::class,  'rutin_id');
    }
}
