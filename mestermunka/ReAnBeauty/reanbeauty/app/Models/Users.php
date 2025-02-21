<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use  HasFactory;
    protected $table = 'users';

    protected $fillable = [
        'username',
        'email',
        'phone_number',
        'password',
    ];

    protected $hidden = [
        'user_id',
        'role',
        'email',
        'phone_number',
        'password',
        'created_at',
        'modified_at'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
