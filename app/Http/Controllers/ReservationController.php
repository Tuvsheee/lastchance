<?php

// app/Http/Controllers/ReservationController.php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'country' => 'required|string',
            'city_name' => 'required|string',
            'address' => 'required|string',
            'postal_code' => 'required|string',
            'total_price' => 'required|numeric',
        ]);

        // Create a new reservation
        Reservation::create($validatedData);

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Reservation submitted successfully!');
    }
}

