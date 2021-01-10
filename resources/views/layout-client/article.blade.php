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
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-list-grid-view-area mt-20">
    <div class="container">
        <div class="row">
            <!--Shop Product Area Start-->
            <div class="col-lg-9 order-lg-2 order-1">
                <div class="shop-desc-container">
                    <div class="row">
                        <!--Shop Product Image Start-->
                        <div class="col-lg-12">
                            <div class="shop-product-img mb-30 img-full">
                                <img src="img/offer/11.jpg" alt="">
                            </div>
                        </div>
                        <!--Shop Product Image Start-->
                    </div>
                  </div>
                  <!--Shop Tab Menu Start-->
                  <div class="shop-tab-menu">
                    <div class="row">
                        <!--List & Grid View Menu Start-->
                        <div class="col-lg-5 col-md-5 col-xl-6 col-12">
                            <div class="shop-tab">
                                <ul class="nav">
                                    <li><a class="active" data-toggle="tab" href="#grid-view"><i class="ion-android-apps"></i></a></li>
                                    <li><a data-toggle="tab" href="#list-view"><i class="ion-navicon-round"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--List & Grid View Menu End-->
                        <!-- View Mode Start-->
                        <div class="col-lg-7 col-md-7 col-xl-6 col-12">
                            <div class="toolbar-form">
                                <form action="#">
                                    <div class="toolbar-select">
                                        <span>Short by:</span>
                                        <select data-placeholder="Choose a Country..." class="order-by" tabindex="1">
                                            <option value="Default sorting">Default sorting</option>
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Aland Islands">Aland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="show-result">
                                <p>Showing 1–16 of 56 results</p>
                            </div>
                        </div>
                        <!-- View Mode End-->
                    </div>
                </div>
                  <!--Shop Tab Menu End-->
                  <!--Shop Product Area Start-->
                  <div class="shop-product-area">
                      <div class="tab-content">
                          <!--Grid View Start-->
                         @yield('content')
                          <!--Grid View End-->
                          <!--List View Start-->
                          <div id="list-view" class="tab-pane fade">
                              <div class="row all-prodict-item-list pt-10">
                                  <!--Single Product List Start-->
                                  <div class="col-lg-12">
                                      <div class="single-item">
                                          <div class="row product-img img-full">
                                              <div class="col-lg-4 col-md-4">
                                                  <a href="single-product.html">
                                                      <img class="first-img" src="img/product/23.jpg" alt="">
                                                      <img class="hover-img" src="img/product/24.jpg" alt="">
                                                  </a>
                                              </div>
                                              <div class="col-lg-8 col-md-8">
                                                  <div class="product-content-2">
                                                      <h2><a href="single-product.html">Letraset animal</a></h2>
                                                      <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                      </div>
                                                      <div class="product-price mb-20">
                                                        <span class="new-price">$69.00</span>
                                                      </div>
                                                      <div class="product-discription">
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                                      </div>
                                                      <div class="pro-action-2">
                                                          <ul class="product-cart-area-list">
                                                             <li><a class="action-btn big" href="#" data-toggle="tooltip" title="Add to Cart">Add to cart</a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--Single Product List End-->
                                  <!--Single Product List Start-->
                                  <div class="col-lg-12">
                                      <div class="single-item">
                                          <div class="row product-img img-full">
                                              <div class="col-lg-4 col-md-4">
                                                  <a href="single-product.html">
                                                      <img class="first-img" src="img/product/53.jpg" alt="">
                                                      <img class="hover-img" src="img/product/54.jpg" alt="">
                                                  </a>
                                              </div>
                                              <div class="col-lg-8 col-md-8">
                                                  <div class="product-content-2">
                                                      <h2><a href="single-product.html">Aliquam lobortis Camera</a></h2>
                                                      <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                      </div>
                                                      <div class="product-price mb-20">
                                                        <span class="new-price">$120.00</span>
                                                      </div>
                                                      <div class="product-discription">
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                                      </div>
                                                      <div class="pro-action-2">
                                                          <ul class="product-cart-area-list">
                                                             <li><a class="action-btn big" href="#" data-toggle="tooltip" title="Add to Cart">Add to cart</a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--Single Product List End-->
                                  <!--Single Product List Start-->
                                  <div class="col-lg-12">
                                      <div class="single-item">
                                          <div class="row product-img img-full">
                                              <div class="col-lg-4 col-md-4">
                                                  <a href="single-product.html">
                                                      <img class="first-img" src="img/product/55.jpg" alt="">
                                                      <img class="hover-img" src="img/product/54.jpg" alt="">
                                                  </a>
                                              </div>
                                              <div class="col-lg-8 col-md-8">
                                                  <div class="product-content-2">
                                                      <h2><a href="single-product.html">Aliquam Watches</a></h2>
                                                      <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                      </div>
                                                      <div class="product-price mb-20">
                                                        <span class="new-price">$33.00</span>
                                                      </div>
                                                      <div class="product-discription">
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                                      </div>
                                                      <div class="pro-action-2">
                                                          <ul class="product-cart-area-list">
                                                             <li><a class="action-btn big" href="#" data-toggle="tooltip" title="Add to Cart">Add to cart</a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--Single Product List End-->
                                  <!--Single Product List Start-->
                                  <div class="col-lg-12">
                                      <div class="single-item">
                                          <div class="row product-img img-full">

                                              <div class="col-lg-4 col-md-4">
                                                  <a href="single-product.html">
                                                      <img class="first-img" src="img/product/56.jpg" alt="">
                                                      <img class="hover-img" src="img/product/24.jpg" alt="">
                                                  </a>
                                                  <span class="sicker">-7%</span>
                                              </div>
                                              <div class="col-lg-8 col-md-8">
                                                  <div class="product-content-2">
                                                      <h2><a href="single-product.html">Auctor furniture</a></h2>
                                                      <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                      </div>
                                                      <div class="product-price mb-20">
                                                        <span class="old-price">$79.00</span>
                                                        <span class="new-price">$69.00</span>
                                                      </div>
                                                      <div class="product-discription">
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                                      </div>
                                                      <div class="pro-action-2">
                                                          <ul class="product-cart-area-list">
                                                             <li><a class="action-btn big" href="#" data-toggle="tooltip" title="Add to Cart">Add to cart</a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--Single Product List End-->
                                  <!--Single Product List Start-->
                                  <div class="col-lg-12">
                                      <div class="single-item">
                                          <div class="row product-img img-full">
                                              <div class="col-lg-4 col-md-4">
                                                  <a href="single-product.html">
                                                      <img class="first-img" src="img/product/96.jpg" alt="">
                                                      <img class="hover-img" src="img/product/54.jpg" alt="">
                                                  </a>
                                              </div>
                                              <div class="col-lg-8 col-md-8">
                                                  <div class="product-content-2">
                                                      <h2><a href="single-product.html">Cillum dolore</a></h2>
                                                      <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                      </div>
                                                      <div class="product-price mb-20">
                                                        <span class="new-price">$75.00</span>
                                                      </div>
                                                      <div class="product-discription">
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                                      </div>
                                                      <div class="pro-action-2">
                                                          <ul class="product-cart-area-list">
                                                             <li><a class="action-btn big" href="#" data-toggle="tooltip" title="Add to Cart">Add to cart</a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--Single Product List End-->
                                  <!--Single Product List Start-->
                                  <div class="col-lg-12">
                                      <div class="single-item">
                                          <div class="row product-img img-full">
                                              <div class="col-lg-4 col-md-4">
                                                  <a href="single-product.html">
                                                      <img class="first-img" src="img/product/58.jpg" alt="">
                                                      <img class="hover-img" src="img/product/54.jpg" alt="">
                                                  </a>
                                              </div>
                                              <div class="col-lg-8 col-md-8">
                                                  <div class="product-content-2">
                                                      <h2><a href="single-product.html">Condimentum furniture</a></h2>
                                                      <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                      </div>
                                                      <div class="product-price mb-20">
                                                        <span class="new-price">$115.00</span>
                                                      </div>
                                                      <div class="product-discription">
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                                      </div>
                                                      <div class="pro-action-2">
                                                          <ul class="product-cart-area-list">
                                                             <li><a class="action-btn big" href="#" data-toggle="tooltip" title="Add to Cart">Add to cart</a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--Single Product List End-->
                                  <!--Single Product List Start-->
                                  <div class="col-lg-12">
                                      <div class="single-item">
                                          <div class="row product-img img-full">
                                              <div class="col-lg-4 col-md-4">
                                                  <a href="single-product.html">
                                                      <img class="first-img" src="img/product/69.jpg" alt="">
                                                      <img class="hover-img" src="img/product/24.jpg" alt="">
                                                  </a>
                                              </div>
                                              <div class="col-lg-8 col-md-8">
                                                  <div class="product-content-2">
                                                      <h2><a href="single-product.html">Condimentum posuere</a></h2>
                                                      <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                      </div>
                                                      <div class="product-price mb-20">
                                                        <span class="new-price">$115.00</span>
                                                      </div>
                                                      <div class="product-discription">
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                                      </div>
                                                      <div class="pro-action-2">
                                                          <ul class="product-cart-area-list">
                                                             <li><a class="action-btn big" href="#" data-toggle="tooltip" title="Add to Cart">Add to cart</a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--Single Product List End-->
                                  <!--Single Product List Start-->
                                  <div class="col-lg-12">
                                      <div class="single-item">
                                          <div class="row product-img img-full">
                                              <div class="col-lg-4 col-md-4">
                                                  <a href="single-product.html">
                                                      <img class="first-img" src="img/product/93.jpg" alt="">
                                                      <img class="hover-img" src="img/product/54.jpg" alt="">
                                                  </a>
                                              </div>
                                              <div class="col-lg-8 col-md-8">
                                                  <div class="product-content-2">
                                                      <h2><a href="single-product.html">Condimentum Watches</a></h2>
                                                      <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                      </div>
                                                      <div class="product-price mb-20">
                                                        <span class="new-price">$123.00</span>
                                                      </div>
                                                      <div class="product-discription">
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                                      </div>
                                                      <div class="pro-action-2">
                                                          <ul class="product-cart-area-list">
                                                             <li><a class="action-btn big" href="#" data-toggle="tooltip" title="Add to Cart">Add to cart</a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--Single Product List End-->
                                  <!--Single Product List Start-->
                                  <div class="col-lg-12">
                                      <div class="single-item">
                                          <div class="row product-img img-full">
                                              <div class="col-lg-4 col-md-4">
                                                  <a href="single-product.html">
                                                      <img class="first-img" src="img/product/61.jpg" alt="">
                                                      <img class="hover-img" src="img/product/54.jpg" alt="">
                                                  </a>
                                              </div>
                                              <div class="col-lg-8 col-md-8">
                                                  <div class="product-content-2">
                                                      <h2><a href="single-product.html">Consequuntur magni</a></h2>
                                                      <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                      </div>
                                                      <div class="product-price mb-20">
                                                        <span class="new-price">$80.00</span>
                                                      </div>
                                                      <div class="product-discription">
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                                      </div>
                                                      <div class="pro-action-2">
                                                          <ul class="product-cart-area-list">
                                                             <li><a class="action-btn big" href="#" data-toggle="tooltip" title="Add to Cart">Add to cart</a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--Single Product List End-->
                                  <!--Single Product List Start-->
                                  <div class="col-lg-12">
                                      <div class="single-item">
                                          <div class="row product-img img-full">
                                              <div class="col-lg-4 col-md-4">
                                                  <a href="single-product.html">
                                                      <img class="first-img" src="img/product/62.jpg" alt="">
                                                      <img class="hover-img" src="img/product/24.jpg" alt="">
                                                  </a>
                                                  <span class="sicker">-7%</span>
                                              </div>
                                              <div class="col-lg-8 col-md-8">
                                                  <div class="product-content-2">
                                                      <h2><a href="single-product.html">Cras neque</a></h2>
                                                      <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                      </div>
                                                      <div class="product-price mb-20">
                                                        <span class="old-price">$70.00</span>
                                                        <span class="new-price">$65.00</span>
                                                      </div>
                                                      <div class="product-discription">
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                                      </div>
                                                      <div class="pro-action-2">
                                                          <ul class="product-cart-area-list">
                                                             <li><a class="action-btn big" href="#" data-toggle="tooltip" title="Add to Cart">Add to cart</a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--Single Product List End-->
                                  <!--Single Product List Start-->
                                  <div class="col-lg-12">
                                      <div class="single-item">
                                          <div class="row product-img img-full">
                                              <div class="col-lg-4 col-md-4">
                                                  <a href="single-product.html">
                                                      <img class="first-img" src="img/product/63.jpg" alt="">
                                                      <img class="hover-img" src="img/product/24.jpg" alt="">
                                                  </a>
                                                  <span class="sicker">-7%</span>
                                              </div>
                                              <div class="col-lg-8 col-md-8">
                                                  <div class="product-content-2">
                                                      <h2><a href="single-product.html">Cras neque furniture</a></h2>
                                                      <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                      </div>
                                                      <div class="product-price mb-20">
                                                        <span class="old-price">$70.00</span>
                                                        <span class="new-price">$65.00</span>
                                                      </div>
                                                      <div class="product-discription">
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                                      </div>
                                                      <div class="pro-action-2">
                                                          <ul class="product-cart-area-list">
                                                             <li><a class="action-btn big" href="#" data-toggle="tooltip" title="Add to Cart">Add to cart</a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--Single Product List End-->
                                  <!--Single Product List Start-->
                                  <div class="col-lg-12">
                                      <div class="single-item">
                                          <div class="row product-img img-full">
                                              <div class="col-lg-4 col-md-4">
                                                  <a href="single-product.html">
                                                      <img class="first-img" src="img/product/64.jpg" alt="">
                                                      <img class="hover-img" src="img/product/24.jpg" alt="">
                                                  </a>
                                                  <span class="sicker">-7%</span>
                                              </div>
                                              <div class="col-lg-8 col-md-8">
                                                  <div class="product-content-2">
                                                      <h2><a href="single-product.html">Cras neque furniture</a></h2>
                                                      <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                      </div>
                                                      <div class="product-price mb-20">
                                                        <span class="old-price">$70.00</span>
                                                        <span class="new-price">$60.00</span>
                                                      </div>
                                                      <div class="product-discription">
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                                      </div>
                                                      <div class="pro-action-2">
                                                          <ul class="product-cart-area-list">
                                                             <li><a class="action-btn big" href="#" data-toggle="tooltip" title="Add to Cart">Add to cart</a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                             <li><a class="action-btn small" href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--Single Product List End-->
                              </div>
                          </div>
                          <!--List View End-->
                      </div>
                  </div>
                  <!--Shop Product Area End-->

            </div>
            <!--Shop Product Area End-->
            <!--Left Sidebar Start-->
            <div class="col-lg-3 order-lg-1 order-2">
                <!--Widget Shop Categories start-->
                <div class="widget widget-shop-categories">
                    <h3 class="widget-shop-title">Shop By Categories</h3>
                    <div class="widget-content">
                        <ul class="product-categories">
                            @foreach($categories as $categorie)
                        <li><a href="/Article/{{$categorie->id}}">{{ $categorie->Nom }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!--Widget Shop Categories End-->
                <!--Widget Price Slider Start-->
                <div class="widget widget-price-slider">
                    <h3 class="widget-title">Filter by price</h3>
                    <div class="widget-content">
                        <div class="price-filter">
                            <form action="#">
                                <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span></div>
                                <span>Price:<input id="amount" class="amount" readonly="" type="text"></span>
                                <input class="price-button" value="Filter" type="button">
                            </form>
                        </div>
                    </div>
                </div>
                <!--Widget Price Slider End-->
                <!--Widget Brand Start-->

                <!--Widget Brand End-->

                <!--Widget Manufacture End-->


                <!--Widget Tag Start-->
                <div class="widget widget-tag">
                    <h3 class="widget-shop-tag-title">Popular Tags</h3>
                    <ul>
                        @foreach($marques as $marque)
                          <li><a href="#">{{$marque->nom}}</a></li>
                       @endforeach
                    </ul>
                </div>
                <!--Widget Tag End-->
            </div>
            <!--Left Sidebar End-->
        </div>
    </div>
</div>

@endsection
