<div class="projects-container col-md-8 container">
        @foreach ($projects as $project)
            <div class="project">
                <div class="row black-float">
                    <div class="col-lg-4">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ $project->images()->first()->image  }}" class="d-block project-image w-100" alt="...">
                                </div>
                                @foreach ($project->images() as $key => $image)
                                    @if ($key>0)
                                        <div class="carousel-item">
                                            <img src="{{ $image->image }}" class="d-block project-image w-100" alt="...">
                                        </div>
                                    @endif
                                @endforeach
                            
                            </div>
                        </div>
                        <br><br>
                    </div>
                    <div class="col-lg-8">
                        <br>
                        <small>{{ $project->date }}</small>
                        <h3>{{ $project->name }}</h3>
                        <br>
                        <p>{{ \Illuminate\Support\Str::limit($project->desc, 500, '...') }}</p>
                        <a href="{{ url('/projects/'.$project->id) }}" class="btn btn-dark site-btn-black">Read More</a>
                        <br><br>
                    </div>
                </div> 
            </div>
            <br><br>
        @endforeach
</div>