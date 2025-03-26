<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'product_type',
        'title',
        'p_image',
        'a_image',
        'description',
        
    ];

    protected $hidden = [
        'product_id',
        'user_id',
        'created_at',
        'modified_at'
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Kapcsolat a User modellel a 'user_id' alapján
    }

}
