<div class="container-fluid projects">
    <a class="btn std-btn btn-primary" href="{{ url('/$d_bu$!n3$$_d@$h/project/add') }}">Add Project</a>
    
    <br><br>
    
    <div class="card">
        <h5 class="card-header">Projects</h5>
        <div class="card-body">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2500">
                            <div class="carousel-inner">
                
                                <div style="background: url('{{ asset($project->images->first()->image) }}'); width: 300px; height: 300px; background-repeat: no-repeat; background-position: center center; background-size: cover;" class="carousel-item active">
                                
                                </div>
                
                                @foreach ($project->images as $key => $image)
                                @if($key > 0)
                                    <div style="background: url('{{ asset($image->image) }}'); width: 300px; height: 300px; background-repeat: no-repeat; background-position: center center; background-size: cover;" class="carousel-item">
                                        
                                    </div>
                                @endif
                                @endforeach
                
                            </div>
                        </div>
        
                        <br>
        
                        <small>{{ $project->date }}</small>
        
                        <br>
        
                        <h3>{{ $project->title }}</h3>
        
                        <br>
        
                        <p>{{ $project->desc }}</p>
        
                        <br><br>
        
                        <a class="btn btn-outline-warning" href="{{ url('/$d_bu$!n3$$_d@$h/projects/'.$project->id.'/edit') }}">Edit</a>
                        {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@deleteProject', $project->id], 'method' => 'POST']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                        {!!Form::close()!!}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>