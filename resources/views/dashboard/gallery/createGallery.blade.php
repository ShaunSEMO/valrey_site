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


<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">

<div class="card">
    <div class="card-header">Create New Gallery</div>
    <div class="card-body">
        {!! Form::open(['action' => 'App\Http\Controllers\DashboardController@storeGallery', 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{ Form::label('gallery_name', 'Gallery name')}}
                {{ Form::text('gallery_name', '', ['class' => 'form-control crd-text-input']) }}
            </div>
            <div class="form-group">
                {{ Form::label('image', 'Add image(s)')}}
                <br>
                <input type="file" name="image[]" multiple>
            </div>
            
            {{ Form::submit('Post', ['class' => 'btn btn-primary']) }}

        {!! Form::close() !!}
        
    </div>
</div>

</div>
</div>
</div>
@endsection