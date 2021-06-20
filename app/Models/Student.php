<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
      'first_name',
      'last_name',
      'birthday',
      'gender',
      'address',
      'phone_number',
      'card_expty_date',
      'active'
    ];
}
