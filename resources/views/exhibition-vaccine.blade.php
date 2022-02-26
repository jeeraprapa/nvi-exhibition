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
                    <li class="splide__slide">
                        <img
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
                        <a href="#" class="five__pointer__center">
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
                </ul>
            </div>
        </div>
    </div>
    @include('_modal')
@endsection
@push('js')
    @include('scripts._exhibition')
@endpush