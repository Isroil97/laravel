@extends('layout.index')
@section('content')
    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('/images/hero_1.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-8 mt-5" data-aos="fade-up">
                    <h1>Hoziroq Joyingizni Band Qiling!</h1>
                    <p class="text-white text-center">
                        September 20, 2019 by <a href="#">Admin</a>
                    </p>
                </div>
            </div>
        </div>
    </div>



    <section class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-content">
                    <h2 class="heading-92913 text-black ">{{ $photo->title }}</h2>
                    <img src="{{ asset('/storage/assets/images/' . $photo->images) }}" alt="P{{ $photo->title }}"
                        class="img-fluid">
                    <p class="my-3">{{ $photo->info }}</p>


                    <iframe src="{{ $photo->maps }}" width="100%" height="400" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-md-4 sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-searchbox">
                            <h3 class="heading-92913 text-black">Turni Sotib Oling</h3>
                            <br>
                            <form class="my-3" action="{{ route('payment') }}" method="post">
                                @csrf
                                <div class="input-box">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input type="text" name="name" class="form-control" placeholder="Ism">
                                    </div>
                                </div>
                                <br>
                                <div class="input-box">
                                    @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">

                                        <span class="la la-phone form-icon"></span>
                                        <input type="text" class="form-control" name="phone"
                                            placeholder="Telefon Raqam">
                                    </div>
                                </div>
                                <br>
                                <div class="input-box">
                                    @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <span class="la la-money form-icon"></span>
                                        <input type="text" class="form-control" name="price" placeholder="Summa">
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" name="photo_id" value="{{ $photo->id }}">
                                <div class="btn-box">
                                    <button type="submit" class="btn btn-danger"><img
                                            src="https://www.pearltour.uz/front/payme.png" width="50px" height="40px">
                                        To'lov Qilish</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
