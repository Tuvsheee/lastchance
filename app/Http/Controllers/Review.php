<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;

class Review extends Controller
{
    public function modal()
    {
        return view('modal');
    }
    //
        public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required',
            'message' => 'required',
        ]);

        $review = new Review();
        $review->rating = $request->rating;
        $review->message = $request->message;
        $review->save();

        return view('modal', compact('modal'));
    }
}
