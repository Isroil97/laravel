@extends('layout.index')
@section('content')
    <div class="intro-section" style="background-image: url('images/hero_2.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                    <h1>{{__('messages.about')}}</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum sed
                        quisquam voluptate facilis non.</p>
                    <p><a href="{{route('contact')}}" class="btn btn-primary py-3 px-5">{{__('messages.contact')}}</a></p>
                </div>
            </div>
        </div>
    </div>



    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/hero_2.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <span class="text-serif text-primary">{{__('messages.about')}}</span>
                    <h3 class="heading-92913 text-black">{{__('messages.f5')}}</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, illum, quasi. Odit velit deserunt
                        eligendi unde, enim. Enim fugiat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eius ullam impedit architecto
                        debitis facilis!</p>
                    <p><a href="{{route('service')}}" class="btn btn-primary py-3 px-4">{{__('messages.f6')}}</a></p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-image overlay" style="background-image: url('images/zomin.jpg');">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="counter-39392">
                        <h3>349</h3>
                        <span>{{__('messages.f10')}}</span>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-39392">
                        <h3>7000+</h3>
                        <span>{{__('messages.f11')}}</span>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-39392">
                        <h3>120</h3>
                        <span>{{__('messages.f12')}}</span>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-39392">
                        <h3>493</h3>
                        <span>{{__('messages.f13')}}</span>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-39392">
                        <h3>230</h3>
                        <span>{{__('messages.f14')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="text-serif text-primary">{{__('messages.f18')}}</span>
                    <h3 class="heading-92913 text-black text-center">{{__('messages.f19')}}</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($workers as $workers)
                <div class="col-lg-3 col-md-6 mb-lg-0">
                    <div class="person">
                        <figure>
                            <img src="{{ asset('/storage/assets/user_img/' . $workers->images) }}" alt="Image" class="img-fluid">
                            <div class="social">
                                <a href="{{$workers->facebook}}"><span class="icon-facebook"></span></a>
                                <a href="{{$workers->twitter}}"><span class="icon-twitter"></span></a>
                                <a href="{{$workers->instagram}}"><span class="icon-linkedin"></span></a>
                            </div>
                        </figure>
                        <div class="person-contents">
                            <h3>{{$workers->name}}</h3>
                            <span class="position">{{$workers->info}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>



    <div class="site-section bg-image overlay" style="background-image: url('images/hero_2.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="text-white">{{__('messages.f17')}}</h2>
                    <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p class="mb-0"><a href="{{route('contact')}}" class="btn btn-warning py-3 px-5 text-white">{{__('messages.contact')}}</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
