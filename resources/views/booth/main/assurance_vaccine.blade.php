@extends('layouts.base')

@section('content')
    <div id="main-booth">
        <div class="container-lg">
            <div class="py-4 px-lg-4 mx-auto text-center">

                <ul class="nav justify-content-lg-center d-lg-none">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('http::booth.assurance-vaccine')}}">เครือข่ายการประกันคุณภาพและการใช้วัคซีน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('http::booth.production-network')}}">เครือข่ายการผลิต</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('http::booth.research')}}">เครือข่ายการวิจัยพัฒนา</a>
                    </li>
                </ul>

                <ul class="nav justify-content-lg-center d-none d-lg-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('http::booth.production-network')}}">เครือข่ายการผลิต</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('http::booth.assurance-vaccine')}}">เครือข่ายการประกันคุณภาพและการใช้วัคซีน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('http::booth.research')}}">เครือข่ายการวิจัยพัฒนา</a>
                    </li>
                </ul>
            </div>
            <div class="row booth">
                @foreach($booths as $booth)
                    <div class="col-md-6 col-sm-12 fadein">
                        <a href="{{route('http::booth.assurance-vaccine.detail',$booth->id)}}">
                            @if($booth->booth_image_url)
                                <img src="{{$booth->booth_image_url}}" alt="" class="img-fluid p-4">
                            @else
                                <img src="{{asset('images/booth/bg_content3.png')}}" alt="" class="img-fluid p-4">
                            @endif
                            <p class="fw-bold text-center">
                                {{$booth->name}}
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
