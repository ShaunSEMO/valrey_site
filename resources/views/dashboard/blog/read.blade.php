
        <div class="content">
            <div class="container">
                <div class="blog-posts container-fluid">
                    <div class="row">
                                <div class="col-md-4" style="text-align: center;">
                                    <div class="each-post">
                                        <br>
                                        <small>{!! \Carbon\Carbon::parse($post->created_at)->format('d - m - Y') !!}
                                        </small>
                                        <img class="img-fluid mx-auto d-block" src="{{ asset($post->image) }}" alt="Post header image">
                                        <h3>{!! $post->title !!}</h3>
                                        <p>{!! $post->body !!}</p>
                                        <br>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ url('/$d_bu$!n3$$_d@$h/blog/'.$post->id.'/edit') }}" class="btn btn-warning">Edit</a>
                                            {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@destroyPost', $post->id], 'method' => 'POST']) !!}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!} 
                                        </div> 
                                    </div>         
                              <hr>
                          </div>
                    </div>
                </div>
            </div>
        </div>