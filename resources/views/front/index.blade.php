@extends('layout.index')
@section('content')
    <div class="hero-slide owl-carousel site-blocks-cover">
        <div class="intro-section" style="background-image: url('images/samarkand.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                        <h1>{{__('messages.f1')}}</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum
                            sed
                            quisquam voluptate facilis non.</p>
                        <p><a href="{{route('blog')}}" class="btn btn-primary py-3 px-5">{{__('messages.f3')}}</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section" style="background-image: url('images/xivabg.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                        <h1>{{__('messages.f2')}}</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum
                            sed
                            quisquam voluptate facilis non.</p>
                        <p><a href="{{route('blog')}}" class="btn btn-primary py-3 px-5">{{__('messages.f3')}}</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-section" style="background-image: url('images/zomin.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                        <h1>{{__('messages.f1')}}</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum
                            sed
                            quisquam voluptate facilis non.</p>
                        <p><a href="{{route('blog')}}" class="btn btn-primary py-3 px-5">{{__('messages.f3')}}</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END slider -->

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/hero_2.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <span class="text-serif text-primary">{{__('messages.f4')}}</span>
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

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="service-29283">
                        <span class="wrap-icon-39293">
                            <span class="flaticon-yacht"></span>
                        </span>
                        <h3>{{__('messages.f7')}}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad ratione quos
                            distinctio unde.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-29283">
                        <span class="wrap-icon-39293">
                            <span class="flaticon-shield"></span>
                        </span>
                        <h3>{{__('messages.f8')}}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad ratione quos
                            distinctio unde.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-29283">
                        <span class="wrap-icon-39293">
                            <span class="flaticon-captain"></span>
                        </span>
                        <h3>{{__('messages.f9')}}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad ratione quos
                            distinctio unde.</p>
                    </div>
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
                                <div class="d-flex">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



  




    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="text-serif text-primary">{{__('messages.f15')}}</span>
                    <h3 class="heading-92913 text-black text-center">{{__('messages.f16')}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
                    <div class="testimony-39291">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque commodi,
                                unde
                                doloribus.</p>
                        </blockquote>
                        <div class="d-flex vcard align-items-center">
                            <div class="pic mr-3">
                                <img src="images/person_3_sq.jpg" alt="Image" class="img-fluid">
                            </div>
                            <div class="text">
                                <strong class="d-block">Isroil Shukrullaev</strong>
                                <span>Programist</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
                    <div class="testimony-39291">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque commodi,
                                unde
                                doloribus.</p>
                        </blockquote>
                        <div class="d-flex vcard align-items-center">
                            <div class="pic mr-3">
                                <img src="images/person_4_sq.jpg" alt="Image" class="img-fluid">
                            </div>
                            <div class="text">
                                <strong class="d-block">Isroil Shukrullaev</strong>
                                <span>Programist</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
                    <div class="testimony-39291">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque commodi,
                                unde
                                doloribus.</p>
                        </blockquote>
                        <div class="d-flex vcard align-items-center">
                            <div class="pic mr-3">
                                <img src="images/person_3_sq.jpg" alt="Image" class="img-fluid">
                            </div>
                            <div class="text">
                                <strong class="d-block">Isroil Shukrullaev</strong>
                                <span>Programist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('images/hero_2.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="text-white">{{__('messages.f17')}}</h2>
                    <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p class="mb-0"><a href="{{ route('contact') }}"
                            class="btn btn-warning py-3 px-5 text-white">{{__('messages.contact')}}</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
