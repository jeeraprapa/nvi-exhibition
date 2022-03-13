@extends('layouts.base',['title'=>$booth->name])

@push('css')
    <link href="{{asset('vendor/lightgallery/dist/css/lightgallery.css')}}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid p-0" id="booth3">
        <div class="background-header">
            <div class="content-header w-100 text-center d-flex py-3">
                @if($previous)
                    <a href="{{route('http::booth.assurance-vaccine.detail',$previous->getKey())}}" type="button" class="btn btn-link float-start" >
                        <img src="{{asset('images/booth/icon_left.png')}}" class="" alt="icon_left">
                        <span class="text-link text-center p-2"> {{$previous->name}}</span>
                    </a>
                @endif

                <div class="box-title text-center mx-auto">{{$booth->name}}</div>

                    @if($next)
                        <a href="{{route('http::booth.assurance-vaccine.detail',$next->getKey())}}" type="button" class="btn btn-link float-end" >
                            <span class="text-link text-center p-2">{{$next->name}} </span>
                            <img src="{{asset('images/booth/icon_right.png')}}" class="" alt="icon_right">
                        </a>
                    @endif
            </div>
            <div class="container position-relative">

                @if($booth->booth_detail_image)
                    <img src="{{$booth->booth_detail_image_url}}" class="img-fluid" alt="img-content1">
                @else
                    <img src="{{asset('images/booth/bg_content2.png')}}" class="img-fluid" alt="img-content1">
                @endif

                @if(empty($booth->youtube))
                    <div class="w-75 px-4 content-poster d-flex justify-content-evenly position-absolute start-50 translate-middle-x" id="lightgallery">
                        @foreach($booth->posters->take(5) as $poster)
                            <div class="poster position-relative" data-src="{{$poster->file_url}}">
                                <div class="position-absolute box-icon-yellow">
                                    <img src="{{asset('images/booth/icon_yellow.png')}}" class="img-fluid" alt="icon_yellow">
                                </div>
                                <img src="{{$poster->file_url}}" class="img-poster img-fluid" alt="img-poster1_1">
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="booth-theater position-absolute w-100 top-35 start-0 d-flex">
                            <div class="content-poster-left content-poster d-flex justify-content-end">
                                <div class="row w-100 justify-content-end" id="lightgallery">
                                    @foreach($booth->posters as $poster)
                                        @if($loop->index <3)
                                            <div class="col-4 d-flex justify-content-end" data-src="{{$poster->file_url}}">
                                                <div class="poster-list d-inline-flex">
                                                    <div class="poster position-relative">
                                                        <div class="position-absolute box-icon-yellow">
                                                            <img src="{{asset('images/booth/icon_yellow.png')}}" class="img-fluid" alt="icon_yellow">
                                                        </div>
                                                        <img src="{{$poster->file_url}}" class="img-poster img-poster-5 img-fluid" alt="img-poster1_1">
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="d-none" data-src="{{$poster->file_url}}"></div>
                                        @endif

                                    @endforeach
                                </div>
                            </div>
                            <div class="content-poster-right content-poster d-flex justify-content-center align-content-end">
                                <div class="poster position-relative">
                                    <div class="position-absolute box-icon-video">
                                        <img src="{{asset('images/booth/icon-video.png')}}" class="img-fluid" alt="icon_yellow">
                                    </div>
                                    <a class="position-relative" id="video">
                                        <img src="{{$booth->youtube_cover_url}}" alt="" class="img-poster img-poster-5 img-fluid"  data-src="{{$booth->youtube}}" >
                                    </a>
                                </div>
                            </div>
                    </div>
                @endif

            </div>
        </div>

    </div>
@endsection

@push('js')
    <script src="{{asset('vendor/lightgallery/js/lightgallery.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/js/lg-fullscreen.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/js/lg-zoom.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/js/lg-rotate.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/js/lg-video.js')}}"></script>
    <script>
        $(document).ready(function (){
            lightGallery(document.getElementById('lightgallery'));
            lightGallery(document.getElementById('video'));
        });
        function showGallery(page){
            $("#lightgallery div:nth-child(" + page+ ")").trigger("click");
        }

    </script>
@endpush
