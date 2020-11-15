<div class="blog-posts">
    <div class="row">
        @foreach($posts as $post)
                <div class="col-md-4" style="text-align: center;">
                    <div class="each-post">
                        <br>
                        <small>{{ \Carbon\Carbon::parse($post->created_at)->format('d - m - Y')}}
                        </small>
                        <img class="img-fluid mx-auto d-block" src="{{ asset($post->image) }}" alt="Post header image">
                        <h3>{!! $post->title !!}</h3>
                        <p>{!! \Illuminate\Support\Str::limit($post->body, 200, '...') !!}</p>
                        <a class="btn std-btn" href="{{ url('$d_bu$!n3$$_d@$h/blog/'.$post->id.'/read') }}">Open Post</a>
                    </div>      
              <hr>
          </div>
        @endforeach
    </div>
</div>