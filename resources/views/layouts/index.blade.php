<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    {{-- Custom css --}}
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sections/about.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sections/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sections/gallery.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <title>Valrey</title>
  </head>
  <body id='body'>

    {{-- navbar --}}
    <nav class="navbar navbar-fixed navbar-expand-lg">

        <a class="navbar-brand" href="{{ url('/') }}">_Valrey</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('about') }}">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('shop') }}">Shop</a>
                  </li>
              </ul>

        </div>

      </nav>
      {{-- navbar --}}

    <br>

        @yield('home')
        @yield('about')
        @yield('blog')
        @yield('gallery')
        @yield('shop')
        @yield('create')

        <br><br>

        {{-- footer --}}
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 500,
      })

    </script>
  </body>

  <footer>
      <div class="row">
          <div style="text-align: left;" class="col-lg-6 col-md-6 col-12">
              <small>Copyright © 2019 | All rights reserved to _Valrey</small>
              <br>
              <small> <a href="http://www.valreynkoana.co.za">www.valreynkoana.co.za</a></small>
              <br>
          </div>
          <br>
          <div style="text-align: left; margin-top: 10px;" class="col-lg-6 col-md-6 col-12">
              <p class="swbranding">
                Site designed and developed by <a href="http://www.spyderwebs.co.za"><span class="spyder">Spyder</span><span class="webs">Webs</span>.co.za</a>  
              </p>
          </div>
      </div>
</footer>

</html>
