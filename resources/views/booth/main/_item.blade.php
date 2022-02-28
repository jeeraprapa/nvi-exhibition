<div class="row booth">
    @foreach($booths as $booth)
        <div class="col-md-6 col-sm-12 scale-up position-relative booth-list">
            <a href="{{route("http::booth.$type.detail",$booth->id)}}">
                @if($booth->booth_image_url)
                    <img src="{{$booth->booth_image_url}}" alt="" class="img-fluid p-4">
                @else
                    <img src="{{asset('images/booth/bg_content2.png')}}" alt="" class="img-fluid">
                @endif
                <p class="fw-bold text-center">
                    {{$booth->name}}
                </p>
                <div class="booth-logo position-absolute">
                    <img src="{{$booth->logo_url}}" alt="" class="img-fluid">
                </div>
            </a>
        </div>
    @endforeach
</div>
