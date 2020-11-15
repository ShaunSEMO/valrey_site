<div class="content">
    <a class="btn btn-primary" href="{{ url('/$d_bu$!n3$$_d@$h/services/add') }}">Add Service</a>
    <br><br>

            <div class="card">
                <h5 class="card-header">Services</h5>
                <div class="card-body">
                    <div class="row">
                        @foreach ($services as $service)
                            <div class="col-md-4" style="text-align: center">
                                <i style="font-size: 50px" class="{{ $service->icon }}"></i>
                                <br><br>
                                <h3>{{ $service->title }}</h3>
                                <p>{{ $service->desc }}</p>
                                <a class="btn btn-outline-warning" href="{{ url('/$d_bu$!n3$$_d@$h/services/'.$service->id.'/edit') }}">Edit</a>
                                {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@deleteService', $service->id], 'method' => 'POST']) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                {!!Form::close()!!}
                            </div>
                         @endforeach
                    </div>
                </div>
            </div>
            <br><br>

</div>