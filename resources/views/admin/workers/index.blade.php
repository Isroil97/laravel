@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="container p-3">
            <div class="row">
                @foreach ($workers as $workers)
                <div class="col-4">
                    <div class="card">
                        <img src="{{ asset('/storage/assets/user_img/' . $workers->images) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$workers->name}}</h5>
                            <p class="card-text">{{$workers->info}}</p>
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="{{route('exit_workers', ['id' => $workers->id])}}" class="btn btn-primary mx-2">{{__('messages.edit')}}</a>
                               <form action="{{route('delete_workers', ['id' => $workers->id])}}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">{{__('messages.delet')}}</button>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
