<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'comments';
    protected $fillable = ['description'];

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

    public function likes()
    {
        return $this->hasMany(Likes::class);
    }
}
