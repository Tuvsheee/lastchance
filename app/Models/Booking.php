<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Booking extends Model
{

    protected $fillable = [
        'name',
        'arrival_date',
        'departure_date',
        'adults',
        'children',
        // Add more fillable properties as needed
    ];
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    // Inside Booking model

}
