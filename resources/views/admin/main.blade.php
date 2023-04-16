@extends('app')
@section('content')

    <!-- Page Content -->
    <section id="page-content">
        <div class="container">
            <div class="row">
                <!-- content -->
                <div class="content col-lg-9">

                    <div class="line"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Admin Panel</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="p-cb cb-text">
                                <div class="cb-title"><a href="{{route('admin.products.index')}}">Products</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-cb cb-text">
                                <div class="cb-title"><a href="{{ route('admin.banners.index') }}">Banners</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-cb cb-text">
                                <div class="cb-title"><a href="{{ route('admin.feedback.index') }}">Feedback</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-cb cb-text">
                                <div class="cb-title"><a href="{{ route('admin.deliveries.index')  }}">Delivery</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-cb cb-text">
                                <div class="cb-title"><a href="{{ route('admin.reviews.index') }}">Reviews</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-cb cb-text">
                                <div class="cb-title"><a href="{{ route('admin.tags.index') }}">Tags</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-cb cb-text">
                                <div class="cb-title"><a href="{{ route('admin.users.index') }}">Users</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-cb cb-text">
                                <div class="cb-title"><a href="{{ route('admin.orders.index') }}">Orders</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: content -->
            </div>
        </div>
    </section>
    <!-- end: Page Content -->
@endsection
