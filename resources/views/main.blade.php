@extends('app')
@section('content')
    <!-- SECTION IMAGE FULLSCREEN -->
    @foreach($banners as $banner)
    <section class="fullscreen" data-bg-parallax="{{$banner->image}}">
        <div class="bg-overlay"></div>
        <div class="container container-fullscreen">
            <div class="text-middle text-center text-light">
                <h2 class="text-lg"><span class="text-rotator">{{$banner->description}}</span><br>{{$banner->name}}</h2>
                <a href="{{route('products.index')}}" class="btn btn-light">Buy now</a>
            </div>
        </div>
    </section>
    @endforeach
    <!-- end: SECTION IMAGE FULLSCREEN -->
@endsection
