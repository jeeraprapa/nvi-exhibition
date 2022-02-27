@extends('layouts.base')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid p-0" id="booth1">
        <div class="background-header">
            @php
                if($previous and $next){
	                $class = "justify-content-between";
                }elseif(empty($previous) and empty($next)){
	                $class = "justify-content-center";
                }elseif(empty($previous)){
	                $class = "justify-content-end";
                }elseif(empty($next)){
	                $class = "justify-content-start";
                }
            @endphp
            <div class="content-header w-100 text-center d-flex py-3">
                @if($previous)
                    <button type="button" class="btn btn-link float-start" >
                        <img src="{{asset('images/booth/icon_left.png')}}" class="" alt="icon_left">
                        <span class="text-link text-center">{{$previous->name}}</span>
                    </button>
                @endif

                <div class="box-title text-center mx-auto">{{$booth->name}}</div>

                @if($next)
                    <button type="button" class="btn btn-link float-end" >
                        <span class="text-link text-center">{{$next->name}}</span>
                        <img src="{{asset('images/booth/icon_right.png')}}" class="" alt="icon_right">
                    </button>
                @endif
            </div>
            <div class="container position-relative">

                @if($booth->booth_detail_image)
                    <img src="{{$booth->booth_detail_image_url}}" class="img-fluid" alt="img-content1">
                @else
                    <img src="{{asset('images/booth/bg_content1.png')}}" class="img-fluid" alt="img-content1">
                @endif

{{--                @if($booth->logo)--}}
{{--                    <div class="position-absolute box_logo_booth">--}}
{{--                        <img src="{{$booth->logo_url}}" class="img-fluid logo_booth" alt="logo_booth">--}}
{{--                    </div>--}}
{{--                @endif--}}
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
