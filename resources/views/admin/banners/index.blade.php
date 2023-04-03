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
                    <li class="active"><a href="{{ route('admin.banners.index') }}">Banners</a> </li>
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
                    <a href="{{ route('admin.banners.create')  }}" class="btn btn-light"><i class="icon-plus"></i>Add Banner</a>
                    <a class="btn btn-light"><i class="icon-plus"></i>Export to csv</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created at</th>
                            <th>Image</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                        @foreach($banners as $banner)
                        <tr>
                            <td>{{$banner->name}}</td>
                            <td>{{$banner->description}}</td>
                            <td>{{$banner->created_at}}</td>
                            <td>{{$banner->image}}</td>
                            @if($banner->is_active)
                            <td><span class="badge badge-pill badge-primary">Active</span></td>
                            @else
                                <td><span class="badge badge-pill badge-danger">Not active</span></td>
                            @endif
                            <td> <a class="ml-2" href="{{ route('admin.banners.update.view', ['banner' => $banner->id]) }}" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a>
                                <a class="ml-2" href="{{ route('admin.banners.delete', ['banner' => $banner->id]) }}" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>
                            </td>
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
