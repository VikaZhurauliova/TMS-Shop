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
                    <li class="active"><a href="{{ route('admin.reviews.index') }}">Reviews</a> </li>
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
                    <a class="btn btn-light"><i class="icon-plus"></i>Export to csv</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Text</th>
                            <th>Product</th>
                            <th>Star Count</th>
                            <th>Created at</th>
                            <th>active</th>
                        </thead>
                        <tbody>
                        @foreach($reviews as $review)
                        <tr>
                            <td>{{$review->user->name}}</td>
                            <td>{{$review->text}}</td>
                            <td>{{$review->product->name}}</td>
                            <td>{{$review->star_count}}</td>
                            <td>{{$review->created_at}}</td>
                            @if($review->is_active)
                            <td><span class="badge badge-pill badge-primary">Active</span></td>
                            @else
                                <td><span class="badge badge-pill badge-danger">Not active</span></td>
                            @endif
                            <td> <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i
                                        class="icon-edit"></i></a>
                                <a class="ml-2" href="{{ route('admin.reviews.delete', ['review' => $review->id]) }}" data-toggle="tooltip" data-original-title="Delete"><i
                                        class="icon-trash-2"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <hr>
                    {!! $reviews->appends(Request::all())->links() !!}
                </div>
            </div>
            <!-- end: DataTable -->
        </div>
    </section>
    <!-- end: Page Content -->


@endsection
