@extends('layouts.app')

@section('content')
  
    <div class="row container-fluid">
        <div class="col-md-2 side-menu" style="background-color:#A4A4AA; height: 100%;">
            @include('dashboard.sideMenu')
        </div>
        <div class="col-md-10 dashboard-content">
            <div class="content">
                <div class="card">
                    <h5 class="card-header">Add Testimonial</h5>
                    <div class="card-body">
                        {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@updateTestimonial', $testimonial->id], 'files' => true, 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
                                
                        {{ Form::label('image', 'Image')}}
                        <br>
                        {{ Form::file('image',['class' => 'form-control'] ) }}
                        <br>
                
                        {{ Form::label('name', 'Name')}}
                        {{ Form::text('name', $testimonial->name, ['class' => 'form-control', 'placeholder' => 'Name']) }}
                        <br>
                        {{ Form::label('text', 'Description') }}
                        {{ Form::textArea('desc', $testimonial->desc, ['class' => 'form-control']) }}
                    
                        <br>

                        {{ Form::submit('Save', ['class' => 'btn std-btn btn-primary']) }}
                    {!! Form::close() !!}
                    </div>
                  </div>
            </div>
        </div>
    </div>
    
@endsection
