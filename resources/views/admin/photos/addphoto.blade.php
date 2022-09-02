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
                                <h3 class="card-title">{{ __('messages.add_photo') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{ route('store_photos') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>{{ __('messages.name_photo') }}</label>
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        @error('text')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <label>{{ __('messages.coment') }}</label>
                                        <textarea name="info" cols="30" rows="10" class="form-control"></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('messages.maps') }}</label>
                                        @error('maps')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" name="maps" class="form-control">
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
