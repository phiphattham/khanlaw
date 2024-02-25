<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable =[
        'type',
        'room_number',
        'price',
        'support',
        'air',
        'space',
        'img',
        'max_amount',
    ];
}
