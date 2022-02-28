@extends('layouts.base')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css" rel="stylesheet">
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
                    <div class="w-75 px-4 content-poster d-flex justify-content-evenly position-absolute start-50 translate-middle-x">
                        @foreach($booth->posters->take(5) as $poster)
                            <div class="poster position-relative" onclick="posterSelectPage({{$loop->index+1}})">
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
                            <div class="row w-100 mt-lg-4 justify-content-end">
                                @foreach($booth->posters->take(3) as $poster)
                                    <div class="col-4 d-flex justify-content-end">
                                        <div class="poster-list d-inline-flex">
                                            <div class="poster position-relative" onclick="posterSelectPage({{$loop->index+1}})">
                                                <div class="position-absolute box-icon-yellow">
                                                    <img src="{{asset('images/booth/icon_yellow.png')}}" class="img-fluid" alt="icon_yellow">
                                                </div>
                                                <img src="{{$poster->file_url}}" class="img-poster img-poster-5 img-fluid" alt="img-poster1_1">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="content-poster-right content-poster d-flex justify-content-center align-content-end">
                            <div class="poster position-relative">
                                <div class="position-absolute box-icon-video">
                                    <img src="{{asset('images/booth/icon-video.png')}}" class="img-fluid" alt="icon_yellow">
                                </div>
                                <a href="{{$booth->youtube}}" target="_blank" class="position-relative">
                                    <img src="{{$booth->youtube_cover_url}}" alt="" class="img-poster img-poster-5 img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="posterModal" tabindex="-1" aria-labelledby="posterModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="splide">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    @foreach($booth->posters as $poster)
                                        <li class="splide__slide text-center">
                                            <img src="{{$poster->file_url}}" alt="0" class="h-100 w-80 img-fluid">
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-link mx-auto px-2" data-bs-dismiss="modal" aria-label="Close">
                                ปิด
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js" defer></script>
    <script>
        $(document).ready(function (){
            var splide = new Splide( '.splide' ,{
                autoHeight: true,
                height    : '80vh',
                type: 'loop'
            });
            splide.mount();
        });

        function posterSelectPage(page){
            setTimeout(function() {
                $(".splide__pagination li:nth-child("+page+") button").trigger('click');
            }, 200);
            $('#posterModal').modal('show');
        }
    </script>
@endpush
