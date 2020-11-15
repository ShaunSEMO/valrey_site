<div class="about-sec">
    <div class="row">
        <div class="col-md-6">
            <div class="container">
                @foreach($abouts as $about)
                    <div style="text-align:center;" class="container about-cont">
                        <br>
                        <img class="img-fluid about-image" src="{{ asset($about->image) }}" alt="Post header image">
                        <br>
                        <br>
                        <br>
                        <p class="about-paragraph">{!! $about->desc!!}</p>
                        <br>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <div class="about-decor-img">
                
            </div>
        </div>
    </div>
</div>