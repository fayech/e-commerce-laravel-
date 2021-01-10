@extends('layout-client.index')
@section('client-content')
<div class="heading-banner-area pt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-banner">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a><span class="breadcome-separator">&gt;</span></li>
                            <li><a href="index.html">Shop</a><span class="breadcome-separator">&gt;</span></li>

                            <li>{{ $article->categories}}</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="single-product-area mt-20">
    <div class="container">
        <!--Single Product Info Start-->
        <div class="row single-product-info mb-50">
            <!--Single Product Image Start-->
            <div class="col-lg-6 col-md-6">
                <!--Product Tab Content End-->
                <!--Single Product Tab Menu Start-->
                <div class="single-product-tab-content tab-content">
                    <div id="w1" class="tab-pane fade active show">
                        <div class="easyzoom easyzoom--overlay is-ready">
                            <a href="#">
                                <img src="{{asset('images/Article')}}/{{$article->articleimage}}"
                                alt="">
                            </a>
                        </div>
                    </div>

                </div>
                <!--Single Product Tab Menu Start-->
            </div>
            <!--Single Product Image End-->
            <!--Single Product Content Start-->
            <div class="col-lg-6 col-md-6">
                <div class="single-product-content">
                    <!--Product Nav Start-->
                    <div class="product-nav">
                        <a href="#"><i class="fa fa-angle-left"></i></a>
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!--Product Nav End-->
                    <h1 class="product-title">{{$article->nom}}</h1>
                    <!--Product Rating Start-->
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star on-color"></i>
                        <i class="fa fa-star on-color"></i>
                        <a class="review-link" href="#">(1 customer review)</a>
                    </div>
                    <!--Product Rating End-->
                    <!--Product Price Start-->
                    <div class="single-product-price">
                        <span class="old-price">{{$article->nom}}</span>
                    <span class="new-price">{{$article->prix}} TND</span>
                    </div>
                    <!--Product Price End-->
                    <!--Product Description Start-->
                    <div class="product-description">
                        {!!$article->description !!}


                    </div>
                    <!--Product Description End-->
                    <!--Product Quantity Start-->
                    <div class="single-product-quantity">
                        <form action="#">
                            <div class="quantity">
                                <label>Quantity</label>
                                <input class="input-text" value="1" type="number">
                            </div>
                            <button class="quantity-button" type="submit">Add to cart</button>
                        </form>
                    </div>
                    <!--Product Quantity End-->
                    <!--Wislist Compare Button Start-->
                    <div class="wislist-compare-btn">
                        <ul>
                            <li><a class="wishlist" href="#">Add To Wishlist</a></li>
                            <li><a class="compare" href="#">Compare</a></li>
                        </ul>
                    </div>
                    <!--Wislist Compare Button End-->
                    <!--Product Meta Start-->
                    <div class="product-meta">
                        <span class="posted-in">
                            Categories:
                            <a href="#">{{$article->categories}}</a>,

                        </span>
                        <span class="posted-in">
                            Marque:
                            <a href="#">{{$article->marques}}</a>,

                        </span>
                    </div>
                    <!--Product Meta End-->
                    <!--Product Sharing Start-->
                    <div class="single-product-sharing">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!--Product Sharing End-->
                </div>
            </div>
            <!--Single Product Content End-->
        </div>
        <!--Single Product Info End-->
        <!--Discription Tab Start-->

        <!--Discription Tab End-->
    </div>
</section>
@endsection
