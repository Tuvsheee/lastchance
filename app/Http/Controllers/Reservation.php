<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class Reservation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function payon()
    {
        $payments = Payment::all();
        return view('admin-ui.login.payments', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payments = new Payment();
        $payments->firstname = $request->firstname;
        $payments->email = $request->email;
        $payments->country = $request->country;
        $payments->cityname = $request->cityname;
        $payments->address = $request->address;
        $payments->postalcode = $request->postalcode;
        $payments->cardname = $request->cardname;
        $payments->cardnumber = $request->cardnumber;
        $payments->expmonth = $request->expmonth;
        $payments->expyear = $request->expyear;
        $payments->cvv = $request->cvv;
        $payments->save();
        return redirect()->route('psearch')->with('success', 'your payment successfully');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
}
