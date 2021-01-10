@extends('layout-client.index')
@section('client-content')
<section class="heading-banner-area pt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-banner">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a><span class="breadcome-separator">&gt;</span></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                    <div class="heading-banner-title">
                        <h1>Shopping Cart</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="shopping-cart-area mt-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               <form class="shop-form" action="#">
                    <div class="wishlist-table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-remove"></th>
                                    <th class="product-cart-img">
                                        <span class="nobr">Product Image</span>
                                    </th>
                                    <th class="product-name">
                                        <span class="nobr">Product Name</span>
                                    </th>
                                    <th class="product-quantity">
                                        <span class="nobr">quantity</span>
                                    </th>
                                    <th class="product-price">
                                        <span class="nobr"> Unit Price </span>
                                    </th>
                                    <th class="product-total-price">
                                        <span class="nobr"> Total Price </span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total = 0 ?>

                                @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                <?php $total += $details['price'] * $details['quantity'] ?>
                                <tr>
                                    <td class="product-remove">
                                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                    <td class="product-cart-img">
                                        <a href="#"><img src="{{asset('images/article')}}/{{ $details['photo'] }}" style="    width: auto;
                                            height: 40%;"  alt="{{$details['photo']}}"></a>
                                    </td>
                                    <td class="product-name">
                                        <a href="#">{{ $details['name'] }}</a>
                                    </td>
                                    <td class="product-quantity">
                                        <select>
                                            <option value="{{ $details['quantity'] }}">{{ $details['quantity'] }}</option>

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </td>
                                    <td class="product-price">
                                        <span>{{ $details['price'] }}</span>
                                    </td>
                                    <td class="product-total-price">
                                        <span>{{ $details['price'] * $details['quantity'] }}</span>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
               </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <form action="#">
                   <div class="cart-collaterals">
                       <div class="cart-cuppon">
                           <div class="coupon">
                               <input name="coupon_code" class="input-copun" value="" placeholder="Coupon code" type="text">
                               <button type="submit" class="wishlist-btn shopping-btn">Apply coupon</button>
                           </div>
                           <button class="update-btn" type="submit">Update cart</button>
                       </div>
                   </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="shopping-cart-total">
                   <h2>Cart totals</h2>
                   <div class="shop-table table-responsive">
                       <table>
                           <tbody>
                               <tr class="cart-subtotal">
                                   <td data-title="Subtotal"><span>{{ $total }}</span></td>
                               </tr>


                           </tbody>
                       </table>
                   </div>
                   <div class="proceed-to-checkout">
                       <a class="checkout-button" href="{{ URL::to('pdf') }}">Proceed to checkout</a>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript">
    $(".update-cart").click(function (e) {
       e.preventDefault();
       var ele = $(this);
        $.ajax({
           url: '{{ url('update-cart') }}',
           method: "patch",
           data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
           success: function (response) {
               window.location.reload();
           }
        });
    });
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        if(confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
</script>
