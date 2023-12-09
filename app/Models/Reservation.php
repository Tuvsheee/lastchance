<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'country',
        'city_name',
        'address',
        'postal_code',
        'total_price',
    ];
}
