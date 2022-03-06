@extends('layouts.base')

@push('css')
    <link href="{{asset('vendor/lightgallery/dist/css/lightgallery.css')}}" rel="stylesheet">
@endpush

@section('content')

    <div id="video-award" class="w-100 p-4 p-lg-0">
        <header class="w-100">
            <div class="d-flex justify-content-lg-center">
                <h1 class="fw-bold text-center text-xl-start mb-2">
                    <span class="small d-block">
                    การประกวดสื่อประชาสัมพันธ์เพื่อสร้างความตระหนักรู้ด้านวัคซีน
                    </span>
                    วัคซีน : เครื่องมือต้านการระบาดของโรคติดเชื้ออุบัติใหม่
                </h1>
            </div>
        </header>
        <div id="videos">
           <div class="container">
               <div class="row">
                   <div class="col-12 text-center">
                       <div id="prize-1" class="position-relative">
{{--                           https://youtu.be/YhNxzZgNLYA--}}
{{--                           https://youtu.be/4MdnIHUvqnw--}}
{{--                           https://youtu.be/zrHHFOzoHyI--}}

                           <div class="prize-1-group" data-src="https://youtu.be/zrHHFOzoHyI">
                               <img src="{{asset('images/video/video-1.png')}}" alt="" class="img-fluid img-prize1">
                               <div class="video-partial position-absolute">
                                   <img src="{{asset('images/video/video1-1.png')}}" alt="" class="img-fluid img-prize1-video">
                               </div>
                           </div>

                       </div>
                   </div>
               </div>
               <div class="row position-relative" id="prize-2-3">
                   <div class="col-12 col-lg-6 d-flex justify-content-md-center justify-content-lg-end pb-4" id="prize-2">
                       <div data-src="https://youtu.be/4MdnIHUvqnw">
                            <img src="{{asset('images/video/video2.png')}}" alt="" class="img-fluid img-prize2">
                       </div>
                   </div>
                   <div class="col-12 col-lg-6 d-flex justify-content-md-center justify-content-lg-start pb-4" id="prize-3">
                       <div data-src="https://youtu.be/YhNxzZgNLYA">
                        <img src="{{asset('images/video/video3.png')}}" alt="" class="img-fluid img-prize3">
                       </div>
                   </div>
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
            lightGallery(document.getElementById('prize-1'));
            lightGallery(document.getElementById('prize-2'));
            lightGallery(document.getElementById('prize-3'));
        });
    </script>
@endpush
