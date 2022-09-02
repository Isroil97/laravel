@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <section class="content mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title">{{ $photo->title }}</h4>
                            </div>
                            <div class="mt-2">
                                 <img src="{{ asset('/storage/assets/images/' . $photo->images) }}" class="img-fluid w-100 mb-2"   alt="{{ $photo->title }}" />
                            </div>
                            <div class="mt-2 p-2">
                                <h4>{{$photo->info}}</h4>
                            </div>
                            <div class="mt-2 p-2">
                              
                                <iframe src="{{$photo->maps}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="mt-2 d-flex justify-content-end align-items-center">
                                <a href="{{ route('edit_photo', ['id' => $photo->id]) }}" class="btn btn-success m-1">{{__('messages.edit')}}</a>
                                <form action="{{ route('deletphoto', ['id'=>$photo->id]) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger">{{__('messages.delet')}}</button>
                                </form>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
{{-- {{ route('edit_photo', ['id' => $photo->id]) }} --}}