<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/vendors/splide.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/splide/splide.min.css') }}">
    <link rel="icon" href="{{asset('images/logo2.png')}}" type="image/x-icon">
    @stack('css')
</head>
<body>
<div id="app">
    <header class="py-2 px-4 d-none d-xl-block">
        <div class="d-flex flex-column flex-md-row align-items-center">
            <a href="{{route('http::home')}}" class="d-flex align-items-center text-dark text-decoration-none logo">
                <img src="{{asset('images/logo2.png')}}" alt="">
            </a>

            <nav class="navbar navbar-expand-lg m-auto">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    นิทรรศการสถาบันวัคซีนแห่งชาติ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('http::booth.research')}}">
                                    เครือข่ายการวิจัยพัฒนา
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('http::booth.production-network')}}">
                                    เครือข่ายการผลิต
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('http::booth.assurance-vaccine')}}">
                                    เครือข่ายการประกันคุณภาพและการใช้วัคซีน
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('http::video-award')}}">
                                    รางวัลประกวดคลิปวีดิโอ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('http::hall-of-fame')}}">
                                    รางวัลผู้ทําคุณประโยชน์
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    การแสดงโปสเตอร์วิชาการ
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <header class="d-xl-none">
        <nav>
            <div class="container p-4">
                <a class="navbar-brand" href="{{route('http::home')}}">
                    <img src="{{asset('images/logo2.png')}}">
                </a>

                <ul class="navbar-nav float-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('images/hamburger.png')}}" alt="" class="d-inline-block align-text-top">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">นิทรรศการสถาบันวัคซีนแห่งชาติ</a></li>
                            <li><a class="dropdown-item" href="{{route('http::booth.research')}}">เครือข่ายการวิจัยพัฒนา</a></li>
                            <li><a class="dropdown-item" href="{{route('http::booth.production-network')}}">เครือข่ายการผลิต</a></li>
                            <li><a class="dropdown-item" href="{{route('http::booth.assurance-vaccine')}}">เครือข่ายการประกันคุณภาพและการใช้วัคซีน</a></li>
                            <li><a class="dropdown-item" href="{{route('http::video-award')}}">รางวัลประกวดคลิปวีดิโอ</a></li>
                            <li><a class="dropdown-item" href="{{route('http::hall-of-fame')}}">รางวัลผู้ทําคุณประโยชน์</a></li>
                            <li><a class="dropdown-item" href="#">การแสดงโปสเตอร์วิชาการ</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>
    </header>


    <main>
        @yield('content')
    </main>
    <footer>
       <div class="container p-4">
           <div class="row">
               <div class="copyright col-md-6 d-none d-md-flex">
                   <small>
                       © nvi-vaccine-conference10. ALL RIGHTS RESERVED. 2022
                   </small>
               </div>
               <div class="social col-sm-12 col-md-6 text-end">
                   <a href="https://facebook.com/nvikm" target="_blank">
                       <img src="{{asset('images/Facebook.png')}}" alt="">
                   </a>
                   <a href="https://www.youtube.com/channel/UCJricRxCPa5SShe5pf8VZZA" target="_blank">
                        <img src="{{asset('images/YouTube.png')}}" alt="">
                   </a>
               </div>
           </div>
       </div>
    </footer>
    @stack('js')
</div>
</body>
</html>
