@extends('layouts.app')

@section('content')
  
    <div class="row container-fluid">
        <div class="col-md-2 side-menu" style="background-color:#d4d4d4; height: 100%;">
            @include('dashboard.sideMenu')
        </div>
        <div class="col-md-10 dashboard-content">
            <div class="content">
                <div class="container">
                    <a class="btn std-btn btn-primary" href="{{ url('/$d_bu$!n3$$_d@$h/blog/create') }}">Create Post</a>
                    <br>
                    <br>
                    @include('dashboard.blog.posts')
                </div>
            </div>
        </div>
    </div>
    
@endsection
