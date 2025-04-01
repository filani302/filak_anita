<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourites extends Model
{
    use HasFactory;

    // A táblázat neve (nem kötelező, ha nem követi a Laravel konvencióját)
    protected $table = 'favourites';

    // Engedélyezett mezők tömbje
    protected $fillable = [
        'product_id',
        'rutin_id',
        'user_id',
    ];

    // Kapcsolat a User modellel
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Kapcsolat a Product modellel
    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    // Kapcsolat a Rutin modellel
    public function rutin()
    {
        return $this->belongsTo(Rutin::class);
    }
}
