@extends('layouts.base')

@section('content')
    <div id="main-booth">
        <div class="container-lg">
            <div class="py-4 px-lg-4 mx-auto text-center">

                <ul class="nav justify-content-lg-center d-lg-none">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">เครือข่ายการผลิต</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">เครือข่ายการประกันคุณภาพและการใช้วัคซีน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">เครือข่ายการวิจัยพัฒนา</a>
                    </li>
                </ul>

                <ul class="nav justify-content-lg-center d-none d-lg-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="#">เครือข่ายการประกันคุณภาพและการใช้วัคซีน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">เครือข่ายการผลิต</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">เครือข่ายการวิจัยพัฒนา</a>
                    </li>
                </ul>
            </div>
            @for($i=1;$i<6;$i++)
            <div class="row booth">
                <div class="col-md-6 col-sm-12 fadein">
                    <a href="#">
                        <img src="{{asset('images/booth/baiya.png')}}" alt="" class="img-fluid p-4">
                        <p class="fw-bold text-center">บริษัท ใบยา ไฟโตฟาร์ม จำกัด </p>
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 fadein">
                    <a href="#">
                        <img src="{{asset('images/booth/baiya.png')}}" alt="" class="img-fluid p-4">
                        <p class="fw-bold text-center">บริษัท ใบยา ไฟโตฟาร์ม จำกัด </p>
                    </a>
                </div>
            </div>
            @endfor
        </div>
    </div>
@endsection
