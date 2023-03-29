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
                                <div class="cb-title"><a href="#">Banners</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-cb cb-text">
                                <div class="cb-title"><a href="#">Feedback</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-cb cb-text">
                                <div class="cb-title"><a href="#">Contacts</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-cb cb-text">
                                <div class="cb-title"><a href="#">Deliveries</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-cb cb-text">
                                <div class="cb-title"><a href="#">Reviews</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-cb cb-text">
                                <div class="cb-title"><a href="#">Tags</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-cb cb-text">
                                <div class="cb-title"><a href="#">Users</a></div>
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
