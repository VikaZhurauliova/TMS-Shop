@extends('app')
@section('content')
    <!-- SHOP PRODUCT PAGE -->
    <section id="product-page" class="product-page p-b-0">
        <div class="container">
            <div class="product">
                <div class="row m-b-40">
                    <div class="col-lg-5">
                        <div class="product-image">
                            <!-- Carousel slider -->
                            <div class="carousel dots-inside dots-dark arrows-visible" data-items="1" data-loop="true"
                                 data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut"
                                 data-autoplay="2500" data-lightbox="gallery">
                                @foreach($product->images as $image)
                                    <a href="{{ $image->id }}" data-lightbox="image" title="Shop product image!"><img
                                            alt="Shop product image!" src="{{ $image->image }}">
                                    </a>
                                @endforeach
                            </div>
                            <!-- Carousel slider -->
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-description">
                            <div class="product-category">{{ $product->category?->name }}</div>
                            <div class="product-title">
                                <h3><a href="#">{{ $product->name }}</a></h3>
                            </div>
                            <div class="product-price">
                                <ins>${{ $product->price }}</ins>
                            </div>
                            <div class="product-rate">
                                @for($i = 0; $i < $product->averageReviews(); $i++)
                                    <i class="fa fa-star"></i>
                                @endfor
                            </div>
                            <div class="product-reviews"><a href="#">{{ count($product->reviews) }} customer reviews</a>
                            </div>
                            <div class="seperator m-b-10"></div>
                            <p>{{$product->short_description}}</p>
                            <div class="product-meta">
                                {{--                                @foreach($product->tag as $tags)
                                                                <p>Tags: <a href="#" rel="tag">{{$tags->title}}</a>, <a rel="tag" href="#">T-shirts</a>
                                                                </p>
                                                                    @endforeach--}}
                            </div>
                            <div class="seperator m-t-20 m-b-10"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <h6>Select the size</h6>
                                <ul class="product-size">
                                    <li>
                                        <label>
                                            <input type="radio" checked="checked" value="option1"
                                                   name="product-size"><span>xs</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" checked="checked" value="option1"
                                                   name="product-size"><span>s</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" checked="checked" value="option1"
                                                   name="product-size"><span>m</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" checked="checked" value="option1"
                                                   name="product-size"><span>l</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" checked="checked" value="option1"
                                                   name="product-size"><span>xl</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h6>Select the color</h6>
                                <label class="sr-only">Color</label>
                                <select style="padding:10px">
                                    <option value="">Select color…</option>
                                    <option value="">White</option>
                                    <option value="" selected="selected">Green</option>
                                    <option value="">Brown</option>
                                    <option value="">Yellow</option>
                                    <option value="">Pink</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <h6>Select quantity</h6>
                                <div class="cart-product-quantity">
                                    <div class="quantity m-l-5">
                                        <input type="button" class="minus" value="-">
                                        <input type="text" class="qty" value="1">
                                        <input type="button" class="plus" value="+">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <form action="{{ route('cart.add', ['product' => $product->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn"><i class="icon-shopping-cart"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product additional tabs -->
                <div class="tabs tabs-folder">
                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home3" role="tab"
                               aria-controls="home" aria-selected="false"><i class="fa fa-align-justify"></i>Description</a></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile3" role="tab"
                               aria-controls="profile" aria-selected="true"><i class="fa fa-info"></i>Additional
                                Info</a></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact3" role="tab"
                               aria-controls="contact" aria-selected="false"><i class="fa fa-star"></i>Reviews</a></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent3">
                        <div class="tab-pane fade active show" id="home3" role="tabpanel" aria-labelledby="home-tab">
                            <p>{{$product->description}}</p>
                        </div>
                        <div class="tab-pane fade " id="profile3" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                <tr>
                                    <td>Size</td>
                                    <td>Small, Medium &amp; Large</td>
                                </tr>
                                <tr>
                                    <td>Color</td>
                                    <td>Pink &amp; White</td>
                                </tr>
                                <tr>
                                    <td>Waist</td>
                                    <td>26 cm</td>
                                </tr>
                                <tr>
                                    <td>Length</td>
                                    <td>40 cm</td>
                                </tr>
                                <tr>
                                    <td>Chest</td>
                                    <td>33 inches</td>
                                </tr>
                                <tr>
                                    <td>Fabric</td>
                                    <td>Cotton, Silk &amp; Synthetic</td>
                                </tr>
                                <tr>
                                    <td>Warranty</td>
                                    <td>3 Months</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="comments" id="comments">
                                <div class="comment_number">
                                    Reviews <span>{{ count($product->reviews) }}</span>
                                </div>
                                <div class="comment-list">
                                    <!-- Comment -->
                                    @foreach($product->reviews as $review)
                                        <div class="comment" id="comment-1-1">
                                            <div class="image"><img alt="" src="images/blog/author2.jpg" class="avatar">
                                            </div>
                                            <div class="text">
                                                <div class="product-rate">
                                                    @for($i = 0; $i < $product->averageReviews(); $i++)
                                                        <i class="fa fa-star"></i>
                                                    @endfor
                                                </div>
                                                <h5 class="name">{{$review->user->name}}</h5>
                                                <span
                                                    class="comment_date">Posted at {{$review->user->created_at}}</span>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                                <div class="text_holder">
                                                    <p>{{$review->text}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- end: Comment -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Product additional tabs -->
            </div>
        </div>
    </section>
    <!-- end: SHOP PRODUCT PAGE -->
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
