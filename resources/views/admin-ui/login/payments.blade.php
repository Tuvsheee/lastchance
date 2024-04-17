@extends('admin-ui.layout.dashboard')

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
                                                <th>Full Name:</th>
                                                <th>Email:</th>
                                                <th>Country:</th>
                                                <th>City:</th>
                                                <th>Address:</th>
                                                <th>Zip code:</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($payments as $n)
                                            <tr>
                                                <td>{{$n->id}}</td>
                                                <td>{{$n->firstname}}</td>
                                                <td>{{$n->email}}</td>
                                                <td>{{$n->country}}</td>
                                                <td>{{$n->cityname}}</td>
                                                <td>{{$n->address}}</td>
                                                <td>{{$n->postalcode}}</td>
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