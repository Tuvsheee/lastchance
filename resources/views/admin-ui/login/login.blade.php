@extends('admin-ui.layout.master')

@section('top-section')
<div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor"> Бүртгэл :</h3>
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
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Устгах</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allNews as $n)
                                            <tr>
                                                <td>{{$n->id}}</td>
                                                <td>{{$n->name}}</td>
                                                <td>{{$n->email}}</td>
                                                <td>{{$n->password}}</td>
                                                <td>
                                                    <form action="{{ route('user.destroy', $n->id) }}" method="POST" type="button"  onsubmit="return confirm('Delete?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger m-0">Delete</button>
                                                    </form>
                                                </td>
                                                
                                                


                                                
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