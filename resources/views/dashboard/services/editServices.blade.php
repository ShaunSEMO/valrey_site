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
    
                                {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@updateService', $service->id], 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                            
                                    <label for="icon">Select Service Icon</label>
                                    <button name="icon" class="btn btn-secondary" data-iconset="fontawesome5" data-icon="{{$service->icon }}" role="iconpicker"></button>
                                    <br>
                                    {{ Form::label('name', 'Name')}}
                                    {{ Form::text('name', $service->title, ['class' => 'form-control', 'placeholder' => 'Name']) }}

                                    <br>

                                    {{ Form::label('text', 'Description') }}
                                    {{ Form::textArea('desc', $service->desc, ['class' => 'form-control']) }}
                                
                                    <br>

                                    {{Form::hidden('_method', 'PUT')}}
                                    {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
                                {!! Form::close() !!}
                            
    
                            </div>
    
                        
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    
@endsection
