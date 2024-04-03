<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room; // Assuming Room model exists

class Searchs extends Controller
{
    public function search(Request $request)
    {
        // Retrieve form data
        $arrivalDate = $request->input('arrival_date');
        $departureDate = $request->input('departure_date');
        $adults = $request->input('adults');
        $children = $request->input('children');

        // Example database query to search for available rooms
        $availableRooms = Room::where('capacity', '>=', $adults + $children)
                             ->whereDoesntHave('bookings', function ($query) use ($arrivalDate, $departureDate) {
                                 $query->where(function ($query) use ($arrivalDate, $departureDate) {
                                     $query->where('arrival_date', '<=', $arrivalDate)
                                           ->where('departure_date', '>=', $arrivalDate);
                                 })->orWhere(function ($query) use ($arrivalDate, $departureDate) {
                                     $query->where('arrival_date', '<=', $departureDate)
                                           ->where('departure_date', '>=', $departureDate);
                                 });
                             })
                             ->get();
                          

        // Pass the available rooms to a view for rendering
        return view('search-results', ['availableRooms' => $availableRooms]);
    }

    public function index()
    {
        $rooms = Room::all();
        return view('mroom', compact('rooms'));
    }
}
