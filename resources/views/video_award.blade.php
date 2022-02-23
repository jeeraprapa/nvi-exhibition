@extends('layouts.base')

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

                           <div class="prize-1-group" onclick="youtube1()">
                               <img src="{{asset('images/video/video-1.png')}}" alt="" class="img-fluid img-prize1">
                               <div class="video-partial position-absolute">
                                   <img src="{{asset('images/video/video1-1.png')}}" alt="" class="img-fluid img-prize1-video">
                               </div>
                           </div>

                       </div>
                   </div>
               </div>
               <div class="row position-relative" id="prize-2-3">
                   <div class="col-12 col-lg-6 d-flex justify-content-md-center justify-content-lg-end pb-4">
                       <div onclick="youtube2()">
                            <img src="{{asset('images/video/video2.png')}}" alt="" class="img-fluid img-prize2">
                       </div>
                   </div>
                   <div class="col-12 col-lg-6 d-flex justify-content-md-center justify-content-lg-start pb-4">
                       <div onclick="youtube3()">
                        <img src="{{asset('images/video/video3.png')}}" alt="" class="img-fluid img-prize3">
                       </div>
                   </div>
               </div>
           </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="youtube1" tabindex="-1" aria-labelledby="youtube1Label" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="videoWrapper">
                        <div id="player1" class="position-absolute"></div>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-link w-auto mx-auto px-2" data-bs-dismiss="modal" aria-label="Close" id="closeModal">
                            ปิด
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="youtube2" tabindex="-1" aria-labelledby="youtube3Label" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="videoWrapper">
                        <div id="player2" class="position-absolute"></div>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-link w-auto mx-auto px-2" data-bs-dismiss="modal" aria-label="Close" id="closeModal">
                            ปิด
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="youtube3" tabindex="-1" aria-labelledby="youtube3Label" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="videoWrapper">
                        <div id="player3" class="position-absolute"></div>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-link w-auto mx-auto px-2" data-bs-dismiss="modal" aria-label="Close" id="closeModal">
                            ปิด
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script>
        function youtube1(){
            $('#youtube1').modal('show');
        }
        function youtube2(){
            $('#youtube2').modal('show');
        }
        function youtube3(){
            $('#youtube3').modal('show');
        }
    </script>
    <script>
        // load  api
        var tag = document.createElement('script');
        tag.src = "//www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // make player array
        var players = new Array();

        function onYouTubeIframeAPIReady() {
            players[0] = new YT.Player('player1', {
                height: '100%',
                width: '100%',
                videoId: 'zrHHFOzoHyI'
            });
            players[1] = new YT.Player('player2', {
                height: '100%',
                width: '100%',
                videoId: '4MdnIHUvqnw'
            });
            players[2] = new YT.Player('player3', {
                height: '100%',
                width: '100%',
                videoId: 'YhNxzZgNLYA'
            });
        }

        $('#closeModal').click( function() {
            //loop players array to stop them all
            $(players).each(function(i){
                this.stopVideo();
            });
        });


    </script>
@endpush
