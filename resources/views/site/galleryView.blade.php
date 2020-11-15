<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Valrey Nkoana | My Gallery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('img/logo_c.jpg') }}">

        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143810452-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143810452-1');
</script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- Custom CSS --}}
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">

        {{-- CSS Libraries --}}
        <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    </head>
    <body>

            @include('layouts.smallNav')
            <br>
             
        <div class="row container" style="margin: auto;">
            @include('site.gallery.viewImage')
            @include('layouts.sidebar')
        </div>
        <br>
        @include('layouts.footer')

        <!-- Bootstrap JS -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
            duration: 500,
        })
        </script>
        
    </body>
</html>
