@extends('layouts.base')

@section('content')
    <div id="main-exhibition">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{asset('images/exhibition/section-1.png')}}" alt="">
                        <a href="#" class="one__pointer__one">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="one__pointer__two">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                    </li>
                    <li class="splide__slide"><img
                                src="{{asset('images/exhibition/section-2.png')}}" alt="">
                        <a href="#" class="two__pointer__one">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="two__pointer__two">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="two__pointer__three">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="two__pointer__four">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                    </li>
                    <li class="splide__slide"><img
                                src="{{asset('images/exhibition/section-3.png')}}" alt="">
                        <a href="#" class="three__pointer__one">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="three__pointer__two">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="three__pointer__three">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="three__pointer__four">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                    </li>
                    <li class="splide__slide"><img
                                src="{{asset('images/exhibition/section-4.png')}}" alt="">
                        <a href="#" class="four__pointer__discovery">
                            <img src="{{asset('images/exhibition/discovery.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="four__pointer__hr">
                            <img src="{{asset('images/exhibition/hr.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="four__pointer__networking">
                            <img src="{{asset('images/exhibition/networking.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="four__pointer__pp">
                            <img src="{{asset('images/exhibition/pp.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="four__pointer__rl">
                            <img src="{{asset('images/exhibition/rl.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="four__pointer__pd">
                            <img src="{{asset('images/exhibition/pd.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="four__pointer__lc">
                            <img src="{{asset('images/exhibition/lc.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="four__pointer__production">
                            <img src="{{asset('images/exhibition/production.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="four__pointer__ct">
                            <img src="{{asset('images/exhibition/ct.png')}}" class="img-fluid">
                        </a>
                    </li>
                    <li class="splide__slide"><img
                                src="{{asset('images/exhibition/section-5.png')}}" alt="">
                        <a href="#" class="five__pointer__one">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="five__pointer__two">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="five__pointer__three">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="five__pointer__four">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="five__pointer__five">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="five__pointer__green">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="five__pointer__red">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="five__pointer__blue">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                        <a href="#" class="five__pointer__car">
                            <img src="{{asset('images/exhibition/pointer.png')}}" class="img-fluid">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @include('_modal')
@endsection
@push('js')
    <script>
        new Splide( '.splide', {
            arrows:false,
            perPage    : 1,
            breakpoints: {
                640: {
                    perPage: 1,
                },
            }
        } ).mount();
        //slide1
        $('.one__pointer__one').click(function(){
            $('#one__pointer__one').modal('show');
        });
        $('.one__pointer__two').click(function(){
            $('#one__pointer__two').modal('show');
        });
        $("#close_one_one").click(function(){
            $("#one__pointer__one").modal('hide');
        });
        $("#close_one_two").click(function(){
            $("#one__pointer__two").modal('hide');
        });
        //slide2
        $('.two__pointer__one').click(function () {
            $('#two__pointer__one').modal('show');
        });
        $("#close_two_one").click(function(){
            $("#two__pointer__one").modal('hide');
        });
        $('.two__pointer__two').click(function () {
           $('#two__pointer__two').modal('show');
        });
        $("#close_two_two").click(function(){
            $("#two__pointer__two").modal('hide');
        });

        $('.two__pointer__three').click(function () {
            $('#two__pointer__three').modal('show');
        });
        $("#close_two_three").click(function(){
            $("#two__pointer__three").modal('hide');
        });

        $('.two__pointer__four').click(function () {
            $('#two__pointer__four').modal('show');
        });
        $("#close_two_four").click(function(){
            $("#two__pointer__four").modal('hide');
        });
        //slide3
        $('.three__pointer__one').click(function () {
            $('#three__pointer__one').modal('show');
        });
        $("#close_three_one").click(function(){
            $("#three__pointer__one").modal('hide');
        });

        $('.three__pointer__two').click(function () {
            $('#three__pointer__two').modal('show');
        });
        $("#close_three_two").click(function(){
            $("#three__pointer__two").modal('hide');
        });
        $('.three__pointer__three').click(function () {
            $('#three__pointer__three').modal('show');
        });
        $("#close_three_three").click(function(){
            $("#three__pointer__three").modal('hide');
        });
        $('.three__pointer__four').click(function () {
            $('#three__pointer__four').modal('show');
        });
        $("#close_three_four").click(function(){
            $("#three__pointer__four").modal('hide');
        });
        //slide4
        $('.four__pointer__discovery').click(function () {
            $('#four__pointer__discovery').modal('show');
        });
        $('.four__pointer__hr').click(function () {
            $('#four__pointer__hr').modal('show');
        });
        $('.four__pointer__pd').click(function () {
            $('#four__pointer__pd').modal('show');
        });
        $('.four__pointer__networking').click(function () {
            $('#four__pointer__networking').modal('show');
        });
        $('.four__pointer__pp').click(function () {
            $('#four__pointer__pp').modal('show');
        });
        $('.four__pointer__rl').click(function () {
            $('#four__pointer__rl').modal('show');
        });
        $('.four__pointer__ct').click(function () {
            $('#four__pointer__ct').modal('show');
        });
        $('.four__pointer__lc').click(function () {
            $('#four__pointer__lc').modal('show');
        });
        $('.four__pointer__production').click(function () {
            $('#four__pointer__production').modal('show');
        });
        //slide5
        $('.five__pointer__one').click(function () {
            $('#five__pointer__one').modal('show');
        });
        $('.five__pointer__two').click(function () {
            $('#five__pointer__two').modal('show');
        });
        $('.five__pointer__three').click(function () {
            $('#five__pointer__three').modal('show');
        });
        $('.five__pointer__four').click(function () {
            $('#five__pointer__four').modal('show');
        });
        $('.five__pointer__five').click(function () {
            $('#five__pointer__five').modal('show');
        });
        $('.five__pointer__green').click(function () {
            $('#five__pointer__green').modal('show');
        });
        $('.five__pointer__red').click(function () {
            $('#five__pointer__red').modal('show');
        });
        $('.five__pointer__blue').click(function () {
            $('#five__pointer__blue').modal('show');
        });
        $('.five__pointer__car').click(function () {
            $('#five__pointer__car').modal('show');
        });
    </script>
@endpush