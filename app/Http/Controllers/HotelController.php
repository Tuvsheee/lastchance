<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Perform search using Eloquent
        $hotels = Hotel::where('name', 'like', "%$query%")->get();

        return view('mroom', compact('hotels'));
    }
}
