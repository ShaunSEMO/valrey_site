<nav class="navbar navbar-dark navbar-expand-lg small-nav">
        
        <div class="row socials container">
                <div class="col-xs-4">
                    <a class="navbar-brand" href="{{ url('/') }}"><img class="logo" src="{{ asset('img/logo_c.jpg') }}" alt="logo"></a>
                </div>
    
                <div class="col-xs-4">
                    <a href="https://www.instagram.com/_valrey/"><img class="social-icons" src="{{ asset('img/instagram.png') }}" alt=""></a>
                </div>
    
                <div class="col-xs-4">
                    <a href="https://twitter.com/valreynkoana"><img class="social-icons" src="{{ asset('img/twitter.png') }}" alt=""></a>
                </div>
            </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/projects') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>

        </div>
</nav>