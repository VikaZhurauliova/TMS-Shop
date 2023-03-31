@extends('app')
@section('content')

    <!-- Page title -->
    <section id="page-title">
        <div class="container">
            <div class="page-title">
                <h1>New product</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('admin.main')}}">Admin</a> </li>
                    <li><a href="{{route('admin.tags.index')}}">Tags</a> </li>
                    <li><a href="{{ route('admin.tags.create') }}">Create</a> </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Content -->
    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="content col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <span class="h4">Product details</span>
                        </div>
                        <div class="card-body">
                            <form id="form1" class="form-validate" action="{{ route('admin.tags.create') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="username" value="{{ old('name') }}">Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter name" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="gender">Created at</label>
                                        <input class="form-control" type="date" value="{{ old('created_at') }}" name="created_at" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn m-t-30 mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Page Content -->
@endsection
