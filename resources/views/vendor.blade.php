@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- page-banner-area-start -->
    <div class="page-banner-area page-banner-height-2" data-background="assets/img/banner/page-banner-4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-banner-content text-center">
                        <h4 class="breadcrumb-title">Groceries</h4>
                        <div class="breadcrumb-two">
                            <nav>
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="breadcrumb-menu">
                                        <li class="breadcrumb-trail">
                                            <a href="index.html"><span>Home</span></a>
                                        </li>
                                        <li class="trail-item">
                                            <span>Groceries</span>
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

    <!-- news-detalis-area-start -->
    <div class="blog-area mt-120 mb-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-7">
                    <div class="row">
                        @foreach ($vendor as $value)
                            <div class="col-xl-4">
                                <div class="single-smblog mb-30">
                                    <div class="smblog-thum">
                                        <div class="blog-image w-img">
                                            <a href="#"><img src="{{
                                                $value->profile ? 
                                                    $value->profile->image ?
                                                        $value->profile->image->getUrl()
                                                        : asset('assets/admin/media/svg/files/blank-image.svg')
                                                    : asset('assets/img/blog/sm-b2-1.jpg') 
                                                }}"
                                            alt=""></a>
                                        </div>
                                        <div class="blog-tag blog-tag-2">
                                            <a href="#">Groceries</a>
                                        </div>
                                    </div>
                                    <div class="smblog-content smblog-content-3">
                                        <h6><a href="#">{{ $value->profile->shop_name }}</a></h6>
                                        <span class="author mb-10">{{ $value->profile->address }}</span>
                                        <p>Delivery Hours: 10:00 AM to 7:00 PM</p>
                                        <div class="smblog-foot pt-15">
                                            <div class="post-readmore">
                                                <a href="{{ route('shop') }}"> View Products <span class="icon"></span></a>
                                            </div>
                                            <div class="post-date">
                                                <a>Fresh Groceries</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-xl-4">
                            <div class="single-smblog mb-30">
                                <div class="smblog-thum">
                                    <div class="blog-image w-img">
                                        <a href="#"><img src="assets/img/blog/sm-b2-1.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-tag blog-tag-2">
                                        <a href="#">Groceries</a>
                                    </div>
                                </div>
                                <div class="smblog-content smblog-content-3">
                                    <h6><a href="#">Shop 2</a></h6>
                                    <span class="author mb-10">Bagbazar, Ktm <a href="#">(approx 2.65 km)</a></span>
                                    <p>Delivery Hours: 10:00 AM to 7:00 PM</p>
                                    <div class="smblog-foot pt-15">
                                        <div class="post-readmore">
                                            <a href="#"> View Products <span class="icon"></span></a>
                                        </div>
                                        <div class="post-date">
                                            <a>Fresh Groceries</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single-smblog mb-30">
                                <div class="smblog-thum">
                                    <div class="blog-image w-img">
                                        <a href="#"><img src="assets/img/blog/sm-b2-1.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-tag blog-tag-2">
                                        <a href="#">Groceries</a>
                                    </div>
                                </div>
                                <div class="smblog-content smblog-content-3">
                                    <h6><a href="#">Shop 3</a></h6>
                                    <span class="author mb-10">Bagbazar, Ktm <a href="#">(approx 2.65 km)</a></span>
                                    <p>Delivery Hours: 10:00 AM to 7:00 PM</p>
                                    <div class="smblog-foot pt-15">
                                        <div class="post-readmore">
                                            <a href="#"> View Products <span class="icon"></span></a>
                                        </div>
                                        <div class="post-date">
                                            <a>Fresh Groceries</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single-smblog mb-30">
                                <div class="smblog-thum">
                                    <div class="blog-image w-img">
                                        <a href="#"><img src="assets/img/blog/sm-b2-1.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-tag blog-tag-2">
                                        <a href="#">Groceries</a>
                                    </div>
                                </div>
                                <div class="smblog-content smblog-content-3">
                                    <h6><a href="#">Shop 1</a></h6>
                                    <span class="author mb-10">Bagbazar, Ktm <a href="#">(approx 2.65 km)</a></span>
                                    <p>Delivery Hours: 10:00 AM to 7:00 PM</p>
                                    <div class="smblog-foot pt-15">
                                        <div class="post-readmore">
                                            <a href="#"> View Products <span class="icon"></span></a>
                                        </div>
                                        <div class="post-date">
                                            <a>Fresh Groceries</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xl-4">
                            <div class="single-smblog mb-30">
                                <div class="smblog-thum">
                                    <div class="blog-image w-img">
                                        <a href="#"><img src="assets/img/blog/sm-b2-1.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-tag blog-tag-2">
                                        <a href="#">Groceries</a>
                                    </div>
                                </div>
                                <div class="smblog-content smblog-content-3">
                                    <h6><a href="#">Shop 1</a></h6>
                                    <span class="author mb-10">Bagbazar, Ktm <a href="#">(approx 2.65 km)</a></span>
                                    <p>Delivery Hours: 10:00 AM to 7:00 PM</p>
                                    <div class="smblog-foot pt-15">
                                        <div class="post-readmore">
                                            <a href="#"> View Products <span class="icon"></span></a>
                                        </div>
                                        <div class="post-date">
                                            <a>Fresh Groceries</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single-smblog mb-30">
                                <div class="smblog-thum">
                                    <div class="blog-image w-img">
                                        <a href="#"><img src="assets/img/blog/sm-b2-1.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-tag blog-tag-2">
                                        <a href="#">Groceries</a>
                                    </div>
                                </div>
                                <div class="smblog-content smblog-content-3">
                                    <h6><a href="#">Shop 1</a></h6>
                                    <span class="author mb-10">Bagbazar, Ktm <a href="#">(approx 2.65 km)</a></span>
                                    <p>Delivery Hours: 10:00 AM to 7:00 PM</p>
                                    <div class="smblog-foot pt-15">
                                        <div class="post-readmore">
                                            <a href="#"> View Products <span class="icon"></span></a>
                                        </div>
                                        <div class="post-date">
                                            <a>Fresh Groceries</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="basic-pagination text-center pt-30 pb-30">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="vendor.html" class="active">1</a>
                                        </li>
                                        <li>
                                            <a href="vendor.html">2</a>
                                        </li>
                                        <li>
                                            <a href="vendor.html">3</a>
                                        </li>
                                        <li>
                                            <a href="vendor.html">5</a>
                                        </li>
                                        <li>
                                            <a href="vendor.html">6</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fal fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- news-detalis-area-end  -->

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
