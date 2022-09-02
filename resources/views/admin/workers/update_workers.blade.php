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
                                <h3 class="card-title">{{ __('messages.f26') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form  action="{{ route('update_workers',['id'=>$workers->id]) }}" enctype="multipart/form-data" method="post">
                                @method('put')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>{{ __('messages.name') }}</label>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" name="name" class="form-control" value="{{$workers->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('messages.info') }}</label>
                                        @error('info')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" name="info" class="form-control" value="{{$workers->info}}">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('messages.facebook') }}</label>
                                        @error('facebook')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" name="facebook" class="form-control" value="{{$workers->facebook}}">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('messages.twitter') }}</label>
                                        @error('twitter')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" name="twitter" class="form-control" value="{{$workers->twitter}}">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('messages.instagram') }}</label>
                                        @error('instagram')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" name="instagram" class="form-control" value="{{$workers->instagram}}">
                                    </div>
                                   <div class="form-group w-25">
                                    <img src="{{ asset('/storage/assets/user_img/' . $workers->images) }}" class="card-img-top" alt="...">
                                   </div>
                                    <div class="form-group">
                                        <label>{{ __('messages.file_photo') }}</label>
                                        @error('images')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="images" class="custom-file-input">
                                                <label class="custom-file-label">Images</label>
                                            </div>
                                        </div>
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
