@extends('layout.index')
@section('content')
    <div class="intro-section" style="background-image: url('images/asd.png');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                    <h1>{{__('messages.photos')}}</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum sed
                        quisquam voluptate facilis non.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">

            <div class="row">
                @foreach ($photos as $photo)
                <div class="col-md-6 col-lg-4 mb-4">
                  <div class="service-39381">
                      <img src="{{ asset('/storage/assets/images/' . $photo->images) }}" alt="{{$photo->title}}" class="img-fluid">

                  </div>
              </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
