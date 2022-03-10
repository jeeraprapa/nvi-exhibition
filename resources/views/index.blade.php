<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:url"                content="{{request()->url()}}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="นิทรรศการประชุมวิชาการวัคซีนแห่งชาติ ครั้งที่ 10" />
    <meta property="og:description"        content="The 10 th National Vaccine Conference Virtual Exhibition" />
    <meta property="og:image"              content="{{asset('images/logo2.png')}}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.maphilight.js') }}" defer></script>
    <script src="{{ asset('js/vendors/jquery.rwdImageMaps.min.js') }}" defer></script>
    <script src="https://unpkg.com/@panzoom/panzoom@4.4.4/dist/panzoom.min.js"></script>
    <script src="{{ asset('vendor/fakerLoader/fakeLoader.min.js')}}"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('vendor/fakerLoader/fakeLoader.min.css') }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="{{asset('images/logo2.png')}}">
</head>
<body id="home-page">
    <div class="fakeLoader"></div>

    <div class="d-none d-xl-block" id="home-lg">
        <div class="key fixed-top text-center d-flex justify-content-center">
            <h1 class="p-3 fw-bold">
                นิทรรศการประชุมวิชาการวัคซีนแห่งชาติ ครั้งที่ 10
                <span>
                The 10 <sup>th</sup> National Vaccine Conference Virtual Exhibition
            </span>
            </h1>
        </div>
        <header>
            <nav class="fixed-top">
                <div class="container pt-4">
                    <a class="navbar-brand" href="{{route('http::home')}}">
                        <img src="{{asset('images/logo2.png')}}">
                    </a>

                    <ul class="navbar-nav float-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('images/hamburger.png')}}" alt="" class="d-inline-block align-text-top">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{route('http::exhibition-vaccine')}}">นิทรรศการสถาบันวัคซีนแห่งชาติ</a></li>
                                <li><a class="dropdown-item" href="{{route('http::booth.research')}}">เครือข่ายการวิจัยพัฒนา</a></li>
                                <li><a class="dropdown-item" href="{{route('http::booth.production-network')}}">เครือข่ายการผลิต</a></li>
                                <li><a class="dropdown-item" href="{{route('http::booth.assurance-vaccine')}}">เครือข่ายการประกันคุณภาพและการใช้วัคซีน</a></li>
                                <li><a class="dropdown-item" href="{{route('http::video-award')}}">รางวัลประกวดคลิปวีดิโอ</a></li>
                                <li><a class="dropdown-item" href="{{route('http::hall-of-fame')}}">รางวัลผู้ทําคุณประโยชน์</a></li>
                                <li><a class="dropdown-item" href="{{asset('nvi-360/index.html')}}">การแสดงโปสเตอร์วิชาการ</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
        <div id="map" class="d-none d-xl-block" tabindex="0">
            <div>
                <img src="{{asset('images/full-home.png')}}" alt="" class="w-100 vh-100 map maphilighted opacity-0" id="main-map" usemap="#area-map">
            </div>
            <video autoplay muted loop preload="auto">
                <source src="{{asset('images/main.mp4')}}" type="video/mp4">
            </video>
            <map name="area-map">
                <area class="area-map" data-name="รางวัลประกวดคลิปวีดิโอ" data-link="{{route('http::video-award')}}" href="javascript:void(0)" coords="721,594,487,465,482,433,526,345,568,296,621,252,697,228,757,255,795,287,835,352,934,417,934,460,923,488,837,530" shape="poly">

                <area class="area-map" data-name="เครือข่ายการวิจัยพัฒนา" data-link="{{route('http::booth.research')}}" onclick="" href="javascript:void(0)" coords="1099,795,1127,789,1336,655,1328,627,1312,608,1314,564,1293,538,1275,534,1253,543,1219,533,1196,517,1193,465,1169,427,1170,392,1155,351,1111,337,1069,354,1057,399,1087,413,1084,442,1079,490,1034,506,996,507,978,542,972,572,960,594,914,616,902,637,901,657,911,675,989,730,1072,784" shape="poly">

                <area class="area-map" data-name="เครือข่ายการผลิต" data-link="{{route('http::booth.production-network')}}" onclick="" href="javascript:void(0)" coords="1207,336,1276,296,1294,267,1310,263,1323,295,1342,307,1348,275,1392,285,1383,293,1419,298,1414,345,1440,338,1470,358,1520,369,1535,401,1544,413,1564,427,1593,403,1606,387,1627,385,1641,399,1649,407,1659,395,1706,414,1701,445,1725,468,1746,488,1862,558,1858,586,1634,721,1606,727,1386,597,1373,573,1377,553,1142,412,1141,386" shape="poly">
                {{--          xy  300,904=<   ,509,700 =^   ,620,809 =>3  ,450,1032=v  --}}

                <area class="area-map" data-name="เครือข่ายการประกันคุณภาพและการใช้วัคซีน" data-link="{{route('http::booth.assurance-vaccine')}}" onclick="" href="javascript:void(0)" coords="1200,950,1411,750,1920,1076,1440,1076" shape="poly">


                <area class="area-map" data-name="การแสดงโปสเตอร์วิชาการ" data-link="{{asset('nvi-360/index.html')}}" onclick="" href="javascript:void(0)" coords="210,669,409,543,421,539,436,540,681,685,700,680,723,683,739,701,744,724,747,744,746,774,663,823,597,861,534,897,499,896,398,827,293,759,258,735,217,706,204,692" shape="poly">

                <area class="area-map" data-name="รางวัลผู้ทําคุณประโยชน์" data-link="{{route('http::hall-of-fame')}}" onclick="" href="javascript:void(0)" coords="487,1074,468,1057,475,1042,511,1007,506,952,507,920,523,893,557,859,580,848,608,859,622,856,639,845,653,808,686,785,723,782,745,806,745,835,760,865,764,912,779,919,796,929,819,945,839,958,854,963,862,975,850,990,770,1044,724,1076,682,1075,658,1076" shape="poly">

                <area class="area-map" data-name="นิทรรศการสถาบันวัคซีนแห่งชาติ" data-link="{{route('http::exhibition-vaccine')}}" onclick="" href="javascript:void(0)" coords="957,1008,694,848,673,823,681,806,780,745,781,564,778,488,857,483,871,565,874,717,937,757,943,729,953,708,992,713,1009,727,1007,747,1019,767,1018,808,1092,848,1082,830,1100,810,1126,814,1144,831,1149,868,1154,902,1144,931,1042,993,989,1023" shape="poly">

            </map>

