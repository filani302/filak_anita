<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    use HasFactory;
    
    protected $table = 'likes';
    protected $fillable = ['like'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsTo(Products::class);
    }

    public function rutins()
    {
        return $this->belongsTo(Rutin::class);
    }

    public function comments()
    {
        return $this->belongsTo(Comments::class);
    }
}
