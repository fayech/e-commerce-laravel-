<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
      <h1>INVOICE 3-2-1</h1>
      <div id="company" class="clearfix">
        <div>Company Name</div>
        <div>455 Foggy Heights,<br /> AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div>
      <div id="project">
        <div><span>PROJECT</span> Website development</div>
        <div><span>CLIENT</span> John Doe</div>
        <div><span>ADDRESS</span> 796 Silver Harbour, TX 79273, US</div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
        <div><span>DATE</span> August 17, 2015</div>
        <div><span>DUE DATE</span> September 17, 2015</div>
        <a class="btn btn-primary" href="{{ URL::to('article/pdf') }}">Export to PDF</a>

      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">SERVICE</th>
            <th class="desc">DESCRIPTION</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
          </tr>
        </thead>

        <tbody>
            <?php $total = 0 ?>

            @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            <?php $total += $details['price'] * $details['quantity'] ?>
            <tr>

                <td class="product-cart-img">
                    <a href="#"><img src="{{asset('images/article')}}/{{ $details['photo'] }}" style="    width: auto;
                        height: 40%;"  alt="{{$details['photo']}}"></a>
                </td>
                <td class="product-name">
                    <a href="#">{{ $details['name'] }}</a>
                </td>
                <td class="product-quantity">
                    <a href="#">{{  $details['quantity'] }}</a>

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
            <tr class="cart-subtotal">
                <td ><span>total:</span></td>
                <td data-title="Subtotal"><span>{{ $total }}TND</span></td>
            </tr>

        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>
