@extends('app')
@section('content')
    <!-- Page title -->
    <section id="page-title">
        <div class="container">
            <div class="page-title">
                <h1>Shop</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('main') }}">Home</a>
                    </li>
                    <li><a href="{{route('products.index')}}">Shop</a>
                    </li>
                    <li class="active"><a href="#">{{$category->name}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <!-- Shop products -->
    <section>
        <div class="container">
            <div class="row m-b-20">
                <div class="col-lg-6 p-t-10 m-b-20">
                    <h3 class="m-b-20"> Spring ’23</h3>
                    <p>Experience the magic of Spring fashion!</p>
                </div>
                <div class="col-lg-3">
                    <div class="order-select">
                        <h6>Sort by</h6>
                        <p>Showing 1&ndash;12 of 25 results</p>
                        <form method="get">
                            <select class="form-control">
                                <option value="order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="order-select">
                        <h6>Sort by Price</h6>
                        <p>From 0 - 190$</p>
                        <form method="get">
                            <select class="form-control">
                                <option value="" selected="selected">0$ - 50$</option>
                                <option value="">51$ - 90$</option>
                                <option value="">91$ - 120$</option>
                                <option value="">121$ - 200$</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <!--Product list-->
            <div class="shop">
                <div class="grid-layout grid-3-columns" data-item="grid-item">
                    @foreach($category->products as $product)
                    <div class="grid-item">
                        <div class="product">
                            <div class="product-image">
                                <a href="{{ route('products.show', ['product' => $product->id]) }}"><img alt="Shop product image!" src="{{$product->image}}">
                                </a>
                                {{--<span class="product-new">NEW</span>--}}
                                <span class="product-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </span>
                            </div>
                            <div class="product-description">
                                <div class="product-category">{{$category->name}}</div>
                                <div class="product-title">
                                    <h3><a href="#">{{$product->name}}</a></h3>
                                </div>
                                <div class="product-price"><ins>{{$product->price}}$</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">6 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <hr>
                {!! $products->appends(Request::all())->links() !!}
            </div>
            <!--End: Product list-->
        </div>
    </section>
    <!-- end: Shop products -->
    <!-- DELIVERY INFO -->
    <section class="background-grey p-t-40 p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-gift"></i></a>
                        </div>
                        <h3>Free shipping on orders $60+</h3>
                        <p>Order more than 60$ and you will get free shippining Worldwide. More info.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-plane"></i></a>
                        </div>
                        <h3>Worldwide delivery</h3>
                        <p>We deliver to the following countries: USA, Canada, Europe, Australia</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-history"></i></a>
                        </div>
                        <h3>60 days money back guranty!</h3>
                        <p>Not happy with our product, feel free to return it, we will refund 100% your money!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: DELIVERY INFO -->
@endsection

