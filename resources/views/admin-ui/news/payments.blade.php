@extends('admin-ui.layout.master')

@section('top-section')
<div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor"> Төлбөр :</h3>
                    </div>
                </div>
@endsection

@section('body-section')
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>№</th>
                                                <th>First Name:</th>
                                                <th>Last Name:</th>
                                                <th>Email:</th>
                                                <th>Country:</th>
                                                <th>City:</th>
                                                <th>Address:</th>
                                                <th>Postal Code:</th>
                                                <th>Total Price:</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allPayments as $n)
                                            <tr>
                                                <td>{{$n->id}}</td>
                                                <td>{{$n->first_name}}</td>
                                                <td>{{$n->last_name}}</td>
                                                <td>{{$n->email}}</td>
                                                <td>{{$n->country}}</td>
                                                <td>{{$n->city_name}}</td>
                                                <td>{{$n->address}}</td>
                                                <td>{{$n->postal_code}}</td>
                                                <td>{{$n->total_price}}</td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection