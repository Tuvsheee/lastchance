@extends('admin-ui.layout.dashboard')

@section('body-section')
<div class="row">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Шинэ Өрөө оруулах:</h4>
                                <form action="{{route('room_add')}}"   method="post"  
                                enctype="multipart/form-data"  
                                class="form-horizontal form-material mx-2">
                                    @csrf
                                    <div class="form-group">
                                       
                                        <label class="col-md-12">Өрөөний нэр:</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       
                                        <label class="col-md-12">Өрөөний нийт хүний тоо:</label>
                                        <div class="col-md-12">
                                            <input type="text" name="capacity"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       
                                        <label class="col-md-12">Өрөөний дугаар:</label>
                                        <div class="col-md-12">
                                            <input type="text" name="room_id"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>

                                    

                                    <div class="form-group">
                                       
                                        <label class="col-md-12">Өрөөний зураг:</label>
                                        <div class="col-md-12">
                                            <input type="file" name="image"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                       
                                        <label class="col-md-12">Wifi</label>
                                        <div class="col-md-12">
                                            <input type="text" name="wifi"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       
                                        <label class="col-md-12">TV</label>
                                        <div class="col-md-12">
                                            <input type="text" name="tv"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       
                                        <label class="col-md-12">Aircondition</label>
                                        <div class="col-md-12">
                                            <input type="text" name="aircondition"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       
                                        <label class="col-md-12">Shower</label>
                                        <div class="col-md-12">
                                            <input type="text" name="shower"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       
                                        <label class="col-md-12">Breakfast</label>
                                        <div class="col-md-12">
                                            <input type="text" name="breakfast"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                       
                                        <label for="date" class="col-md-12">Start time room date:</label>
                                        <div class="col-md-12">
                                            <input type="date" name="arrival_date"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                       
                                        <label for="date" class="col-md-12">End time room date:</label>
                                        <div class="col-md-12">
                                            <input type="date" name="departure_date"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                       
                                        <label class="col-md-12">Adults</label>
                                        <div class="col-md-12">
                                            <input type="text" name="adults"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                       
                                        <label class="col-md-12">Children</label>
                                        <div class="col-md-12">
                                            <input type="text" name="children"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>

                                 
                                   

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" name="submit" value="Insert" class="btn btn-success">
                                        </div>
                                    </div>
                                </form>     
                               
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End PAge Content -->
                </div>
                
@endsection