{{--            <div class="cars d-none d-md-block">--}}
{{--                <img src="{{asset('images/car/car1.png')}}" alt="" id="car-1" class="position-absolute">--}}
{{--                <img src="{{asset('images/car/car2.png')}}" alt="" id="car-2" class="position-absolute">--}}
{{--                <img src="{{asset('images/car/car3.png')}}" alt="" id="car-3" class="position-absolute">--}}
{{--                --}}{{--            <img src="{{asset('images/car/train1.png')}}" alt="" id="train-1"  class="position-absolute">--}}
{{--                <img src="{{asset('images/car/train2.png')}}" alt="" id="train-2"  class="position-absolute">--}}
{{--            </div>--}}
        </div>
        <footer class="footer fixed-bottom">
            <div class="container text-center">
                <div class="position-relative">
                    <div class="social text-start position-absolute">
                        <a href="https://facebook.com/nvikm" target="_blank">
                            <img src="{{asset('images/Facebook.png')}}" alt="">
                        </a>
                        <a href="https://www.youtube.com/channel/UCJricRxCPa5SShe5pf8VZZA" target="_blank">
                            <img src="{{asset('images/YouTube.png')}}" alt="">
                        </a>
                    </div>
                    <div class="link">
                        <a href="https://www.vaccineconference.in.th" target="_blank">
                            <img src="{{asset('images/link.png')}}" alt="" id="link-conference">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <div id="tooltip" style=""><span></span></div>
    </div>

    <div class="d-xl-none" id="home-sm">
        <header class="bg-white text-center p-4">
            <a class="navbar-brand" href="{{route('http::home')}}">
                <img src="{{asset('images/logo2.png')}}" class="img-logo">
            </a>
        </header>
        <main class="position-relative">
            <div class="key w-100 position-absolute text-center d-flex justify-content-center">
                <h1 class="p-3 fw-bold">
                    นิทรรศการประชุมวิชาการวัคซีนแห่งชาติ ครั้งที่ 10
                    <span>
                        The 10 <sup>th</sup> National Vaccine Conference Virtual Exhibition
                    </span>
                </h1>
            </div>
            <div class="map-sm">
                <video autoplay muted loop preload="auto">
                    <source src="{{asset('images/main.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="menu">
                <nav>
                    <ul class="dropdown-menu dropdown-menu-sm d-block w-100">
                        <li><a class="dropdown-item" href="{{route('http::exhibition-vaccine')}}">
                                <img src="{{asset('images/icon_white.png')}}" alt="" class="img-sm">
                                นิทรรศการสถาบันวัคซีนแห่งชาติ</a></li>
                        <li><a class="dropdown-item" href="{{route('http::booth.research')}}">
                                <img src="{{asset('images/icon_white.png')}}" alt="" class="img-sm">
                                เครือข่ายการวิจัยพัฒนา</a></li>
                        <li><a class="dropdown-item" href="{{route('http::booth.production-network')}}">
                                <img src="{{asset('images/icon_white.png')}}" alt="" class="img-sm">
                                เครือข่ายการผลิต</a></li>
                        <li><a class="dropdown-item" href="{{route('http::booth.assurance-vaccine')}}">
                                <img src="{{asset('images/icon_white.png')}}" alt="" class="img-sm">
                                เครือข่ายการประกันคุณภาพและการใช้วัคซีน</a></li>
                        <li><a class="dropdown-item" href="{{route('http::video-award')}}">
                                <img src="{{asset('images/icon_white.png')}}" alt="" class="img-sm">
                                รางวัลประกวดคลิปวีดิโอ</a></li>
                        <li><a class="dropdown-item" href="{{route('http::hall-of-fame')}}">
                                <img src="{{asset('images/icon_white.png')}}" alt="" class="img-sm">
                                รางวัลผู้ทําคุณประโยชน์</a></li>
                        <li><a class="dropdown-item" href="{{asset('nvi-360/index.html')}}">
                                <img src="{{asset('images/icon_white.png')}}" alt="" class="img-sm">
                                การแสดงโปสเตอร์วิชาการ</a></li>
                        <li><a class="dropdown-item dropdown-item-secondary" href="https://www.vaccineconference.in.th" target="_blank">
                                LINK to Conference <img src="{{asset('images/icon_extanal_link.png')}}" alt="" class="img-sm">
                            </a></li>
                        <li class="text-end social">
                            <a href="https://facebook.com/nvikm" target="_blank">
                                <img src="{{asset('images/Facebook.png')}}" alt="" class="img-logo">
                            </a>
                            <a href="https://www.youtube.com/channel/UCJricRxCPa5SShe5pf8VZZA" target="_blank">
                                <img src="{{asset('images/YouTube.png')}}" alt="" class="img-logo">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </main>
    </div>
