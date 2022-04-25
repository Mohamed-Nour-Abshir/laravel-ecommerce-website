<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico')}}">
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext')}}" rel="stylesheet">
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" integrity="sha512-WWc9iSr5tHo+AliwUnAQN1RfGK9AnpiOFbmboA0A0VJeooe69YR2rLgHw13KxF1bOSLmke+SNnLWxmZd8RTESQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.tiny.cloud/1/3z580xmf0ykwrugicwxygg24o05x2utaux60dxxjpcfb98bi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    @livewireStyles
</head>
<body class="home-page home-01 ">

<!-- mobile menu -->
<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels"></div>
</div>

<!--header-->
<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu left-menu">
                        <ul>
                            <li class="menu-item" >
                                <a title="Hotline: (+880) 173 093 1984" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+880) 173 093 1984</a>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-menu right-menu">
                        <ul>
                            <li class="menu-item lang-menu menu-item-has-children parent">
                                <a title="English" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-en.png')}}" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="submenu lang" >
                                    <li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-hun.png')}}" alt="lang-hun"></span>Hungary</a></li>
                                    <li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-ger.png')}}" alt="lang-ger" ></span>German</a></li>
                                    <li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-fra.png')}}" alt="lang-fre"></span>French</a></li>
                                    <li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-can.png')}}" alt="lang-can"></span>Canada</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children parent" >
                                <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="submenu curency" >
                                    <li class="menu-item" >
                                        <a title="Pound (GBP)" href="#">Pound (GBP)</a>
                                    </li>
                                    <li class="menu-item" >
                                        <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                                    </li>
                                    <li class="menu-item" >
                                        <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                                    </li>
                                </ul>
                            </li>

                            @if (Route::has('login'))
                                @auth
                                  @if (Auth::user()->usertype==='ADM')
                                    <li class="menu-item menu-item-has-children parent" >
                                        <a title="account" href="#">My Account({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="submenu curency" >
                                            <li class="menu-item" >
                                                <a title="dashboard" href="{{route('admin.dashboard')}}">Dashboard</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="Products" href="{{route('admin.products')}}">Products</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="categories" href="{{route('admin.categories')}}">Categories</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="Home Slider" href="{{route('admin.homeslider')}}">Manage Home Slider</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="Manage Home Categories" href="{{route('admin.homecategories')}}">Manage Home categories</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="Sale Settings" href="{{route('admin.sale')}}">Sale Settings</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="All Coupon" href="{{route('admin.coupons')}}">All Coupon</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="All Orders" href="{{route('admin.orders')}}">All Orders</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="Contact Messages" href="{{route('admin.contacts')}}">Contact Messages</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="Settings" href="{{route('admin.settings')}}">Settings</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                            </li>
                                            <form id="logout-form" action="{{route('logout')}}" method="POST">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                    @else
                                     <li class="menu-item menu-item-has-children parent" >
                                        <a title="account" href="#">My Account<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="submenu curency" >
                                            <li class="menu-item" >
                                                <a title="dashboard" href="{{route('user.dashboard')}}">Dashboard</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="My Profile" href="{{route('user.profile')}}">My Profile</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="Orders" href="{{route('user.orders')}}">My Orders</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="Change-password" href="{{route('user.changepassword')}}">Change Password</a>
                                            </li>
                                            <hr>
                                            <li class="menu-item">
                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                            </li>
                                            <form id="logout-form" action="{{route('logout')}}" method="POST">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                    @endif

                                    @else
                                    <li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">Login</a></li>
                                    <li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">Register</a></li>
                                    @endif

                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mid-section main-info-area">

                    <div class="wrap-logo-top left-section">
                        <a href="/" class="link-to-home"><img src="{{asset('assets/images/logo-top-1.png')}}" alt="mercado"></a>
                    </div>

                    @livewire('header-search-component');

                    <div class="wrap-icon right-section">
                        @livewire('wishlist-count-component')
                        @livewire('cart-count-component')
                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="nav-section header-sticky">
                <div class="header-nav-section">
                    <div class="container">
                        <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
                            <li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
                            <li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
                            <li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
                            <li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
                            <li class="menu-item"><a href="#" class="link-term">Top rated items</a><span class="nav-label hot-label">hot</span></li>
                        </ul>
                    </div>
                </div>

                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                            <li class="menu-item home-icon">
                                <a href="{{url('/')}}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('/about')}}" class="link-term mercado-item-title">About Us</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('/shop')}}" class="link-term mercado-item-title">Shop</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('/cart')}}" class="link-term mercado-item-title">Cart</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('/checkout')}}" class="link-term mercado-item-title">Checkout</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('/contact-us')}}" class="link-term mercado-item-title">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{$slot}}

@livewire('footer-component')

<script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
<script src="{{asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js" integrity="sha512-Dz4zO7p6MrF+VcOD6PUbA08hK1rv0hDv/wGuxSUjImaUYxRyK2gLC6eQWVqyDN9IM1X/kUA8zkykJS/gEVOd3w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" integrity="sha512-Y+0b10RbVUTf3Mi0EgJue0FoheNzentTMMIE2OreNbqnUPNbQj8zmjK3fs5D2WhQeGWIem2G2UkKjAL/bJ/UXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.js" integrity="sha512-T5Bneq9hePRO8JR0S/0lQ7gdW+ceLThvC80UjwkMRz+8q+4DARVZ4dqKoyENC7FcYresjfJ6ubaOgIE35irf4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@livewireScripts
@stack('scripts')
</body>
</html>
