<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
        'arrival_date',
        'departure_date',
        'adults',
        'children',
        // Add more fillable properties as needed
    ];
}
