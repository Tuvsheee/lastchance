<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room; // Assuming Room model exists
use App\Models\Booking; // Assuming Room model exists

class Searchs extends Controller
{

    public function index()
    {
        $rooms = Room::all();
        return view('admin-ui.rooms.rooms', compact('rooms'));
    }

    public function create()
    {
        $cat = Room::all();
        return view('admin-ui.rooms.roomadd', compact('cat'));
    }

    public function gsearch()
    {
        $rooms = Room::orderByDesc('id')->get();
        return view('mroom', compact('rooms'));
    }

    public function addroom(Request $request)
    {
        $image = $request->file('image')->getClientOriginalName();
        $zurag = $request->image->move('assets/img/news', $image);
        $rooms = new Room();
        $rooms->name = $request->name;
        $rooms->room_id = $request->room_id;
        $rooms->capacity = $request->capacity;
        $rooms->image = $zurag;
        $rooms->wifi = $request->wifi;
        $rooms->tv = $request->tv;
        $rooms->aircondition = $request->aircondition;
        $rooms->shower = $request->shower;
        $rooms->breakfast = $request->breakfast;
        $rooms->arrival_date = $request->arrival_date;
        $rooms->departure_date = $request->departure_date;
        $rooms->adults = $request->adults;
        $rooms->children = $request->children;
        $rooms->save();
        return redirect()->route('room');
    }
   

    public function psearch(Request $request)
    {
        $arrivalDate = $request->input('arrival_date');
        $departureDate = $request->input('departure_date');
        $adults = $request->input('adults');
        $children = $request->input('children');
        $rooms = Room::where('capacity', '>=', $adults + $children)
        ->whereDoesntHave('bookings', function($query) use ($arrivalDate, $departureDate) {
            $query->where(function($query) use ($arrivalDate, $departureDate) {
                    $query->where('arrival_date', '<=', $arrivalDate)
                          ->where('departure_date', '>=', $arrivalDate);
                })
                ->orWhere(function($query) use ($arrivalDate, $departureDate) {
                    $query->where('arrival_date', '<=', $departureDate)
                          ->where('departure_date', '>=', $departureDate);
                });
        })
        ->get();



        return view('mroom', compact('rooms'));
    }

    public function filter(Request $request)
    {
        $amenities = $request->input('amenities', []);
        
        $rooms = Room::when($amenities, function ($query, $amenities) {
            foreach ($amenities as $amenity) {
                $query->where('amenities', 'like', '%' . $amenity . '%');
            }
        })->get();
        
        return view('mroom', compact('rooms'));

    }
}



