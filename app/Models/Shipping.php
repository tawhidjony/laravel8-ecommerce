<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    //
    protected $fillable = [
        'user_id', 'name', 'email', 'phone', 'address',
    ];
}
