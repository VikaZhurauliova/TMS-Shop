@extends('app')
@section('content')
    <!-- Page title -->
    <section class="fullscreen" data-bg-parallax="{{asset('images/banner/2.jpg')}}">
        <div class="container container-fullscreen">
            <div class="text-middle text-center">
                <h1 class="text-uppercase text-lg text-light" data-animate="fadeInUp">Spring '23</h1>
                <p class="lead text-light " data-animate="fadeInUp" data-animate-delay="600">new collection</p>
                <span data-animate="fadeInUp" data-animate-delay="900">
                        <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923" class="btn">Show now</a>
                    </span>
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <!-- Shop products -->
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <!-- Content-->
                <div class="content col-lg-9">
                    <div class="row m-b-20">
                        <div class="col-lg-6 p-t-10 m-b-20">
                            <h3 class="m-b-20">Trousers</h3>
                            <p>This season, cargo pants are experiencing a fashionable comeback, and everything is in trend.</p>
                        </div>
                        <div class="col-lg-3">
                            <div class="order-select">
                                <h6>Sort by</h6>
                                <p>Showing 1&ndash;12 of 25 results</p>
                                <form method="get">
                                    <select class="form-control">
                                        <option selected="selected" value="order">Default sorting</option>
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
                                        <option selected="selected" value="">0$ - 50$</option>
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
                            @foreach($products as $product)
                            <div class="grid-item">
                                <div class="product">
                                    <div class="product-image">
                                        <a href="#"><img alt="Shop product image!" src="{{$product->image}}">
                                        </a>
                                        <span class="product-wishlist">
                                                <a href="#"><i class="fa  fa-heart"></i></a>
                                            </span>
                                        <div class="product-overlay">
                                            <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <div class="product-category">{{$product->category->name}}</div>
                                        <div class="product-title">
                                            <h3><a href="#">{{$product->name}}</a></h3>
                                        </div>
                                        <div class="product-price"><ins>${{$product->price}}</ins>
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
                        <!-- Pagination -->
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                        <!-- end: Pagination -->
                    </div>
                    <!--End: Product list-->
                </div>
                <!-- end: Content-->
                <!-- Sidebar-->
                <div class="sidebar col-lg-3">
                    <!--widget newsletter-->
                    <div class="widget clearfix widget-archive">
                        <h4 class="widget-title">Product categories</h4>
                        <ul class="list list-lines">
                            @foreach($category as $categories)
                                <li><a href="#">{{$categories->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget clearfix widget-shop">
                        <h4 class="widget-title">Latest Product</h4>
                        @foreach($latestProducts as $latestProduct)
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img src="{{$latestProduct->image}}" alt="Shop product image!">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">{{$latestProduct->category->name}}</div>
                                <div class="product-title">
                                    <h3><a href="#">{{$latestProduct->name}}</a></h3>
                                </div>
                                <div class="product-price"><del>${{$latestProduct->price}}</del><ins>$15.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                            @endforeach

                    </div>
                    <div class="widget clearfix widget-tags">
                        <h4 class="widget-title">Tags</h4>
                        <div class="tags">
                            <a href="#">Design</a>
                            <a href="#">Portfolio</a>
                            <a href="#">Digital</a>
                            <a href="#">Branding</a>
                            <a href="#">HTML</a>
                            <a href="#">Clean</a>
                            <a href="#">Peace</a>
                            <a href="#">Love</a>
                            <a href="#">CSS3</a>
                            <a href="#">jQuery</a>
                        </div>
                    </div>
                </div>
                <!-- end: Sidebar-->
            </div>
        </div>
    </section>
    <!-- end: Shop products -->
    <!-- DELIVERY INFO -->
    <section class="background-grey p-t-40 p-b-0">
        <div class="container">
            <div class="row">
                @foreach($deliveries as $delivery)
                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-gift"></i></a>
                        </div>
                        <h3>{{$delivery->title}}</h3>
                        <p>{{$delivery->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end: DELIVERY INFO -->
@endsection
