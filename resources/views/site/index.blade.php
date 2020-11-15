<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Valrey Nkoana</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('img/logo_c.jpg') }}">
        
            <meta name="title" content="Valrey Nkoana [ Entreprenuer | Influencer | Model ]">
    <meta name="description" content="South African hair guru, entrepreneur, influencer and bachelor of IT in business systems student. I’m a mogul in the making">
    <meta name="keywords" content="valrey, valrey nkoana, nkoana">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="2 days">
    <meta name="author" content="Valrey Nkoana">

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
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">

        {{-- CSS Libraries --}}
        <script src="https://kit.fontawesome.com/eea5eab299.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        {{-- Scripts --}}
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </head>
    <body>

        @include('site.index.homeHeader')
        <br>
        @include('site.index.knowMe')
        <br>
        @include('site.index.following')
        <br>
        @include('site.index.projects')
        <br>
        @include('site.index.contact')
        <br>
        @include('layouts.footer')

        <!-- Bootstrap JS -->
        
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
            duration: 500,
        })
        </script>
        
    </body>
</html>
