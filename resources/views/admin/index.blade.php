@extends('layouts.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('messages.photos') }}</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="filter-container p-0 row">
                                        @foreach ($photos as $photo)
                                            <div class="filtr-item col-sm-2 mt-2 mb-2 " data-category="1"
                                                data-sort="white sample">
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
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">{{ __('messages.payment_table') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Price</th>
                                            <th>Davlat Nomi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($payment as $payment)
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td>{{ $payment->name }}</td>
                                                <td>{{ $payment->phone }}</td>
                                                <td>{{ $payment->price }}</td>
                                                <td>{{ $photo->title }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">{{ __('messages.contact__table') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Ismi</th>
                                            <th>Familya</th>
                                            <th>Email</th>
                                            <th>Telifon</th>
                                            <th>Messages</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($contacts as $contact)
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td>{{ $contact->name }}</td>
                                                <td>{{ $contact->lname }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->phone }}</td>
                                                <td>{{ $contact->text }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>


                <div class="container p-3">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('messages.f24') }}</h4>
                        </div>
                        <div class="card-body">
                        <div class="row">
                                @foreach ($workers as $workers)
                                    <div class="col-4">
                                        <div class="card">
                                            <img src="{{ asset('/storage/assets/user_img/' . $workers->images) }}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $workers->name }}</h5>
                                                <p class="card-text">{{ $workers->info }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
