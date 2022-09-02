@extends('layout.index')
@section('content')
    <div class="intro-section" style="background-image: url('images/asd.png');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                    <h1>{{__('messages.blog')}}</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum sed
                        quisquam voluptate facilis non.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="text-serif text-primary">{{__('messages.f2')}}</span>
                    <h3 class="heading-92913 text-black text-center">{{__('messages.f2')}}</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($photos as $photo)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="service-39381">
                            <a href="{{route('showblog', ['id' => $photo->id])}}">
                                <img src="{{ asset('/storage/assets/images/' . $photo->images) }}" alt="{{$photo->title}}" class="img-fluid">
                            </a>
                            <div class="p-4">
                                <h3><a href="#"><span class="icon-room mr-1 text-primary"></span>{{$photo->title}}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
