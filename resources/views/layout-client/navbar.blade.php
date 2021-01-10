<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>javenist-E-Commerce HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

        <!-- Ionicons Font CSS-->
        <link rel="stylesheet" href="{{asset('desgin-client/css/ionicons.min.css')}}">
        <!-- font awesome CSS-->
        <link rel="stylesheet" href="{{asset('desgin-client/css/font-awesome.min.css')}}">

        <!-- Animate CSS-->
        <link rel="stylesheet" href="{{asset('desgin-client/css/animate.css')}}">
        <!-- UI CSS-->
        <link rel="stylesheet" href="{{asset('desgin-client/css/jquery-ui.min.css')}}">
        <!-- Chosen CSS-->
        <link rel="stylesheet" href="{{asset('desgin-client/css/chosen.css')}}">
        <!-- Meanmenu CSS-->
        <link rel="stylesheet" href="{{asset('desgin-client/css/meanmenu.min.css')}}">
        <!-- Fancybox CSS-->
        <link rel="stylesheet" href="{{asset('desgin-client/css/jquery.fancybox.css')}}">
        <!-- Normalize CSS-->
        <link rel="stylesheet" href="{{asset('desgin-client/css/normalize.css')}}">
        <!-- Nivo Slider CSS-->
        <link rel="stylesheet" href="{{asset('desgin-client/css/nivo-slider.css')}}">
        <!-- Owl Carousel CSS-->
        <link rel="stylesheet" href="{{asset('desgin-client/css/owl.carousel.min.css')}}">
        <!-- EasyZoom CSS-->
        <link rel="stylesheet" href="{{asset('desgin-client/css/easyzoom.css')}}">
        <!-- Slick CSS-->
        <link rel="stylesheet" href="{{asset('desgin-client/css/slick.css')}}">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="{{asset('desgin-client/css/bootstrap.min.css')}}">
        <!-- Default CSS -->
        <link rel="stylesheet" href="{{asset('desgin-client/css/default.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('desgin-client/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('desgin-client/css/responsive.css')}}">
        <!-- Modernizr Js -->
        <script src="{{asset('desgin-client/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    </head>
<body>
	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div class="wrapper home">
		<!--Header Area Start-->
		<header>
		   <div class="header-container">
		       <!--Header Top Area Start-->
               <div class="header-top-area">
                   <div class="container">
                       <div class="row">
                           <!--Header Top Left Area Start-->
                           <div class="col-lg-4 col-md-4 col-12">
                               <div class="header-top-menu">
                                   <ul>
                                       <li><span>Language:</span><a href="#">English <i class="fa fa-angle-down"></i></a>
                                           <ul class="ht-dropdown">
                                               <li><a href="#">Deutsch</a></li>
                                               <li><a href="#">Français</a></li>
                                               <li><a href="#">Português</a></li>
                                           </ul>
                                       </li>
                                       <li><span>Currency:</span><a href="#" class="text-uppercase">Usd<i class="fa fa-angle-down"></i></a>
                                           <ul class="ht-dropdown">
                                               <li><a href="#">EUR</a></li>
                                               <li><a href="#">BRL</a></li>
                                           </ul>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                           <!--Header Top Left Area End-->
                           <!--Header Top Right Area Start-->
                           <div class="col-lg-8 col-md-8 d-lg-block d-md-block d-none text-right">
                               <div class="header-top-menu">
                                   <ul>
                                       <li class="support"><span>Ordered before 17:30, shipped today  - Support: (012) 800 456 789</span></li>
                                       <li class="account"><a href="#">My Account <i class="fa fa-angle-down"></i></a>
                                           <ul class="ht-dropdown">
                                               <li><a href="checkout.html">Checkout</a></li>
                                               <li><a href="my-account.html">My Account</a></li>
                                               <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                               <li><a href="wishlist.html">Wishlist</a></li>
                                           </ul>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                           <!--Header Top Right Area End-->
                       </div>
                   </div>
               </div>
               <!--Header Top Area End-->
               <!--Header Middel Area Start-->
               <div class="header-middel-area">
                   <div class="container">
                       <div class="row">
                           <!--Logo Start-->
                           <div class="col-lg-3 col-md-3 col-12">
                               <div class="logo">
                                   <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                               </div>
                           </div>
                           <!--Logo End-->
                           <!--Search Box Start-->
                           <div class="col-lg-6 col-md-5 col-12">
                               <div class="search-box-area">
                                   <form action="#">
                                       <div class="select-area">
                                        <select data-placeholder="Choose a Country..." class="select" tabindex="1">
                                            <option value="">All Categories</option>
                                            {{-- <optgroup label="NFC EAST">
                                                @if($categories)
                                                @foreach($categories as $categorie)

                                              <option>{{ $categorie->Nom }}</option>
                                              @endforeach
                                              @endif
                                            </optgroup> --}}


                                       </select>
                                   </div>
                                       <div class="search-box">
                                           <input type="text" name="search" id="search" placeholder="" value="Search product..." onblur="if(this.value==''){this.value='Search product...'}" onfocus="if(this.value=='Search product...'){this.value=''}">
                                           <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                       </div>
                                   </form>
                               </div>
                           </div>
                           <!--Search Box End-->
                           <!--Mini Cart Start-->
                           <div class="col-lg-3 col-md-4 col-12">
                               <div class="mini-cart-area">
                                   <ul>
                                       <li><a href="#"><i class="ion-android-star"></i></a></li>
                                       <li><a href="#"><i class="ion-android-cart"></i><span class="cart-add">{{ count((array) session('cart')) }}</span></a>
                                           <ul class="cart-dropdown">
                                               <!--Single Cart Item Start-->
                                               <?php $total = 0 ?>
                                               @if(session('cart'))
                                               @foreach(session('cart') as $id => $details)
                                               <?php $total += $details['price'] * $details['quantity'] ?>

                                               <li class="cart-item">
                                                   <div class="cart-img">
                                                       <a href="shopping-cart.html"><img src="{{asset('images/article')}}/{{ $details['photo'] }}" alt=""></a>
                                                   </div>
                                                   <div class="cart-content">
                                                       <h4><a href="shopping-cart.html">{{ $details['name'] }}</a></h4>
                                                       <p class="cart-quantity">Qty:{{ $details['quantity'] }}</p>
                                                       <p class="cart-price">{{ $details['price']* $details['quantity'] }}</p>
                                                   </div>
                                                   <div class="cart-close">
                                                       <a href="#" title="Remove"><i class="ion-android-close"></i></a>
                                                   </div>
                                               </li>
                                               @endforeach
                                               @endif


                                            <li class="cart-item">

                                                <div class="cart-content">
                                                    <h4><a href="shopping-cart.html">Total:</a></h4>
                                                    <h4><a href="shopping-cart.html">{{ $total }} DNT</a></h4>

                                                </div>

                                            </li>
                                               <!--Single Cart Item Start-->
                                               <!--Single Cart Item Start-->

                                               <!--Single Cart Item Start-->
                                               <!--Cart Total Start-->

                                               <!--Cart Total End-->
                                               <!--Cart Button Start-->
                                               <li class="cart-button">
                                                   <a href="{{url('/cart')}}" class="button2">View cart</a>
                                                   <a href="checkout.html" class="button2">Check out</a>
                                               </li>
                                               <!--Cart Button End-->
                                           </ul>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                           <!--Mini Cart End-->
                       </div>
                   </div>
               </div>
               <!--Header Middel Area End-->
               <!--Header bottom Area Start-->
               <div class="header-bottom-area header-sticky">
                   <div class="container">
                       <div class="row">
                           <div class="col-lg-12">
                               <!--Logo Sticky Start-->
                               <div class="logo-sticky">
                                 <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                               </div>
                               <!--Logo Sticky End-->
                               <!--Main Menu Area Start-->
                               <div class="main-menu-area">
                                   <nav>
                                       <ul class="main-menu">
                                           <li class="active"><a href="{{url('/slide')}}">Home</a>
                                               <!--Dropdown Menu Start-->

                                               <!--Dropdown Menu End-->
                                           </li>

                                               <!--Mega Menu End-->
                                           <li class="hot"><a href="{{url('/Article')}}">Shop</a></li>
                                           <li><a href="{{url('/contact')}}">Contact Us</a></li>

                                       </ul>
                                   </nav>
                               </div>
                               <!--Main Menu Area End-->
                           </div>
                       </div>
                   </div>
               </div>
               <!--Header bottom Area End-->
               <!--Mobile Menu Area Start-->
               <div class="mobile-menu-area d-lg-none d-md-none d-block">
                   <div class="container">
                       <div class="row">
                           <div class="col-12">
                               <div class="mobile-menu">
                                   <nav style="display: block;">
                                       <ul>
                                           <li><a href="index.html">home</a>

                                           </li>
                                           <li><a href="#">Features</a>
                                               <ul>
                                                   <li><a href="#">pages</a>
                                                       <ul>
                                                          <li><a href="about.html">About Us</a></li>
                                                          <li><a href="services.html">Services</a></li>
                                                          <li><a href="frequently-questions.html">Frequently Questions</a></li>
                                                          <li><a href="404.html">Error 404</a></li>
                                                          <li><a href="portfolio.html">Portfolio</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href="#">blog</a>
                                                       <ul>
                                                          <li><a href="blog-nosidebar.html">None Sidebar</a></li>
                                                          <li><a href="blog-left-sidebar.html">Sidebar Left</a></li>
                                                          <li><a href="blog-post-gallery.html">Gallery Format</a></li>
                                                          <li><a href="blog-post-audio.html">Audio Format</a></li>
                                                          <li><a href="blog-post-video.html">Video Format</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href="#">shop</a>
                                                       <ul>
                                                          <li><a href="shop-full-width.html">Full Width</a></li>
                                                          <li><a href="shop-right-sidebar.html">Sidebar Right</a></li>
                                                          <li><a href="shop-list-view.html">List View</a></li>
                                                       </ul>
                                                   </li>
                                               </ul>
                                           </li>
                                           <li><a href="shop.html">Shop</a></li>
                                           <li><a href="blog.html">Blog</a></li>
                                           <li><a href="contact.html">Contact Us</a></li>
                                           <li><a href="wishlist.html">My Wishlist</a></li>
                                           <li><a href="#">Pages</a>
                                               <ul>
                                                   <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                   <li><a href="wishlist.html">Wishlist</a></li>
                                                   <li><a href="checkout.html">Checkout</a></li>
                                                   <li><a href="my-account.html">My Account</a></li>
                                                   <li><a href="single-product.html">Product Details</a></li>
                                                   <li><a href="shop.html">Shop</a></li>
                                                   <li><a href="shop-full-width.html">Shop Full Width</a></li>
                                                   <li><a href="shop-list-view.html">Shop List View</a></li>
                                                   <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                   <li><a href="blog-post-img.html">Blog Image Post</a></li>
                                                   <li><a href="blog-post-video.html">Blog Video Post</a></li>
                                                   <li><a href="blog-nosidebar.html">Blog no Sidebar</a></li>
                                               </ul>
                                           </li>
                                       </ul>
                                   </nav>
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
               <!--Mobile Menu Area End-->
               </div>
		</header>
		<!--Header Area End-->
		<!--Slider Area Start-->

		<!--Slider Area End-->
		<!--Corporate About Start-->

		<!--Corporate About End-->
		<!--All Product Area Start-->

		<!--All Product Area End-->
		<!--Offer Image Area Start-->

		<!--Offer Image Area End-->
		<!--Hot Categories Area Start-->

		<!--Hot Categories Area End-->
		<!--All Slide Product Area Start-->

		<!--All Slide Product Area End-->
		<!--Brand Area Start-->

		<!--Brand Area End-->
