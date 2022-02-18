@extends('layouts.base')

@section('content')
    <div id="main-booth">
        <div class="container">
            <div class="p-4 mx-auto text-center">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">เครือข่ายการประกันคุณภาพและการใช้วัคซีน</a>
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
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="{{asset('images/booth/baiya.png')}}" alt="" class="img-fluid p-4">
                    <p class="fw-bold text-center">บริษัท ใบยา ไฟโตฟาร์ม จำกัด </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img src="{{asset('images/booth/baiya.png')}}" alt="" class="img-fluid p-4">
                    <p class="fw-bold text-center">บริษัท ใบยา ไฟโตฟาร์ม จำกัด </p>
                </div>
            </div>
            @endfor
        </div>
    </div>
@endsection
