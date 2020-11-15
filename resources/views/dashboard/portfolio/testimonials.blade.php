<div class="container-fluid projects">
    <a class="btn std-btn btn-primary" href="{{ url('/$d_bu$!n3$$_d@$h/testimonials/add') }}">Add Testimonial</a>
    
    <br><br>
    
    <div class="card">
        <h5 class="card-header">Testimonials</h5>
        <div class="card-body">
            <div class="row">
                @foreach ($testimonials as $testimonial)
                    <div class="col-md-4 co-sm-6">
                        <img src="{{ asset($testimonial->image) }}" class="img-fluid">
                        <br>
                        <h3>{{ $testimonial->name }}</h3>
                        <br>
                        <p>{{ $testimonial->desc }}</p>
                        <br>
                        <a class="btn btn-outline-warning" href="{{ url('/$d_bu$!n3$$_d@$h/testimonials/'.$testimonial->id.'/edit') }}">Edit</a>

                        {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@deleteTestimonial', $testimonial->id], 'method' => 'POST']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', ['class'=>'btn btn-outline-danger'])}}
                        {!!Form::close()!!}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>