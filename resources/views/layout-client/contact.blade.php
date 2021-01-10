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
                            <li>Contact</li>
                        </ul>
                    </div>
                    <div class="heading-banner-title">
                        <h1>Contact</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-form-area mt-20">
    <div class="container">
        <div class="row">
            <!--Contact Form Start-->
            <div class="col-lg-7">
                <div class="contact-form-title">
                    <h2>TELL US YOUR PROJECT</h2>
                </div>
                <div class="contact-form">
                    <form id="contact-form" action="https://demo.hasthemes.com/javenist-v3/Javenist/mail.php" method="post">
                        <div class="contact-input">
                            <div class="first-name">
                                <input type="text" name="first_name" placeholder="First Name *">
                            </div>
                            <div class="last-name">
                                <input type="text" name="last_name" placeholder="Last Name *">
                            </div>
                            <div class="email">
                                <input type="email" name="email" placeholder="Email *">
                            </div>
                            <div class="subject">
                                <input type="text" name="subject" placeholder="Subject *">
                            </div>
                        </div>
                        <div class="contact-message mb-20">
                            <div class="message pr-10 pr-xs-0">
                                <textarea name="message" cols="40" rows="10" placeholder="Message *"></textarea>
                            </div>
                        </div>
                        <div class="contact-submit">
                            <button type="submit" class="form-button">Send Email</button>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
            <!--Contact Form End-->
            <!--Contact Address Start-->
            <div class="col-lg-5">
                <div class="contact-address-info">
                    <div class="contact-form-title">
                        <h2>CONTACT US</h2>
                    </div>
                    <div class="contact-description mb-35">
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                    </div>
                    <div class="contact-address mb-35">
                        <ul>
                            <li><i class="fa fa-fax"></i> Address : No 40 Baria Sreet 133/2 NewYork City</li>
                            <li><i class="fa fa-phone"></i> 0(1234) 567 890</li>
                            <li><i class="fa fa-envelope-o"></i> Infor@chairman.com</li>
                        </ul>
                    </div>
                    <div class="woring-hours mb-35">
                        <h3><strong>Working hours</strong></h3>
                        <p><strong>Monday – Saturday</strong>:  08AM – 22PM</p>
                    </div>
                </div>
            </div>
            <!--Contact Address End-->
        </div>
    </div>
</section>

@endsection
