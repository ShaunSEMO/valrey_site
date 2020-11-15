@extends('layouts.app')

@section('content')


@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('succes'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif

  
    <div class="row container-fluid">
        <div class="col-md-2 side-menu" style="background-color:#d4d4d4; height: 100%;">
            @include('dashboard.sideMenu')
        </div>
        <div class="col-md-10 dashboard-content">
            <div class="content">
                <div class="card">
                    <h5 class="card-header">Edit Project</h5>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-4">
        
                                {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@storeUpdateProject', $project->id], 'files' => true, 'method' => 'get', 'enctype' => 'multipart/form-data', 'id' => 'upload']) !!}

                                    {{ Form::text('title', $project->title, ['class' => 'form-control', 'placeholder' => 'Project Title']) }}
                                    <br>
                                    {{ Form::date('date', $project->date, ['class' => 'form-control', \Carbon\Carbon::now()]) }}
                                    <br>
                                    {{ Form::textArea('desc', $project->desc, ['class' => 'form-control summary-ckeditor', 'placeholder' => 'Description']) }}
                                    <br>
                                    {{ Form::submit('Save', ['class' => 'btn std-btn btn-primary']) }}

                                {!! Form::close() !!}
    
                            </div>
    
                        
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  
@endsection
