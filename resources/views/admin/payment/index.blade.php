@extends('layouts.admin')
@section('content')
    <div class="content-wrapper mt-3">
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach ($payments as $payment)
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td>{{ $payment->name }}</td>
                                        <td>{{ $payment->phone }}</td>
                                        <td>{{ $payment->price }}</td>
                                        <td>{{ $payment->photo->title }}</td>
                                        <td>
                                            <form action="{{ route('deletpayment', ['id' => $payment->id]) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger">{{ __('messages.delet') }}</button>
                                            </form>
                                        </td>
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
    </div>
@endsection
