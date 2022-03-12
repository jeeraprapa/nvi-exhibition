@extends('layouts.base')

@push('css')
    <link href="{{asset('vendor/lightgallery/dist/css/lightgallery.css')}}" rel="stylesheet">
@endpush

@section('content')
    <div id="hall" class="position-relative px-4">
        <h1 class="w-100 fw-bold">
            รางวัลผู้ทำคุณประโยชน์ในการพัฒนางานด้านวัคซีนของประเทศ
        </h1>
        <div id="trophy" class="w-100 position-relative d-flex justify-content-lg-end mt-4" data-toggle="modal" data-target="#popup-trophy">
            <div class="row cursor-pointer">
                <div class="col-12 col-md-6 p-4">
                    <img src="{{asset('images/award1.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 p-4">
                    <img src="{{asset('images/award2.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog"  aria-labelledby="popup-trophy" id="popup-trophy">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="p-3">
                        <h1>
                            รางวัลผู้ทำคุณประโยชน์ในการพัฒนางานด้านวัคซีนของประเทศ ในการประชุมวิชาการวัคซีนแห่งชาติ ครั้งที่ 10
                        </h1>
                        <div class="content pb-3">
                            สถาบันวัคซีนแห่งชาติ ตระหนักถึงความสำคัญในการพัฒนางานด้านวัคซีนของประเทศ จึงได้คัดเลือกบุคคล คณะบุคคล หรือหน่วยงาน ที่มีส่วนในการขับเคลื่อน ผลักดัน ส่งเสริม และสนับสนุนการพัฒนางานด้านวัคซีนของประเทศเพื่อเข้ารับพระราชทานรางวัล “ผู้ทำคุณประโยชน์ในการพัฒนางานด้านวัคซีนของประเทศ” จากสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี มาตั้งแต่การประชุมวิชาการวัคซีนแห่งชาติ ครั้งที่ 8 ในปี พ.ศ. 2560 โดยในการประชุมครั้งที่ 10 ปี พ.ศ. 2565 นี้ มีหน่วยงานและบุคคลที่ได้รับรางวัล คือ
                        </div>
                        <div class="content w-100 text-center pb-3">
                            <strong>สถานเสาวภา สภากาชาดไทย</strong><br>
                            <div id="yt1"></div>
                        </div>
                        <div class="content w-100 text-center pb-3">
                            <strong>สถานเสาวภา สภากาชาดไทย</strong><br>
                            <div id="yt2"></div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary btn__close" data-dismiss="modal">ปิด
                                <i class="fa fa-times" style="font-size: 19px; font-weight: 100;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
<script>
    var yt1;
    var yt2;

    function loadScript() {
        if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        }
    }

    function onYouTubeIframeAPIReady() {
        window.onYouTubePlayerAPIReady = function() {
            yt1 = new YT.Player('yt1', {
                height: '390',
                width: '100%',
                videoId: 'zM6oviXZXNg'
            });
            yt2 = new YT.Player('yt2', {
                height: '390',
                width: '100%',
                videoId: 'Lmc2shWNP-w'
            });
        };
    }

    $(function () {
        loadScript();
        onYouTubeIframeAPIReady();
    });

    $("#popup-trophy").on("hidden.bs.modal", function () {
            yt1.stopVideo();
            yt2.stopVideo();
    });
</script>
@endpush
