@extends('admin-ui.layout.dashboard')

@section('top-section')
<div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Өрөө</h3>
                    </div>
                    <div class="col-md-7 align-self">
                        <a href="{{route('room_create')}}"
                            class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Өрөө оруулах</a>
                    </div>
                </div>
@endsection

@section('body-section')
<div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>№</th>
                                                <th>Өрөөний нэр</th>
                                                <th>Өрөөний дугаар</th>
                                                <th>Өрөөний нийт хүний тоо:</th>
                                                <th>Өрөөний зураг</th>
                                                <th>Start time room date:</th>
                                                <th>End time room date:</th>
                                                <th>Идэвхитэй эсэх</th>
                                                <th>Шинэчлэх</th>
                                                <th>Устгах</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($rooms as $n)
                                            <div class="admintablelist">
                                            <tr>
                                                <td>{{$n->id}}</td>
                                                <td>{{$n->name}}</td>
                                                <td>{{$n->capacity}}</td>
                                                <td>{{$n->room_id}}</td>
                                                <td><img src="{{asset($n->image)}}" ></td>
                                                <td>{{$n->arrival_date}}</td>
                                                <td>{{$n->departure_date}}</td>
                                                <td>Идэвхитэй</td>
                                                <td>Шинэчлэх</td>
                                                <td>Устгах</td>
                                            </tr>
                                            </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection