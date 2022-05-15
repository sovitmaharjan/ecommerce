@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <!-- page-banner-area-start -->
    <div class="page-banner-area page-banner-height-2" data-background="assets/img/banner/page-banner-4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-banner-content text-center">
                        <h4 class="breadcrumb-title">My account</h4>
                        <div class="breadcrumb-two">
                            <nav>
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="breadcrumb-menu">
                                        <li class="breadcrumb-trail">
                                            <a href="index.html"><span>Home</span></a>
                                        </li>
                                        <li class="trail-item">
                                            <span>My account</span>
                                        </li>
                                    </ul>
                                </nav>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-banner-area-end -->

    <!-- account-area-start -->
    <div class="account-area mt-70 mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="basic-login mb-50">
                        <h5>Login</h5>
                        <form action="{{ route('customer.post.login') }}" method="POST">
                            @csrf
                            <label for="email">Email<span>*</span></label>
                            <input id="email" type="text" placeholder="Enter Username" name="email" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <label for="password">Password <span>*</span></label>
                            <input id="password" type="password" name="password" placeholder="Enter password..." value="{{ old('password') }}">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="login-action mb-10 fix">
                                {{-- <span class="log-rem f-left">
                                    <input id="remember" type="checkbox">
                                    <label for="remember">Remember me</label>
                                </span> --}}
                                <span class="forgot-login f-right">
                                    <a href="#">Lost your password?</a>
                                </span>
                            </div>
                            <button type="submit" class="tp-in-btn w-100">log in</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    {{-- @dd($errors->all()) --}}
                    <div class="basic-login">
                        <h5>Register</h5>
                        <form action="{{ route('customer.post.register') }}" method="POST">
                            @csrf
                            <div>
                                <label for="name">Fullname <span>*</span></label>
                                <input id="name" type="text" placeholder="Enter Name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email-id">Email Address <span>*</span></label>
                                <input id="email-id" type="text" placeholder="Email address..." name="email" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="password">Password <span>*</span></label>
                                <input id="password" type="password" placeholder="Enter password..." name="password">
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="password">Confirm Password <span>*</span></label>
                                <input id="password" type="password" placeholder="Enter password..." name="password_confirmation">
                            </div>
                            {{-- <div class="login-action mb-10 fix">
                                <p>Your personal data will be used to support your experience throughout this website, to
                                    manage access to your account, and for other purposes described in our <a
                                        href="#">privacy policy</a>.</p>
                            </div> --}}
                            <button type="submit" href="login.html" class="tp-in-btn w-100">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- account-area-end -->

    <!-- cta-area-start -->
    <section class="cta-area d-ldark-bg pt-55 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="cta-item cta-item-d mb-30">
                        <h5 class="cta-title">Follow Us</h5>
                        <p>We make consolidating, marketing and tracking your social media website easy.</p>
                        <div class="cta-social">
                            <div class="social-icon">
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                                <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="rss"><i class="fas fa-rss"></i></a>
                                <a href="#" class="dribbble"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cta-item mb-30">
                        <h5 class="cta-title">Sign Up To Newsletter</h5>
                        <p>Join 60.000+ subscribers and get a new discount coupon on every Saturday.</p>
                        <div class="subscribe__form">
                            <form action="#">
                                <input type="email" placeholder="Enter your email here...">
                                <button>subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cta-item mb-30">
                        <h5 class="cta-title">Download App</h5>
                        <p>DukaMarket App is now available on App Store & Google Play. Get it now.</p>
                        <div class="cta-apps">
                            <div class="apps-store">
                                <a href="#"><img src="assets/img/brand/app_ios.png" alt=""></a>
                                <a href="#"><img src="assets/img/brand/app_android.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- cta-area-end -->
@endsection
