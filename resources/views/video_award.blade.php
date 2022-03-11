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
           <div class="container cursor-pointer" data-toggle="modal" data-target="#popup-video">
               <div class="row">
                   <div class="col-12 text-center">
                       <div id="prize-1" class="position-relative">
                           <div class="prize-1-group">
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
                       <div>
                            <img src="{{asset('images/video/video2.png')}}" alt="" class="img-fluid img-prize2">
                       </div>
                   </div>
                   <div class="col-12 col-lg-6 d-flex justify-content-md-center justify-content-lg-start pb-4">
                       <div>
                        <img src="{{asset('images/video/video3.png')}}" alt="" class="img-fluid img-prize3">
                       </div>
                   </div>
               </div>
           </div>
        </div>
    </div>
    {{--                           https://youtu.be/zrHHFOzoHyI--}}
    {{--                           https://youtu.be/4MdnIHUvqnw--}}
    {{--                           https://youtu.be/YhNxzZgNLYA--}}
    <div class="modal fade" tabindex="-1" role="dialog"  aria-labelledby="popup-video" id="popup-video">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="p-3">
                        <h1>
                            การประกวดสื่อประชาสัมพันธ์เพื่อสร้างความตระหนักรู้ด้านวัคซีน ในหัวข้อ “วัคซีน: เครื่องมือต้านการระบาดของโรคติดเชื้ออุบัติใหม่”
                        </h1>
                        <div class="content pb-3">
                            สถาบันวัคซีนแห่งชาติ ในฐานะหน่วยงานกลางด้านวัคซีน เล็งเห็นความสำคัญของการสื่อสาร เพื่อให้ประชาชนเข้าใจถึงการวิจัยพัฒนา และการผลิตวัคซีนสำหรับการตอบโต้การระบาดของโรคอุบัติใหม่ในภาวะฉุกเฉิน จึงได้จัดทำโครงการประกวดสื่อประชาสัมพันธ์ (คลิปวิดีโอไวรัล) เพื่อเปิดโอกาสให้ผู้สนใจ ได้มีส่วนร่วมในการสร้างสรรค์ผลงาน โดยคาดหวังให้ประชาชนได้เข้าใจถึงความสำคัญของการพึ่งตนเองด้านวัคซีน ซึ่งส่งผลต่อความมั่นคงด้านสุขภาพ
                        </div>
                        <div class="content pb-3">
                            โดยการประกวด แบ่งเป็น 2 ประเภท ได้แก่
                        </div>
                        <ul>
                            <li><strong>ประเภทที่ 1</strong> ระดับอุดมศึกษาหรือประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.) - ไม่มีผู้ได้รับรางวัล</li>
                            <li><strong>ประเภทที่ 2</strong> ระดับประชาชนทั่วไป</li>
                        </ul>
                        <div class="content w-100 text-center pb-3">
                            <strong>รางวัลรองชนะเลิศ อันดับ 1 </strong><br>
                            <iframe width="100%" height="315"
                                    src="https://www.youtube.com/embed/zrHHFOzoHyI"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div class="content w-100 text-center pb-3">
                            <strong>รางวัลรองชนะเลิศ อันดับ 2 </strong><br>
                            <iframe width="100%" height="315"
                                    src="https://www.youtube.com/embed/4MdnIHUvqnw"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div class="content w-100 text-center pb-3">
                            <strong>รางวัลชมเชย</strong><br>
                            <iframe width="100%" height="315"
                                    src="https://www.youtube.com/embed/YhNxzZgNLYA"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
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

{{--@push('js')--}}
{{--    <script src="{{asset('vendor/lightgallery/js/lightgallery.js')}}"></script>--}}
{{--    <script src="{{asset('vendor/lightgallery/js/lg-fullscreen.js')}}"></script>--}}
{{--    <script src="{{asset('vendor/lightgallery/js/lg-video.js')}}"></script>--}}

{{--    <script>--}}
{{--        $(document).ready(function (){--}}
{{--            lightGallery(document.getElementById('prize-1'));--}}
{{--            lightGallery(document.getElementById('prize-2'));--}}
{{--            lightGallery(document.getElementById('prize-3'));--}}
{{--        });--}}
{{--    </script>--}}
{{--@endpush--}}
