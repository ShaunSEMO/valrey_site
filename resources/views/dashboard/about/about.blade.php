<div class="neumorph global-card" style="text-align:center;">
    <div class="card">
        <h5 class="card-header">About</h5>
        @if ($about_info!=null )
            <div class="card-body">
                <img class="img-fluid" style="width: 300px !important;" src="{{ asset($about_info->image) }}" alt="Post header image">
                <br>
                <br>
                <p>{!! $about_info->desc!!}</p>
                <br>
                <button class="btn btn-warning show-form">Edit</button>

                <br>
                <br>
                <br>

                {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@updateAbout', $about_info->id], 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'hidden hidden-form']) !!}

                    <div class="form-group">
                        {{ Form::label('image', 'Image')}}
                        <br>
                        {{ Form::file('image',['class' => 'form-control crd-text-input center-class'] ) }}
                    </div>
                
                    <div class="form-group">
                        {{ Form::label('text', 'Text') }}
                        {{ Form::textArea('desc', $about_info->desc, ['id' => 'summary-ckeditor','class' => 'form-control crd-text-input', 'placeholder' => 'About...']) }}
                    </div>
                    
                    {{Form::hidden('_method', 'PUT')}}
                    {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
            </div>
        @endif
    </div>
    
</div>
<br><br>