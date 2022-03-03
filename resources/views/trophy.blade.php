@extends('layouts.base')

@section('content')
    <div id="hall" class="position-relative px-4">
        <h1 class="w-100 fw-bold">
            รางวัลผู้ทำคุณประโยชน์ในการพัฒนางานวัคซีน ประจำปี พ.ศ. 2564
        </h1>
        <div id="trophy" class="w-100 position-relative d-flex justify-content-lg-end mt-4">
            <div class="row">
                <div class="col-12 col-md-6 p-4">
                    <img src="{{asset('images/award1.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 p-4">
                    <img src="{{asset('images/award2.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection
