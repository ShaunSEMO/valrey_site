@extends('layouts.app')

@section('content')
  
    <div class="row container-fluid">
        <div class="col-md-2 side-menu" style="background-color:#d4d4d4; height: 100%;">
            @include('dashboard.sideMenu')
        </div>
        <div class="col-md-10 dashboard-content">
            <div class="card">
                <h5 class="card-header">Contacts</h5>
                <div class="card-body">
                    <div class="container">
                        {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@saveSocialLink'], 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                                    
                            {{ Form::text('platform', '', ['class' => 'form-control', 'placeholder' => 'Social Media Platform']) }}
                            <br>
                            {{ Form::text('link', '', ['class' => 'form-control', 'placeholder' => 'Social Media Link']) }}
                            <br>
                            {{ Form::submit('Save', ['class' => 'btn std-btn btn-primary']) }}
                            
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection
