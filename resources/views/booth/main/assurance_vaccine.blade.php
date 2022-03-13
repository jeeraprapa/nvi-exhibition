@extends('layouts.base',['title'=>'เครือข่ายการประกันคุณภาพและการใช้วัคซีน'])

@section('content')
    <div id="main-booth" class="booth3">
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
                        <a class="nav-link" href="{{route('http::booth.research')}}">เครือข่ายการวิจัยพัฒนา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('http::booth.production-network')}}">เครือข่ายการผลิต</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('http::booth.assurance-vaccine')}}">เครือข่ายการประกันคุณภาพและการใช้วัคซีน</a>
                    </li>
                </ul>
            </div>
            @include('booth.main._item',['type'=>'assurance-vaccine'])
        </div>
    </div>
@endsection
