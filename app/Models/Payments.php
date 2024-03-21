<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table = 'payments'; // Replace 'your_table' with the actual table name

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'country',
        'city_name',
        'address',
        'postal_code',
        'total_price',
        // Add other columns here
    ];

    // Define any relationships if necessary
    // For example, if this model has a relationship with another table
    // You would define it here using Laravel's Eloquent ORM

    // Example of a relationship function
    // public function relatedModel()
    // {
    //     return $this->belongsTo(RelatedModel::class);
    // }

    // Add custom methods or scopes here if needed
}
