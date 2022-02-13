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

    <link rel="icon" href="{{asset('images/logo1.png')}}" type="image/x-icon">
</head>
<body style="background: #F3F9FF">
    <nav class="navbar navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/logo.png')}}" alt="" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav>
    <div id="map">
        <img src="{{asset('images/home-page.png')}}" alt="" class="w-100 vh-100 img-fluid" id="main-map">
        <div class="cars">
            <img src="{{asset('images/car.png')}}" alt="" id="car-1" class="position-absolute">
        </div>
    </div>
    <footer class="footer fixed-bottom">
        <div class="container text-center">
            <img src="{{asset('images/link.png')}}" alt="">
        </div>
    </footer>
</body>
</html>
