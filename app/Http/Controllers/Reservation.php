<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payments as ModelsPayment;

class Reservation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function payon()
    {
        $allPayments = ModelsPayment::orderByDesc('id')->get();
        return view('admin-ui.login.payments', compact('allPayments'));
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
    public function paystore(Request $request)
    {
        $payment = new ModelsPayment();
        $payment->first_name = $request->first_name;
        $payment->last_name = $request->last_name;
        $payment->email = $request->email;
        $payment->country = $request->country;
        $payment->city_name = $request->city_name;
        $payment->address = $request->address;
        $payment->postal_code = $request->postal_code;
        $payment->total_price = $request->total_price;
        $payment->save();
        return redirect()->route('res_pay');
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
