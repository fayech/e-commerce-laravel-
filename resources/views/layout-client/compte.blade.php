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
                            <li>My Account</li>
                        </ul>
                    </div>
                    <div class="heading-banner-title">
                        <h1>My Account</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-account-area mt-20">
    <div class="container">
        <div class="row">
            <!--Login Form Start-->
            <div class="col-lg-6 col-md-6">
                <div class="customer-login-register">
                    <div class="form-login-title">
                        <h2>Login</h2>
                    </div>
                    <div class="login-form">
                        <form action="#">
                            <div class="form-fild">
                                <p><label>Username or email address <span class="required">*</span></label></p>
                                <input type="text" name="username" value="">
                            </div>
                            <div class="form-fild">
                                <p><label>Password <span class="required">*</span></label></p>
                                <input type="password" name="password" value="">
                            </div>
                            <div class="login-submit">
                                <button type="submit" class="form-button">Login</button>
                                <label>
                                    <input class="checkbox" type="checkbox" name="rememberme" value="">
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <div class="lost-password">
                                <a href="#">Lost your password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Login Form End-->
            <!--Register Form Start-->
            <div class="col-lg-6 col-md-6">
                <div class="customer-login-register register-pt-0">
                    <div class="form-register-title">
                        <h2>Register</h2>
                    </div>
                    <div class="register-form">
                        <form action="#">
                            <div class="form-fild">
                                <p><label>Username or email address <span class="required">*</span></label></p>
                                <input type="text" name="username" value="">
                            </div>
                            <div class="form-fild">
                                <p><label>Password <span class="required">*</span></label></p>
                                <input type="password" name="password" value="">
                            </div>
                            <div class="register-submit">
                                <button type="submit" class="form-button">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Register Form End-->
        </div>
    </div>
</section>
@endsection
