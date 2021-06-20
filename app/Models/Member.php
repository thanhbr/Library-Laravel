<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'address',
        'email',
        'phone_number',
        'user_name',
        'password',
        'status',
        'level',
        'active'
    ];
}
