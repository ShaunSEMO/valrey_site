@extends('layouts.app')

@section('content')
  
    <div class="row container-fluid">
        <div class="col-md-2 side-menu" style="background-color:#A4A4AA; height: 100%;">
            @include('dashboard.sideMenu')
        </div>
        <div class="col-md-10 dashboard-content">
            <div class="card">
                <div class="card-header">
                    <h5>Create Blog Post</h5>
                </div>

                <div class="card-body">
                    <div class="container">
                        {!! Form::open(['action' => 'App\Http\Controllers\DashboardController@savePost', 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

                            <div class="form-group">
                                {{ Form::label('image', 'Image')}}
                                <br>
                                {{ Form::file('image') }}
                            </div>
                        
                            <div class="form-group">
                                {{ Form::label('title', 'Title')}}
                                {{ Form::text('title', '', ['class' => 'form-control crd-text-input', 'placeholder' => 'Post title']) }}
                            </div>
                        
                            <div class="form-group">
                                {{ Form::label('text', 'Text') }}
                                {{ Form::textArea('body', '', ['class' => 'form-control crd-text-input', 'placeholder' => 'Article...', 'id' => 'summary-ckeditor']) }}
                            </div>

                            {{ Form::submit('Publish', ['class' => 'btn btn-primary std-btn']) }}

                        {!! Form::close() !!}
                    </div>
                </div>
              </div>

        </div>
    </div>

    
@endsection