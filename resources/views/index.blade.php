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

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="{{asset('images/logo2.png')}}">
</head>
<body id="home-page" class="overflow-hidden">
    <div class="key fixed-top text-center d-flex justify-content-center">
        <h1 class="p-3 fw-bold">
            วัคซีน เครื่องมือต้านการระบาดของโรคติดเชื้ออุบัติใหม่
        </h1>
    </div>
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
            <area class="area-map" data-name="งานประกวดแบบนักศึกษา HERITAGE IN DANGER" data-link="https://virtualexpo.asa.or.th/content/page7" href="javascript:void(0)" coords="420,180,100" shape="circle">
            <area class="area-map" data-name="รางวัลอนุรักษ์ศิลปสถาปัตยกรรรม" data-link="https://virtualexpo.asa.or.th/content/page6" href="javascript:void(0)" coords="646,413,706,448,809,389,753,352" shape="poly">
            <area class="area-map" data-name="หนังสั้น มรดก'64" data-link="https://virtualexpo.asa.or.th/content/page5" href="javascript:void(0)" coords="896,435,848,408,838,394,825,394,714,454,791,500" shape="poly">
            <area class="area-map" data-name="อะไรคือ &quot;มองเก่า ให้ใหม่&quot;" data-link="https://virtualexpo.asa.or.th/content/page4" href="javascript:void(0)" coords="948,439,936,429,925,436,925,450,918,450,918,420,908,413,902,419,893,414,885,423,883,450,875,457,875,437,868,431,856,436,852,473,829,485,799,505,888,555,995,493,948,465" shape="poly">
            <area class="area-map" data-name="การซ่อมแปลงพระที่นั่งจักรีฯ" data-link="https://virtualexpo.asa.or.th/content/page8" href="javascript:void(0)" coords="897,560,960,596,1071,536,1004,494" shape="poly">
            <area class="area-map" data-name="งานประกวดแบบ THE EVERYDAY HERITAGE" data-link="https://virtualexpo.asa.or.th/content/page9" href="javascript:void(0)" coords="1115,557,1039,603,1033,614,1014,625,968,600,1077,536" shape="poly">
            <area class="area-map" data-name="รางวัลสถาปัตยกรรมดีเด่น" data-link="https://virtualexpo.asa.or.th/architectural" href="javascript:void(0)" coords="1039,602,1117,553,1136,566,1139,575,1174,594,1064,659,1014,626,1036,613" shape="poly">
            <area class="area-map" data-name="สินค้าและของที่ระลึก" data-link="https://asa.or.th/products/" onclick="" href="javascript:void(0)" coords="745,324,800,362,897,319,842,277" shape="poly">
            <area class="area-map" data-name="การบรรยายวิชาการนานาชาติ" data-link="https://virtualexpo.asa.or.th/forum" href="javascript:void(0)" coords="1032,487,1131,547,1211,501,1199,494,1195,484,1193,466,1115,418,1112,429,1041,464,1044,476" shape="poly">
            <area class="area-map" data-name="นิทรรศการ &quot;ฟื้นชีวิตมรดก&quot;" data-link="https://virtualexpo.asa.or.th/heritageReviving" href="javascript:void(0)" coords="851,544,876,561,771,623,682,572,788,507,823,503" shape="poly">
            <area class="area-map" data-name="นิทรรศการ &quot;วิกฤตมรดก&quot;" data-link="https://virtualexpo.asa.or.th/heritageCrisis" href="javascript:void(0)" coords="675,574,762,628,652,690,569,638" shape="poly">
            <area class="area-map" data-name="นิทรรศการ &quot;เฉลิมราชสุดา สถาปัตยานุรักษ์&quot;" data-link="https://virtualexpo.asa.or.th/chalermRatchasuda" href="javascript:void(0)" coords="535,626,518,604,508,624,479,643,469,637,446,654,440,667,413,667,404,677,407,692,409,711,393,709,391,760,374,781,404,799,425,791,448,791,459,798,528,760,545,771,583,752,565,738,633,697,596,672,599,647,574,632,567,635,543,621" shape="poly">
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

        $('img[usemap]').maphilight({
            fillOpacity: 0.1,
            stroke: false
        });

        $(".area-map").mouseover(function () {
            // populate tooltip string
            var name = $(this).data('name');
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
        }).mouseup(function(){
            url = $(this).attr('data-link');
            window.location.href = url;
        });
    })
</script>
</html>
