@extends('app')
@section('content')

    <!-- Page title -->
    <section id="page-title">
        <div class="container">
            <div class="page-title">
                <h1>Admin panel</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('admin.main') }}">Admin</a> </li>
                    <li class="active"><a href="#">Orders</a> </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <!-- Page Content -->
    <section id="page-content" class="no-sidebar">
        <div class="container">
            <!-- DataTable -->
            <div class="row mb-3">
                <div class="col-lg-6">
{{--                    <a href="{{ route('admin.feedback.export.csv') }}" class="btn btn-light"><i class="icon-plus"></i>Export to csv</a>--}}
{{--                    <a href="{{ route('admin.feedback.export.excel') }}" class="btn btn-light"><i class="icon-plus"></i>Export to excel</a>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>Order number</th>
                            <th>User name</th>
                            <th>User email</th>
                            <th>Address</th>
{{--                            <th>Product name</th>--}}
                            <th>Quantity</th>
                            <th>Created at</th>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order?->first_name}}</td>
                            <td>{{$order?->email}}</td>
                            <td>{{$order->address}}</td>
{{--                            <td>{{$order->products?->name}}</td>--}}
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->created_at}}</td>
{{--                            <td>--}}
{{--                                <a class="ml-2" href="{{ route('admin.feedback.delete', ['feedback' => $feedback->id]) }}" data-toggle="tooltip" data-original-title="Delete"><i--}}
{{--                                        class="icon-trash-2"></i></a>--}}
{{--                            </td>--}}
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end: DataTable -->
        </div>
    </section>
    <!-- end: Page Content -->


@endsection
