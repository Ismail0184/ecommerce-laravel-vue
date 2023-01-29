<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>E-commerce - @yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('/')}}website/assets/images/favicon.png">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <!-- StyleSheet -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/themify-icons.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/slicknav.min.css">
    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/reset.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/responsive.css">
</head>
<body class="js">

<!-- Preloader -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- End Preloader -->


<!-- Header -->
<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            <li><i class="ti-headphone-alt"></i> +88 01845854380</li>
                            <li><i class="ti-email"></i> info@shophub.com</li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                            @if(Session::get('customer_id'))
                                <li><i class="ti-user"></i> <a href="#">Hello {{Session::get('customer_name')}}</a></li>
                                <li><i class="ti-alarm-clock"></i><a href="{{route('customer.dashboard')}}">Dashboard</a></li>
                                <li><i class="ti-power-off"></i><a href="{{route('customer.logout')}}">Logout</a></li>
                            @else
                                <li><i class="ti-location-pin"></i> Store location</li>
                                <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
                                <li><i class="ti-user"></i><a href="{{route('customer.register')}}">Register</a></li>
                                <li><i class="ti-power-off"></i><a href="{{route('customer.login')}}">Login</a></li>
                            @endif
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/images/logo.png" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                        <!-- Search Form -->
                        <div class="search-top">
                            <form class="search-form">
                                <input type="text" placeholder="Search here..." name="search">
                                <button value="search" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <select>
                                <option selected="selected">All Category</option>
                                @foreach($categories as $category)
                                <option>{{$category->name}}</option>
                                @endforeach
                            </select>
                            <form>
                                <input name="search" placeholder="Search Products Here....." type="search">
                                <button class="btnn"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        <!-- Search Form -->
                        <div class="sinlge-bar">
                            <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="sinlge-bar">
                            <a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="sinlge-bar shopping">
                            <a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{count(Cart::getContent())}}</span></a>
                            <!-- Shopping Item -->
                            <div class="shopping-item">
                                <div class="dropdown-cart-header">
                                    <span>{{count(Cart::getContent())}} Items</span>
                                    <a href="{{route('cart.show')}}">View Cart</a>
                                </div>
                                <ul class="shopping-list">
                                    @php($total = 0)
                                    @foreach(Cart::getContent() as $cartProduct)
                                        <li>
                                            <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img src="{{asset($cartProduct->attributes->image)}}" alt="#"></a>
                                            <h4><a href="#">{{$cartProduct->name}}</a></h4>
                                            <p class="quantity">{{$cartProduct->quantity}} * {{$cartProduct->price}} = {{$cartProduct->quantity*$cartProduct->price}}  <span class="amount">{{$cartProduct->selling_price}}</span></p>
                                        </li>
                                        @php( $total = $total + $cartProduct->quantity*$cartProduct->price)
                                    @endforeach
                                </ul>
                                <div class="bottom">
                                    <div class="total">
                                        <span>Total</span>
                                        <span class="total-amount">৳ {{number_format($total,2)}}</span>
                                    </div>
                                    <a href="{{route('checkout')}}" class="btn animate">Checkout</a>
                                </div>
                            </div>
                            <!--/ End Shopping Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="all-category">
                            <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                            <ul class="main-category">
                                @foreach($categories as $category)
                                <li><a href="{{route('category-product', ['id' => $category->id])}}">{{$category->name}}
                                        @if(count($category->subCategory) > 0)
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        @endif
                                        </a>
                                    @if(count($category->subCategory) > 0)
                                    <ul class="sub-category">
                                        @foreach($category->subCategory as $subCategory)
                                        <li><a href="{{route('subcategory-product', ['id'=>$subCategory->id])}}">{{$subCategory->name}}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">
                                    <div class="nav-inner">
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                                            <li><a href="{{route('about')}}">About Us</a></li>
                                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!--/ End Header -->

@yield('body')


<!-- Start Footer Area -->
<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/images/logo2.png" alt="#"></a>
                        </div>
                        <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
                        <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Customer Service</h4>
                        <ul>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer social">
                        <h4>Get In Tuch</h4>
                        <!-- Single Widget -->
                        <div class="contact">
                            <ul>
                                <li>NO. 342 - London Oxford Street.</li>
                                <li>012 United Kingdom.</li>
                                <li>info@eshop.com</li>
                                <li>+032 3456 7890</li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <ul>
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-flickr"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top -->
    <div class="copyright">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="left">
                            <p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="right">
                            <img src="{{asset('/')}}website/assets/images/payments.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /End Footer Area -->

<!-- Jquery -->
<script src="{{asset('/')}}website/assets/js/jquery.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery-migrate-3.0.0.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery-ui.min.js"></script>
<!-- Popper JS -->
<script src="{{asset('/')}}website/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('/')}}website/assets/js/bootstrap.min.js"></script>
<!-- Color JS -->
<script src="{{asset('/')}}website/assets/js/colors.js"></script>
<!-- Slicknav JS -->
<script src="{{asset('/')}}website/assets/js/slicknav.min.js"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('/')}}website/assets/js/owl-carousel.js"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('/')}}website/assets/js/magnific-popup.js"></script>
<!-- Waypoints JS -->
<script src="{{asset('/')}}website/assets/js/waypoints.min.js"></script>
<!-- Countdown JS -->
<script src="{{asset('/')}}website/assets/js/finalcountdown.min.js"></script>
<!-- Nice Select JS -->
<script src="{{asset('/')}}website/assets/js/nicesellect.js"></script>
<!-- Flex Slider JS -->
<script src="{{asset('/')}}website/assets/js/flex-slider.js"></script>
<!-- ScrollUp JS -->
<script src="{{asset('/')}}website/assets/js/scrollup.js"></script>
<!-- Onepage Nav JS -->
<script src="{{asset('/')}}website/assets/js/onepage-nav.min.js"></script>
<!-- Easing JS -->
<script src="{{asset('/')}}website/assets/js/easing.js"></script>
<!-- Active JS -->
<script src="{{asset('/')}}website/assets/js/active.js"></script>
</body>
</html>

