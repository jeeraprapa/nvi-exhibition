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
<body>
    <nav class="navbar navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/logo.png')}}" alt="" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav>
    <div id="map">
        <img src="{{asset('images/main-page.png')}}" alt="" class="w-100 vh-100 img-fluid" id="main-map">
        <div class="cars">

        </div>
    </div>
</body>
</html>