</body>
<script>

    $.fakeLoader({
        bgColor: '#aae3ff'
    });

    $(document).ready(function (){
        setTimeout(function(){
            window.location.reload(1);
        }, 180000);

        var mouseX;
        var mouseY;
        $(document).mousemove(function (e) {
            // mouse coordinates
            mouseX = e.pageX;
            mouseY = e.pageY;

        });

        $('img[usemap]').rwdImageMaps();

        $('img[usemap]').maphilight({
            fillOpacity: 0.1,
            stroke: false,
            fillColor: 'E8ECF2FF'
        });

        $(".area-map").mouseover(function () {
            // populate tooltip string
            var name = $(this).data('name');
            name = "<img src='{{asset('images/pin.png')}}'>" + name;
            $('#tooltip span').html(name);

            // show tooltip
            $('#tooltip').stop(false, true).fadeIn(1);

            // position tooltip relative to mouse coordinates
            $(this).mousemove(function () {
                $('#tooltip').css({
                    'top': mouseY - 100,
                    'left': mouseX - 100
                });
            });
        }).mouseout(function () {
            // hide tooltip
            $('#tooltip').stop(false, true).fadeOut(2000);
        }).click(function(){
            url = $(this).attr('data-link');
            window.location.href = url;
        });

        $('.navbar-brand').mouseover(function (){

            var name = "วัคซีน เครื่องมือต้านการระบาดของโรคติดเชื้ออุบัติใหม่";
            name = "<img src='{{asset('images/pin.png')}}'>" + name;
            $('#tooltip span').html(name);

            // show tooltip
            $('#tooltip').stop(false, true).fadeIn(1);

            $(this).mousemove(function () {
                $('#tooltip').css({
                    'top': mouseY + 50,
                    'left': mouseX + 50
                });
            });

        }).mouseout(function () {
            // hide tooltip
            $('#tooltip').stop(false, true).fadeOut(2000);
        });

        const element = document.getElementById('panzoom-element')
        const panzoom = Panzoom(element, {
            animate: true,
            easing: 'ease-in-out',
            minScale: 1,
            panOnlyWhenZoomed: true
        });


        $('#zoom-in').click(function (){
            panzoom.zoomIn();
        })

        $('#zoom-out').click(function (){
            panzoom.zoomOut();
        });

        $('#zoom-reset').click(function (){
            panzoom.reset();
        });

    });
</script>
</html>
