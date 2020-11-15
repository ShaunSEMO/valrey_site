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
                        {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@saveContact'], 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                                    
                            {{ Form::text('phone_number', '', ['class' => 'form-control', 'placeholder' => 'Phone Number']) }}
                            <br>
                            {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'E-mail']) }}
                            <br>
                            {{ Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address']) }}
                            <br>
                            {{ Form::submit('Save', ['class' => 'btn std-btn btn-primary']) }}
                            
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection
