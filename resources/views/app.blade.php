<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="{{route('main')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>POLO | The Multi-Purpose HTML5 Template</title>
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
                <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                    <form class="search-form" action="search-results-page.html" method="get">
                        <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
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
                                <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                <ul class="p-dropdown-content">
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Spanish</a></li>
                                    <li><a href="#">English</a></li>
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
                                        <li class="dropdown-submenu"><a href="{{ route('products.category', ['category' => $category->id]) }}">{{ $category->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('about') }}">About us</a></li>
                                <li><a href="{{ route('contacts') }}">Contacts</a></li>
                                @auth
                                    <li><a href="{{ route('account.show') }}">My account</a></li>
                                    <li><a href="{{ route('auth.logout') }}">Logout</a></li>
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
                                    <div class="widget-title">GIFT CARDS</div>
                                    <div class="widget-title">PROMOTIONS</div>
                                    <div class="widget-title">SIGN UP FOR EMAIL</div>
                                    <div class="widget-title">BECOME A MEMBER</div>
                                    <div class="widget-title">SEND US FEEDBACK</div>
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
<!--Plugins-->
<script src="{{'/js/jquery.js'}}"></script>
<script src="{{'/js/plugins.js'}}"></script>
<!--Template functions-->
<script src="{{'/js/functions.js'}}"></script>
</body>

</html>

