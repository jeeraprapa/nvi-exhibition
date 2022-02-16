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
    <script src="{{ asset('js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.maphilight.js') }}" defer></script>
    <script src="{{ asset('js/vendors/jquery.rwdImageMaps.min.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="{{asset('images/logo2.png')}}">
</head>
<body id="home-page" class="overflow-hidden">
{{--    <div class="key fixed-top text-center d-flex justify-content-center">--}}
{{--        <h1 class="p-3 fw-bold">--}}
{{--            นิทรรศการประชุมวิชาการวัคซีนแห่งชาติ ครั้งที่ 10--}}
{{--            <span>--}}
{{--                Vaccine Conference 10 Virtual Exhibition--}}
{{--            </span>--}}
{{--        </h1>--}}
{{--    </div>--}}
    <header>
        <nav class="fixed-top">
            <div class="container pt-4">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('images/logo2.png')}}">
                </a>

                <ul class="navbar-nav float-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('images/hamburger.png')}}" alt="" class="d-inline-block align-text-top">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div id="map" tabindex="0">
        <div>
            <img src="{{asset('images/main.png')}}" alt="" class="w-100 vh-100 img-fluid map maphilighted" id="main-map" usemap="#area-map">
        </div>

        <map name="area-map">
            <area class="area-map" data-name="รางวัลประกวดคลิปวีดิโอ" data-link="https://virtualexpo.asa.or.th/content/page7" href="javascript:void(0)" coords="418,216,444,198,474,182,468,145,548,116,551,83,582,64,610,61,635,69,652,94,652,136,678,159,716,171,730,173,737,188,779,213,796,221,793,199,818,195,833,202,840,215,840,241,843,257,840,278,804,298,778,316,709,356,672,381,646,391,604,374,478,303,432,271,409,244" shape="poly">

            <area class="area-map" data-name="เครือข่ายการวิจัยพัฒนา" data-link="https://asa.or.th/products/" onclick="" href="javascript:void(0)" coords="869,447,839,464,834,485,837,497,997,598,1028,610,1071,582,1158,529,1232,483,1243,466,1228,443,1167,402,1128,379,1111,376,1110,300,1088,285,1077,269,1073,223,1054,215,1042,207,1028,212,1003,206,1009,223,1018,232,1034,237,1031,252,1015,269,1017,281,1018,300,1017,326,1015,359,990,348,978,367,973,381,947,399,933,376,919,368,919,404,913,416,893,431" shape="poly">

            <area class="area-map" data-name="เครือข่ายการผลิต" data-link="https://asa.or.th/products/" onclick="" href="javascript:void(0)" coords="1100,110,1300,9,1880,390,1609,600" shape="poly">
            {{--          xy  300,904=<   ,509,700 =^   ,620,809 =>3  ,450,1032=v  --}}

            <area class="area-map" data-name="เครือข่ายการประกันคุณภาพและการใช้วัคซีน" data-link="https://asa.or.th/products/" onclick="" href="javascript:void(0)" coords="1220,807,1411,604,1887,916,1567,1046" shape="poly">


            <area class="area-map" data-name="การแสดงโปสเตอร์วิชาการ" data-link="https://asa.or.th/products/" onclick="" href="javascript:void(0)" coords="466,709,522,672,562,657,582,644,609,624,633,604,652,576,650,554,633,533,602,534,340,387,150,494,139,506,139,531,140,540,430,709,449,712" shape="poly">

            <area class="area-map" data-name="รางวัลผู้ทําคุณประโยชน์" data-link="https://asa.or.th/products/" onclick="" href="javascript:void(0)" coords="300,1004,509,700,760,879,450,1100" shape="poly">

            <area class="area-map" data-name="นิทรรศการสถาบันวัคซีนแห่งชาติ" data-link="https://asa.or.th/products/" onclick="" href="javascript:void(0)" coords="907,849,1042,772,1041,755,1059,713,1031,685,997,689,1008,719,932,680,927,638,910,623,918,607,906,589,892,582,878,587,865,590,861,613,856,629,783,600,782,427,760,414,758,365,740,384,721,345,717,370,707,386,706,409,695,421,693,446,684,613,619,654,617,671,627,688" shape="poly">

        </map>

        <div class="cars d-none d-md-block">
            <img src="{{asset('images/car/car1.png')}}" alt="" id="car-1" class="position-absolute">
            <img src="{{asset('images/car/train1.png')}}" alt="" id="train-1"  class="position-absolute">
        </div>
    </div>
    <footer class="footer fixed-bottom">
        <div class="container text-center">
            <div class="position-relative">
                <div class="social text-start position-absolute">
                    <img src="{{asset('images/Facebook.png')}}" alt="">
                    <img src="{{asset('images/YouTube.png')}}" alt="">
                </div>
                <div class="link">
                    <img src="{{asset('images/link.png')}}" alt="" id="link-conference">
                </div>
            </div>
        </div>
    </footer>
    <div id="tooltip" style=""><span></span></div>
</body>
<script>
    $(document).ready(function (){
        var mouseX;
        var mouseY;
        $(document).mousemove(function (e) {
            // mouse coordinates
            mouseX = e.pageX;
            mouseY = e.pageY;

        });

        $('img[usemap]').rwdImageMaps();

        $('img[usemap]').maphilight({
            fillOpacity: 0.2,
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
    });
</script>
</html>
