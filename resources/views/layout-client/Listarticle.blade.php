@extends('layout-client.article')
@section('content')

<div id="grid-view" class="tab-pane fade show active">
    <div class="row product-container">
      @foreach($articles as $article)
        <div class="col-lg-3 col-md-3 item-col2">
            <div class="single-product">
              <div class="product-img">
                  <a href="{{ url('article-list/'.$article->id)}}">
                      <img src="{{asset('images/article')}}/{{$article->articleimage}}" class="first-img"  alt="">
                      <img class="hover-img" src="img/product/24.jpg" alt="">
                  </a>
                  <span class="sicker">-12%</span>
                  <ul class="product-action">
                      <li><a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                      <li><a href="#" data-toggle="modal" title="" data-target="#myModal" data-original-title="Quick View"><i class="ion-android-expand"></i></a></li>
                  </ul>
              </div>
              <div class="product-content">
                  <h2><a href="single-product.html"><td>{{ $article->nom}}</a></h2>
                  <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>


                  </div>
                  <div class="product-price">
                      <span class="new-price">{{ $article->prix}}</span>
                      <samp>{{ $article->categories}}</samp>
                                                                      <td>{{ $article->marques}}</td>
                      <a class="button add-btn" href="{{ url('add-to-cart/'.$article->id) }}"" data-toggle="tooltip" title="" data-original-title="Add to Cart">add to cart</a>
                  </div>
              </div>
          </div>
        </div>
        @endforeach
        <!--Single Product End-->
    </div>
    <div class="pagination pb-10">
      <ul class="page-number">
    {!! $articles->links() !!}
      </ul>
    </div>



</div>
@endsection
