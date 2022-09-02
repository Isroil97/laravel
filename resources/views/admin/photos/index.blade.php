@extends('layouts.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('messages.photos') }}</h4>
                            </div>
                            <div class="filter-container  row">
                                @foreach ($photos as $photo)
                                    <div class="filtr-item col-sm-2 mt-2 mb-2 " data-category="1" data-sort="white sample">
                                        <a href="{{ route('showphoto', ['id' => $photo->id]) }}">
                                            <img src="{{ asset('/storage/assets/images/' . $photo->images) }}"
                                                class="img-fluid mb-2" style="height:100%; cursor: pointer;"
                                                alt="{{ $photo->title }}" />
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection
