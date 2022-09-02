@extends('layout.index')
@section('content')
    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('images/tashkent2.jpg');">
        <div class="container">
            <div class="row align-items-center text-center border">
                <div class="col-lg-12 mt-5" data-aos="fade-up">
                    <h1>{{__('messages.f21')}}</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <form action="{{ route('store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label>{{ __('messages.name') }}</label>
                        <input type="text" name="name" class="form-control form-control-lg">
                    </div>
                    <div class="col-md-6 form-group">
                        @error('lname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label>{{ __('messages.fml') }}</label>
                        <input type="text" name="lname" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label>{{ __('messages.email') }}</label>
                        <input type="text" name="email" class="form-control form-control-lg">
                    </div>
                    <div class="col-md-6 form-group">
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label>{{ __('messages.phone') }}</label>
                        <input type="text" name="phone" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        @error('text')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label>{{ __('messages.coment') }}</label>
                        <textarea name="text" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary rounded-0 px-3 px-5">{{ __('messages.save') }}</button>
                    </div>
                </div>
            </form>
            <div class="row mt-5">
                <div class="col-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3033.0430990103596!2d68.79167511509218!3d40.518538457365864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b20721cba74397%3A0x4cfa2b4a261b9b4c!2sIT%20Park!5e0!3m2!1sru!2s!4v1655306903365!5m2!1sru!2s"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-mortarboard"></span>
                    <h3>Our Philosphy</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis
                        delectus ea? Dolore, amet reprehenderit.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-school-material"></span>
                    <h3>Academics Principle</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis
                        delectus ea?
                        Dolore, amet reprehenderit.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-library"></span>
                    <h3>Key of Success</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis
                        delectus ea?
                        Dolore, amet reprehenderit.</p>
                </div>
            </div>

        </div>
    </div>
@endsection
