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
                    <li><a href="{{route('admin.main')}}">Admin</a></li>
                    <li><a href="{{route('admin.products.index')}}">Products</a></li>
                    <li><a href="{{ route('admin.products.create') }}">Update</a></li>
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
                            <span class="h4">Update {{$product->name}}</span>
                        </div>
                        <div class="card-body">
                            <form id="form1" class="form-validate"
                                  action="{{ route('admin.products.update', ['product' => $product->id]) }}"
                                  method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="username">Name</label>
                                        <input type="text" class="form-control" value="{{ $product->name }}" name="name"
                                               placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="short_description">Short description</label>
                                        <input type="text" class="form-control"
                                               value="{{ $product->short_description }}" name="short_description"
                                               placeholder="Enter short description">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="description">Description</label>
                                        <input type="text" class="form-control" value="{{ $product->description }}"
                                               name="description" placeholder="Enter description">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="price">Price</label>
                                        <input type="text" class="form-control" value="{{ $product->price }}"
                                               name="price" placeholder="Enter price">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="sale_price">Sale price</label>
                                        <input type="text" class="form-control" value="{{ $product->sale_price }}"
                                               name="sale_price" placeholder="Enter sale price">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="gender">Category</label>
                                        <select class="form-control" name="category" required>
                                            <option value="">Select category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}"
                                                        @if($product->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="is_active">Status</label>
                                        <select name="is_active" class="form-control">
                                            <option value="1" @if(old('is_active') == 1) selected @endif>Active</option>
                                            <option value="0" @if(old('is_active') == 0) selected @endif>Not active
                                            </option>
                                        </select>
                                    </div>
                                    {{--                                    <div class="form-group col-md-6">--}}
                                    {{--                                        <label for="gender">Tag</label>--}}
                                    {{--                                        <select class="form-control" name="tag" required>--}}
                                    {{--                                            <option value="">Select tag</option>--}}
                                    {{--                                            @foreach($tags as $tag)--}}
                                    {{--                                                <option value="{{ $tag->id }}" @if(old('tag') == $tag->id) selected @endif>{{ $tag->title }}</option>--}}
                                    {{--                                                <option>{{$tag->title}}</option>--}}
                                    {{--                                            @endforeach--}}
                                    {{--                                        </select>--}}
                                    {{--                                    </div>--}}
                                    <div class="form-group">
                                        <label class="form-label w-100">Image</label>
                                        <input type="file" value="{{ $product->image }}" name="image">
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
