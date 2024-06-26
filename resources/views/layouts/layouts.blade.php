<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{ asset('/assets/css/icons/logo.ico') }}">
        <title>SIPP Diskop</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    </head>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <body>

    @include('layouts.navbar')
        @yield('content')

        @include('layouts.footer')

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      </script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        const navbar = document.querySelector('.fixed-top');
        window.onscroll = () => {
          if (window.scrollY > 100) {
            navbar.classList.add("scroll-nav-active");
            navbar.classList.add("text-nav-active");
            //navbar.classList.remove("navbar-dark");
          } else {
            navbar.classList.remove("scroll-nav-active");
            //navbar.classList.add("navbar-dark");
          }
        };

  AOS.init();

        </script>
    </body>
</html>