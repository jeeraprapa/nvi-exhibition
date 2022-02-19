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

    <link rel="icon" href="{{asset('images/logo2.png')}}" type="image/x-icon">
</head>
<body>
<div id="app">
    <header class="py-2 px-4">
        <div class="d-flex flex-column flex-md-row align-items-center">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none logo">
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
                                <a class="nav-link" href="#">
                                    เครือข่ายการวิจัยพัฒนา
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('booth.production-network')}}">
                                    เครือข่ายการผลิต
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    เครือข่ายการประกันคุณภาพและการใช้วัคซีน
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    รางวัลประกวดคลิปวีดิโอ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
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
    <main>
        @yield('content')
    </main>
    <footer>
       <div class="container p-4">
           <div class="row">
               <div class="copyright col-sm-12 col-md-6">
                   <small>
                       © nvi-vaccine-conference10. ALL RIGHTS RESERVED. 2022
                   </small>
               </div>
               <div class="social col-sm-12 col-md-6 text-end">
                   <img src="{{asset('images/Facebook.png')}}" alt="">
                   <img src="{{asset('images/YouTube.png')}}" alt="">
               </div>
           </div>
       </div>
    </footer>
</div>
</body>
</html>
