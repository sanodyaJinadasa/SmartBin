<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WasteSale extends Model
{
   protected $fillable = [
        'user_id',
        'type',
        'quantity',
        'mobile',
        'description',
        'address',
        'image',
        'status'
    ];
}
