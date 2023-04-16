@extends('app')
@section('content')
<!-- Body Inner -->
<div class="body-inner">
    <!-- Page title -->
    <section id="page-title">
        <div class="container">
            <div class="page-title">
                <h1>Checkout</h1>
                <span>Checkout details</span>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('main') }}">Home</a>
                    </li>
                    <li><a href="{{ route('products.index') }}">Shop</a>
                    </li>
                    <li class="active"><a >Checkout</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <!-- SHOP CHECKOUT -->
    <section id="shop-checkout">
        <div class="container">
            <div class="shop-cart">
                <form method="POST" action="{{ route('order.create') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="upper">Additional information</h4>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="sr-only">First Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ $user?->information?->first_name }}">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="sr-only">Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ $user?->information?->last_name }}">
                        </div>
                        <div class="col-lg-12 form-group">
                            <label class="sr-only">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Address" value="">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="sr-only">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $user?->email }}">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="sr-only">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $user?->phone }}">
                        </div>
                        <div class="col-lg-12 form-group">
                            <div class="panel panel-naked">
                                <div class="panel-heading">
                                    <h3>Cart subtotal $</h3>
                                    <button type="submit" class="btn icon-left"><span>Create order</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
    </section>
    <!-- end: SHOP CHECKOUT -->
</div> <!-- end: Body Inner -->

@endsection
