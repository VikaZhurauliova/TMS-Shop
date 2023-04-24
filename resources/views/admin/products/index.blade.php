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
                    <li><a href="{{route('admin.main')}}">Admin</a> </li>
                    <li><a href="{{route('admin.products.index')}}">Products</a> </li>
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
                    <a href="{{ route('admin.products.create') }}" class="btn btn-light"><i class="icon-plus"></i>Add Product</a>
                    <a href="{{ route('admin.products.export.csv') }}" class="btn btn-light"><i class="icon-plus"></i>Export to csv</a>
                    <a href="{{ route('admin.products.export.excel') }}" class="btn btn-light"><i class="icon-plus"></i>Export to excel</a>
                    <a href="{{ route('admin.products.import.excel') }}" class="btn btn-light"><i class="icon-plus"></i>Import from excel</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Short Description</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Sale</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>image</th>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->short_description}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->sale_price}}</td>
                            <td>{{$product->category?->name}}</td>
                            @if($product->is_active)
                                <td><span class="badge badge-pill badge-primary">Active</span></td>
                            @else
                                <td><span class="badge badge-pill badge-danger">Not active</span></td>
                            @endif
                            <td>{{$product->created_at}}</td>
                            <td>{{$product->image}}</td>
                            <td>
                                <a class="ml-2" href="{{ route('admin.products.update.view', ['product' => $product->id]) }}" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a>
                                <a class="ml-2" href="{{ route('admin.products.delete', ['product' => $product->id]) }}" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>
                           </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <hr>
                    {!! $products->appends(Request::all())->links() !!}
                </div>
            </div>
            <!-- end: DataTable -->
        </div>
    </section>
    <!-- end: Page Content -->


@endsection
