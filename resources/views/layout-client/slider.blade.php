@extends('layout-client.index')
@section('client-content')
<section class="slider-area ptb-30 white-bg">
    <div class="container">
        <div class="row">
            <!--Slider Start-->
            <div class="col-lg-9 col-md-9">

                <div class="slider-wrapper theme-default">
                    <!--Slider Background Image Start-->


                    <div id="slider" class="nivoSlider">
                        @foreach($sliders as $slider)
                        <img src="{{asset('images/Slider')}}/{{$slider->sliderimage}}" alt="" title="#htmlcaption" style="display: none;">
                        <img src="{{asset('images/Slider')}}/{{$slider->sliderimage}}" alt="" title="#htmlcaption2"
                            style="width: 870px; visibility: hidden;">

                        <img class="nivo-main-image" src="{{asset('images/Slider')}}/{{$slider->sliderimage}}" style="display: inline; height: 505px;">
                        <div class="nivo-caption" style="display: block;">
                            <div class="slider-caption">
                                <div class="slider-text">
                                    <h5 class="wow  fadeInLeft animated animated" data-wow-duration="1.5s"
                                        data-wow-delay="0.5s"
                                        style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                        Exclusive Offer -40% Off This Week </h5>
                                    <h1 class="wow  fadeInLeft animated animated" data-wow-duration="1s"
                                        data-wow-delay="0.5s"
                                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                {{$slider->title}}</h1>

                                    <div class="slider-button">
                                        <a href="#" class="wow button  fadeInLeft animated animated"
                                            data-text="Shop now" data-wow-duration="2.5s" data-wow-delay="0.5s"
                                            style="visibility: visible; animation-duration: 2.5s; animation-delay: 0.5s; animation-name: fadeInLeft;">shopping
                                            Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="nivo-box" name="0" rel="0"
                            style="opacity: 1; left: 0px; top: 0px; width: 109px; height: 505px;">
                        </div>

                        @endforeach



                    </div>


                    <div class="nivo-controlNav"><a class="nivo-control" rel="0">1</a><a class="nivo-control active"
                            rel="1">2</a></div>
                    <!--Slider Background Image End-->
                    <!--1st Slider Caption Start-->

                    <div id="htmlcaption" class="nivo-html-caption">
                        <div class="slider-caption">
                            <div class="slider-text">
                                <h5 class="wow animated fadeInLeft animated" data-wow-duration="1s"
                                    data-wow-delay="0.5s"
                                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                    Exclusive Offer -20% Off This Week </h5>
                                <h1 class="wow animated fadeInLeft animated" data-wow-duration="1s"
                                    data-wow-delay="0.5s"
                                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                    Gone Gear Vr <br>Sale 70% Off</h1>
                                <h4 class="wow animated fadeInLeft animated" data-wow-duration="1.5s"
                                    data-wow-delay="0.5s"
                                    style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                    Starting at <span>$560.99</span></h4>
                                <div class="slider-button">
                                    <a href="#" class="wow button animated fadeInLeft animated" data-text="Shop now"
                                        data-wow-duration="2.5s" data-wow-delay="0.5s"
                                        style="visibility: visible; animation-duration: 2.5s; animation-delay: 0.5s; animation-name: fadeInLeft;">shopping
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--1st Slider Caption End-->

                </div>

            </div>
            <!--Slider End-->
            <!--Offer Image Start-->
            <div class="col-lg-3 col-md-3">
                <div class="single-offer mb-20">
                    <div class="offer-img img-full">
                        <a href="#"><img src="img/offer/1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="offer">
                    <div class="offer-img2 img-full">
                        <a href="#"><img src="img/offer/2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <!--Offer Image End-->
        </div>
    </div>
</section>
<section class="corporate-about white-bg pb-30">
    <div class="container">
        <div class="row all-about no-gutters">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-about">
                    <div class="block-wrapper">
                        <div class="about-content">
                            <h5>Free Delivery</h5>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-about">
                    <div class="block-wrapper2">
                        <div class="about-content">
                            <h5>Free Delivery</h5>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-about">
                    <div class="block-wrapper3">
                        <div class="about-content">
                            <h5>Free Delivery</h5>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-about not-border">
                    <div class="block-wrapper4">
                        <div class="about-content">
                            <h5>Free Delivery</h5>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
