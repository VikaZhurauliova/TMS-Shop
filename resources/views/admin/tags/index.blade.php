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
                    <li><a href="{{route('admin.tags.index')}}">Tags</a> </li>
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
                    <a href="{{ route('admin.tags.create') }}" class="btn btn-light"><i class="icon-plus"></i>Add Tag</a>
                    <a class="btn btn-light"><i class="icon-plus"></i>Export to csv</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Created at</th>
                            <th>active</th>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                        <tr>
                            <td>{{$tag->title}}</td>
                            <td>{{$tag->created_at}}</td>
                            @if($tag->is_active)
                            <td><span class="badge badge-pill badge-primary">Active</span></td>
                            @else
                                <td><span class="badge badge-pill badge-danger">Not active</span></td>
                            @endif
                            <td> <a class="ml-2" href="{{ route('admin.tags.update.view', ['tag' => $tag->id]) }}" data-toggle="tooltip" data-original-title="Edit"><i
                                        class="icon-edit"></i></a>
                                <a class="ml-2" href="{{ route('admin.tags.delete', ['tag' => $tag->id]) }}" data-toggle="tooltip" data-original-title="Delete"><i
                                        class="icon-trash-2"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <hr>
                    {!! $tags->appends(Request::all())->links() !!}
                </div>
            </div>
            <!-- end: DataTable -->
        </div>
    </section>
    <!-- end: Page Content -->


@endsection
