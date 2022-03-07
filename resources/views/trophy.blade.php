@extends('layouts.base')

@push('css')
    <link href="{{asset('vendor/lightgallery/dist/css/lightgallery.css')}}" rel="stylesheet">
@endpush

@section('content')
    <div id="hall" class="position-relative px-4">
        <h1 class="w-100 fw-bold">
            รางวัลผู้ทำคุณประโยชน์ในการพัฒนางานวัคซีน ประจำปี พ.ศ. 2564
        </h1>
        <div id="trophy" class="w-100 position-relative d-flex justify-content-lg-end mt-4">
            <div class="row" id="video1">
                <div class="col-12 col-md-6 p-4" data-src="https://www.youtube.com/watch?v=zM6oviXZXNg">
                    <a href="https://www.youtube.com/watch?v=Hx594mjTcpk">
                        <img src="{{asset('images/award1.png')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-12 col-md-6 p-4" data-src="https://youtu.be/Lmc2shWNP-w">
                    <a href="https://youtu.be/oiuyRQBEqGU">
                        <img src="{{asset('images/award2.png')}}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{asset('vendor/lightgallery/js/lightgallery.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/js/lg-fullscreen.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/js/lg-video.js')}}"></script>
    <script>
        $(document).ready(function (){
            lightGallery(document.getElementById('video1'));
        });

    </script>
@endpush
