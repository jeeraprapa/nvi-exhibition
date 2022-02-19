@extends('layouts.base')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid p-0" id="booth1">
        <div class="background-header">
            <div class="content-header justify-content-between d-flex py-3">
                <button type="button" class="btn btn-link" >
                    <img src="/images/booth/icon_left.png" class="" alt="icon_left">
                    <span class="text-link text-center">ศูนย์วิจัยวัคซีน จุฬาลงกรณ์มหาวิทยาลัย</span>
                </button>
                <div class="box-title text-center">คณะเภสัชศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย</div>
                <button type="button" class="btn btn-link" >
                    <span class="text-link text-center">คณะเวชศาสตร์เขตร้อน ศูนย์ทดสอบวัคซีน มหาวิทยาลัยมหิดล</span>
                    <img src="/images/booth/icon_right.png" class="" alt="icon_right">
                </button>
            </div>
            <div class="container position-relative">

                <img src="/images/booth/bg_content1.png" class="img-fluid" alt="img-content1">
                <div class="position-absolute box_logo_booth">
                    <img src="/images/booth/logo_booth.png" class="img-fluid logo_booth" alt="logo_booth">
                </div>

                <div class="content-poster d-flex justify-content-around position-absolute start-50 translate-middle-x">
                    <div class="poster position-relative" onclick="posterSelectPage(1)">
                        <div class="position-absolute box-icon-yellow">
                            <img src="/images/booth/icon_yellow.png" class="img-fluid" alt="icon_yellow">
                        </div>
                        <img src="/images/booth/poster1_1.png" class="img-fluid" alt="img-poster1_1">
                    </div>
                    <div class="poster position-relative" onclick="posterSelectPage(2)">
                        <div class="position-absolute box-icon-yellow">
                            <img src="/images/booth/icon_yellow.png" class="img-fluid" alt="icon_yellow">
                        </div>
                        <img src="/images/booth/poster1_2.png" class="img-fluid" alt="img-poster1_2">
                    </div>
                    <div class="poster position-relative" onclick="posterSelectPage(3)">
                        <div class="position-absolute box-icon-yellow">
                            <img src="/images/booth/icon_yellow.png" class="img-fluid" alt="icon_yellow">
                        </div>
                        <img src="/images/booth/poster1_3.png" class="img-fluid" alt="img-poster1_3">
                    </div>
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
                                    <li class="splide__slide text-center">
                                        <img src="{{asset('images/booth/poster1_1.png')}}" alt="0" class="h-100 w-80 img-fluid">
                                    </li>
                                    <li class="splide__slide text-center">
                                        <img src="{{asset('images/booth/poster1_2.png')}}" alt="1" class="h-100 w-80 img-fluid">
                                    </li>
                                    <li class="splide__slide text-center">
                                        <img src="{{asset('images/booth/poster1_3.png')}}" alt="2" class="h-100 w-80 img-fluid">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-link w-auto mx-auto px-2" data-bs-dismiss="modal" aria-label="Close">
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
