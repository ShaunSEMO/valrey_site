<div class="knowMe-container">
    <h1>Get To Know Me</h1>
    <hr class="black-hr">
    <br>
    <div class="row" style="margin:auto;">

        <a class="col-sm-4 container" href="{{ url('/about') }}">
            <div data-aos='flip-right' class="tab about-tab">
                <h3>Know About Me</h3>
                <br>
                <p>About</p>
            </div>
            <br><br>
        </a>
        
        <a class="col-sm-4" href="{{ url('/channel') }}">
            <div data-aos="flip-left" class="tab blog-tab">
                <h3>Witness My Journey</h3>
                <br>
                <p>Channel</p>
            </div>
            <br><br>
        </a>
        
        <a class="col-sm-4" href=" {{ url('/gallery') }} ">
            <div data-aos='flip-right' class="tab gallery-tab">
                <h3>My Gallery</h3>
                <br><br>
                <p>Gallery</p>
            </div>
            <br><br>
        </a>
        
    </div>
</div>
