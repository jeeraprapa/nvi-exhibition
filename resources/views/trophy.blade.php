@extends('layouts.base')

@section('content')
    <div id="hall" class="w-100 position-absolute">
        <h1 class="position-absolute text-center p-4 mt-4 w-100 fw-bold" style="
            -webkit-text-stroke: 2px #FFFFFF;
            -webkit-text-fill-color: #243876;
            text-shadow: 0px 0px 15px #FFFFFF;
            top: 30px;color: #243876;
            font-size: 40px;
        ">
            รางวัลผู้ทำคุณประโยชน์ในการพัฒนางานวัคซีน ประจำปี พ.ศ. 2564
        </h1>
        <img src="{{asset('images/hall_bg.png')}}" alt="" class="img-fluid">
    </div>

    <div id="trophy" class="w-100 position-relative" style="margin-top: -30px">
        <img src="{{asset('images/award1.png')}}" alt="" width="w-50">
        <img src="{{asset('images/award2.png')}}" alt="" width="w-50">
    </div>
@endsection
