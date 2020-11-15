<div  class="col-md-8 container article-container">

        <div class="project black-float container">      
            <br>
            <div class="row">
                @foreach ($projectImages as $image)
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset($image->image) }}" alt="jasd">
                    </div>
                @endforeach

            </div>
            <br><br>
            <small>{{ $project->date }}</small>
            <h3>{{ $project->name }}</h3>
            <br>
            <p>{!! $project->desc !!}</p>
            <br>
        
         
        </div>
        <br>
        <a href="{{ url('/projects') }}" class="sitebtn btn btn-dark"><i class="fas fa-backward"></i></a>
    
    
        <br><br>
</div>