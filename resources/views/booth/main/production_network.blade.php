@extends('layouts.base')

@section('content')
    <div id="main-booth">
        <div class="container-lg">
            <div class="py-4 px-lg-4 mx-auto text-center">

                <ul class="nav justify-content-lg-center d-lg-none">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('http::booth.research')}}">เครือข่ายการผลิต</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('http::booth.assurance-vaccine')}}">เครือข่ายการประกันคุณภาพและการใช้วัคซีน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('http::booth.research')}}">เครือข่ายการวิจัยพัฒนา</a>
                    </li>
                </ul>

                <ul class="nav justify-content-lg-center d-none d-lg-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('http::booth.assurance-vaccine')}}">เครือข่ายการประกันคุณภาพและการใช้วัคซีน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('http::booth.research')}}">เครือข่ายการผลิต</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('http::booth.research')}}">เครือข่ายการวิจัยพัฒนา</a>
                    </li>
                </ul>
            </div>
            @foreach($booths as $booth)
            <div class="row booth">
                <div class="col-md-6 col-sm-12 fadein">
                    <a href="{{route('http::booth.production-network.detail',$booth->id)}}">
                        <img src="{{asset('images/booth/baiya.png')}}" alt="" class="img-fluid p-4">
                        <p class="fw-bold text-center">
                            {{$booth->name}}
                        </p>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
