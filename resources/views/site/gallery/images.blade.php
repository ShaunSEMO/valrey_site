<div class="images-container col-md-8">

    <div class="row">
        @foreach($pictures as $picture)
            
            <div class="col-4 col-md-4">
                <br>
                <a href="{{ url('/gallery/'.$picture->id) }}">
                    <img class="gallery-image img-fluid each-image" src="{{ url($picture->image) }}" alt="Valrey Nkoana Gallery Image">
                    <br>
                </a>
            </div>
            
        @endforeach
    </div>


    {{ $pictures->links() }}

    <br><br>
</div>