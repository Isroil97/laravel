@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <section class="content mt-3">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">{{ __('messages.edit') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{ route('update_photos',['id'=>$photo->id]) }}" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>{{ __('messages.name_photo') }}</label>
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" name="title" class="form-control" value="{{$photo->title}}">
                                    </div>
                                    <div class="form-group">
                                        @error('text')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <label>{{ __('messages.coment') }}</label>
                                        <textarea name="info" cols="30" rows="10" class="form-control" >{{$photo->info}}</textarea>

                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('messages.maps') }}</label>
                                        @error('maps')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" name="maps" class="form-control" value="{{$photo->maps}}">
                                    </div>
                                    <div class="form-group">
                                        <img class="img-fluid w-25" src="{{ asset('/storage/assets/images/' . $photo->images) }}">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">{{ __('messages.save_photo') }}</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
