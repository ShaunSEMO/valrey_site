@extends('layouts.app')

@section('content')
  
    <div class="row container-fluid">
        <div class="col-md-2 side-menu" style="background-color:#A4A4AA; height: 100%;">
            @include('dashboard.sideMenu')
        </div>
        <div class="col-md-10 dashboard-content">
            <div class="content">
                <div class="card">
                    <h5 class="card-header">Add Service</h5>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-4">
    
                                <form method="POST" enctype="multipart/form-data" action="{{ url('/$d_bu$!n3$$_d@$h/services/save') }}">
                                    {{ csrf_field() }}
                                    
                                    <br>
                                    <label for="icon">Select Service Icon</label>
                                    <button name="icon" class="btn btn-secondary" data-iconset="fontawesome5" data-icon="fas fa-globe" role="iconpicker"></button>

                                    <br>
                                    <br>

                                    <input type="text" name="name" class="form-control" placeholder="Title">

                                    <br>                       
    
                                    <textarea name="desc" class="form-control" placeholder="Service Description..."></textarea>
    
                                    <br>
    
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>    
                            
    
                            </div>
    
                        
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    
@endsection
