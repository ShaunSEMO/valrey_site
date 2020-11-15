<a class="btn btn-primary std-btn" href="{{ url('/$d_bu$!n3$$_d@$h/gallery/createGallery') }}">Add Gallery</a>

<br><br>

<div class="images-container col-md-8">
        @foreach ($gallery_event as $event)
            <div class="card">
                <h5 class="card-header">
                    {{ $event->name}}
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary show-form-3">Edit</button>
                        {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@deleteGallery', $event->id], 'method' => 'POST']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!} 
                    </div>
                    <br>
                    {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@updateGalleryName', $event->id], 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data', 'class'=>'hidden hidden-form-3']) !!}
                        {{ Form::text('gallery_name', '', ['class' => 'form-control crd-text-input']) }}
                        
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Update', ['class' => 'btn btn-primary std-btn']) }}
                    {!! Form::close() !!}
                </h5>
                <div class="card-body">
                    <a class="btn btn-primary std-btn" href="{{ url('/$d_bu$!n3$$_d@$h/gallery/'.$event->id.'/addPicture') }}">Add Picture</a>
                    <br>
                    <div class="row">
                        @foreach($event->pictures as $picture)
                                <div class="col-4 col-md-4">
                                    <br>
                                    <a href="{{ url('/gallery/'.$picture->id) }}">
                                        <img class="gallery-image img-fluid each-image" src="{{ url($picture->image) }}" alt="">
                                        <br>
                                        {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@deletePicture', $picture->id], 'method' => 'POST']) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                        {!!Form::close()!!}
                                    </a>
                                </div>                       
                        @endforeach
                    </div>
                </div>
            </div>
            <br><br>
        @endforeach
    

    
</div>