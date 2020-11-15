<div class="project-container">

    <br>
    <h1>My Recent Work</h1>
    <hr class="black-hr">
    <br>

    <div class="container project">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" >
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active indicators"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="indicators"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="indicators"></li>
                </ol>
                <div class="carousel-inner">
        
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                          <img src="{{ $projects->first()->images()->first()->image  }}" class="d-block project-image w-100" alt="...">
                                      </div>
                                      @foreach ($projects->first()->images() as $key => $image)
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
                            <div class="col-lg-8 container project-details">
                                <br>
                                <small>{{ $projects->first()->date }}</small>
                                <br>
                                <h3>{{ $projects->first()->name }}</h3>
                                <br>
                                <br>
                                <p>{{ \Illuminate\Support\Str::limit($projects->first()->desc, 500, '...') }}</p>
                                <br>
                                <a href="{{ url('/projects/'.$projects->first()->id) }}" class="btn btn-dark site-btn-black">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                    @foreach ($projects as $key => $project)
                        @if ($key > 0)
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ $projects->images()->first()->image  }}" class="d-block project-image w-100" alt="...">
                                                </div>
                                                @foreach ($projects->images() as $key => $image)
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
                                    <div class="col-lg-8 container project-details">
                                        <small>{{ $project->date }}</small>
                                        <h3>{{ $project->name }}</h3>
                                        <br>
                                        <p>{{ \Illuminate\Support\Str::limit($projects->desc, 500, '...') }}</p>

                                        <a href="{{ url('/projects/'.$project->id) }}" class="btn btn-dark site-btn-black">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endif 
                    @endforeach
                    
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon control-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon control-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <br>
            <hr class="project-hr">
            <a href="{{ url('/projects') }}" class="btn btn-dark site-btn-black">View Projects</a>
    
    </div>

</div>