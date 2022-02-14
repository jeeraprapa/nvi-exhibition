<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="{{asset('images/logo2.png')}}">
</head>
<body id="home-page" class="overflow-hidden">
    <header>
        <nav class="navbar navbar-light fixed-top">
            <div class="container pt-2">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('images/logo2.png')}}" alt="" class="d-inline-block align-text-top">
                </a>
                <a class="navbar-brand" href="#">
                    <img src="{{asset('images/hamburger.png')}}" alt="" class="d-inline-block align-text-top float-end">
                </a>
            </div>
        </nav>
    </header>
    <div id="map">
        <img src="{{asset('images/home-page.png')}}" alt="" class="w-100 vh-100 img-fluid" id="main-map">
        <div class="cars d-none d-md-block">
            <img src="{{asset('images/car.png')}}" alt="" id="car-1" width="20px" class="position-absolute">
        </div>
    </div>
    <footer class="footer fixed-bottom">
        <div class="container text-center">
            <div class="position-relative">
                <div class="social text-start position-absolute">
                    <img src="{{asset('images/Facebook.png')}}" alt="">
                    <img src="{{asset('images/Youtube.png')}}" alt="">
                </div>
                <div class="link">
                    <img src="{{asset('images/link.png')}}" alt="" id="link-conference">
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
