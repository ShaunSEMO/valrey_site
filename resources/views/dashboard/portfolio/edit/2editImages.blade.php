@extends('layouts.app')

@section('content')

    <div class="row container-fluid">
        <div class="col-md-2 side-menu" style="background-color:#d4d4d4; height: 100%;">
            @include('dashboard.sideMenu')
        </div>
        <div class="col-md-10 dashboard-content">
            <div class="content">
                <div class="card">
                    <h5 class="card-header">Add Project</h5>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($project_images as $img)
                                <div class="col-md-3">
                                    <img src="{{ asset($img->image) }}" class="img-fluid img-thumbnail" alt="Project Image">
                                    <br>
                                    {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@deleteImage', $project_id], 'method' => 'post']) !!}
                                        {{ Form::hidden('img_id', $img->id) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                    {!! Form::close() !!}
                                </div>
                            @endforeach
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
        
                                {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@updateProject', $project_id], 'files' => true, 'method' => 'put', 'enctype' => 'multipart/form-data', 'id' => 'form1']) !!}

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                {{ Form::label('image', 'Image') }}
                                                    <br>
                                                <input type="file" name="image[]" multiple>

                                                {{ Form::hidden('project_title', $project_title) }}
                                                {{ Form::hidden('project_desc', $project_desc) }}
                                                {{ Form::hidden('project_date', $project_date) }}
                                            </div>
                                        </div>
                                    </div>

                                    {{ Form::submit('Save image(s)', ['class' => 'btn std-btn btn-primary']) }}

                                {!! Form::close() !!}
    
                            </div>
    
                        
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  
@endsection
