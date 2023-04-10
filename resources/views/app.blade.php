<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="INSPIRO"/>
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="{{route('main')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>{{ __('main_title') }}</title>
    <!-- Stylesheets & Fonts -->
    <link href="{{'/css/plugins.css'}}" rel="stylesheet">
    <link href="{{'/css/style.css'}}" rel="stylesheet">
</head>

<body>
<!-- Body Inner -->
<div class="body-inner">
    <!-- Header -->
    <header id="header" class="dark">
        <div class="header-inner">
            <div class="container">
                <!--Logo-->
                <div id="logo">
                    <a href="{{route('main')}}">
                        <span class="logo-default">POLO</span>
                        <span class="logo-dark">POLO</span>
                    </a>
                </div>
                <!--End: Logo-->
                <!-- Search -->
                <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                            class="icon-x"></i></a>
                    <form class="search-form" action="search-results-page.html" method="get">
                        <input class="form-control" name="q" type="text" placeholder="Type & Search..."/>
                        <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                    </form>
                </div>
                <!-- end: search -->
                <!--Header Extras-->
                <div class="header-extras">
                    <ul>
                        <li>
                            <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                        </li>
                        <li>
                            <div class="p-dropdown">
                                <a href="#"><i class="icon-globe"></i>
                                    <span>
                                        @if(session()->get('locale') == 'ru')
                                            RU
                                        @else
                                            EN
                                        @endif
                                    </span>
                                </a>
                                <ul class="p-dropdown-content">
                                    <li><a href="{{ route('changeLang', ['lang' => 'en']) }}">English</a></li>
                                    <li><a href="{{ route('changeLang', ['lang' => 'ru']) }}">Русский</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--end: Header Extras-->
                <!--Navigation Resposnive Trigger-->
                <div id="mainMenu-trigger">
                    <a class="lines-button x"><span class="lines"></span></a>
                </div>
                <!--end: Navigation Resposnive Trigger-->
                <!--Navigation-->
                <div id="mainMenu">
                    <div class="container">
                        <nav>
                            <ul>
                                <li class="dropdown"><a href="{{route('products.index')}}">Shop</a>
                                    <ul class="dropdown-menu">
                                        @foreach($categories as $category)
                                            <li class="dropdown-submenu"><a
                                                    href="{{ route('products.category', ['category' => $category->id]) }}">{{ $category->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('about') }}">About us</a></li>
                                <li><a href="{{ route('contacts') }}">Contacts</a></li>
                                <li><a href="{{ route('cart.get') }}">Cart</a></li>
                                @auth
                                    <li><a href="{{ route('account.show') }}">My account</a></li>
                                    <li><a href="{{ route('wishlist.get') }}">WishList</a></li>
                                    <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                                    @if(Auth::user()->is_admin)
                                        <li class="dropdown"><a href="{{route('admin.main')}}">Admin</a>
                                        </li>
                                    @endif
                                @endauth
                                @guest
                                    <li><a href="{{ route('auth.login') }}">Login</a></li>
                                    <li><a href="{{ route('auth.register') }}">Register</a></li>
                                @endguest
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--end: Navigation-->
            </div>
        </div>
    </header>
    <!-- end: Header -->

    @yield('content')
    <!-- Footer -->
    <footer id="footer" class="inverted">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="widget">

                            <p class="mb-5">We can surprise you.</p>
                            <a href="#" class="btn btn-inverted" target="_blank">Purchase now</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="widget">
                                    <div class="widget-title">PROMOTIONS</div>
                                    <ul class="list">
                                        <li><a href="#">GIFT CARDS</a></li>
                                        <li><a href="#">SIGN UP FOR EMAIL</a></li>
                                        <li><a href="#">BECOME A MEMBER</a></li>
                                        <li><a href="{{ route('contacts') }}">SEND US FEEDBACK</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="widget">
                                    <div class="widget-title">ABOUT US</div>
                                    <ul class="list">
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Investors</a></li>
                                        <li><a href="#">Purpose</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="widget">
                                    <div class="widget-title">GET HELP</div>
                                    <ul class="list">
                                        <li><a href="#">Order Status</a></li>
                                        <li><a href="#">Shipping and Delivery</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Payment Options</a></li>
                                        <li><a href="{{route('contacts')}}">Contacts us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end: Footer -->
</div> <!-- end: Body Inner -->
<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

@if (session('success'))
    <div id="notification-modal" data-notify="container" data-animate="fadeInLeftBig"
         class="bootstrap-notify col-xs-11 col-sm-3 alert alert-success" role="alert" data-notify-position="top-right"
         style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 10000; top: 30px; right: 30px;">
        <span data-notify="title">{{ session('success') }}</span>
    </div>
@elseif(session('error'))
    <div id="notification-modal" data-notify="container" data-animate="zoomIn"
         class="bootstrap-notify col-xs-11 col-sm-3 alert alert-danger" role="alert" data-notify-position="top-right"
         style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 10000; top: 30px; right: 30px;">
        <span data-notify="icon"></span> <span data-notify="title">{{ session('error') }}</span>
    </div>
@endif
<div class="modal fade" id="modal-checkout" tabindex="-1" role="modal" aria-labelledby="modal-label-2" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="modal-label-2" class="modal-title">Attention</h4>
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>You must be logged in to place an order.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="float-left">
                    <button data-dismiss="modal" class="btn btn-b" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Plugins-->
<script src="{{ asset('/js/jquery.js') }}"></script>
<script src="{{ asset('/js/plugins.js') }}"></script>
<script src="{{ asset('/js/functions.js') }}"></script>
<script>
    setTimeout(function () {
        $('#notification-modal').hide('slow');
    }, 2000);
</script>
</body>

</html>

