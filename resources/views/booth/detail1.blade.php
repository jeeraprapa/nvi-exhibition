@extends('layouts.base')

@section('content')
    <div class="container-fluid p-0" id="booth1">
        <div class="background-header">
            <div class="content-header justify-content-between py-3">
                <button type="button" class="btn btn-link" > 
                    <img src="/images/booth/icon_left.png" class="" alt="icon_left"> 
                    <span class="text-link">ศูนย์วิจัยวัคซีน จุฬาลงกรณ์มหาวิทยาลัย</span>
                </button>
                <div class="box-title">คณะเภสัชศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย</div>
                <button type="button" class="btn btn-link" >
                    <span class="text-link">คณะเวชศาสตร์เขตร้อน ศูนย์ทดสอบวัคซีน มหาวิทยาลัยมหิดล</span>
                    <img src="/images/booth/icon_right.png" class="" alt="icon_right"> 
                </button>
            </div>
            <div class="container position-relative">

                <img src="/images/booth/bg_content1.png" class="img-fluid" alt="img-content1">
                <div class="position-absolute box_logo_booth">
                    <img src="/images/booth/logo_booth.png" class="img-fluid logo_booth" alt="logo_booth">
                </div> 

                <div class="content-poster d-flex justify-content-around position-absolute start-50 translate-middle-x">
                    <div class="position-relative">
                        <div class="position-absolute box-icon-yellow">
                            <img src="/images/booth/icon_yellow.png" class="img-fluid" alt="icon_yellow">
                        </div>
                        <img src="/images/booth/poster1_1.png" class="img-fluid" alt="img-poster1_1">
                    </div>
                    <div class="position-relative">
                        <div class="position-absolute box-icon-yellow">
                            <img src="/images/booth/icon_yellow.png" class="img-fluid" alt="icon_yellow">
                        </div>
                        <img src="/images/booth/poster1_2.png" class="img-fluid" alt="img-poster1_2">
                    </div>
                    <div class="position-relative">
                        <div class="position-absolute box-icon-yellow">
                            <img src="/images/booth/icon_yellow.png" class="img-fluid" alt="icon_yellow">
                        </div>
                        <img src="/images/booth/poster1_3.png" class="img-fluid" alt="img-poster1_3">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
