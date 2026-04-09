<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bin extends Model
{
    protected $fillable = [
    'type',
    'latitude',
    'longitude',
    'address',
    'status',
    'user_id'
];
}
