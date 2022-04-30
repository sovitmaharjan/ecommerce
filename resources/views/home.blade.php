@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- slider-area-start -->
<div class="slider-area">
    <div class="swiper-container slider__active">
        <div class="slider-wrapper swiper-wrapper">
            @foreach ($data['slider'] as $slider)
                <div class="single-slider swiper-slide slider-height d-flex align-items-center"
                    data-background="{{ $slider->image ? $slider->image->getUrl() : asset('assets/admin/media/svg/files/blank-image.svg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="slider-content">
                                    <h2 data-animation="fadeInLeft" data-delay="1.7s"
                                        class="pt-15 slider-title pb-5">{{ $slider->title }}
                                    </h2>
                                    <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.9s">
                                        {{ $slider->description }}</p>
                                    <div class="slider-bottom-btn mt-75">
                                        <a data-animation="fadeInUp" data-delay="1.15s" href="{{ $slider->url }}"
                                            class="st-btn-b b-radius">Discover now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /single-slider -->
            @endforeach
            <div class="main-slider-paginations"></div>
        </div>
    </div>
</div>
<!-- slider-area-end -->

<!-- features__area-start -->
<section class="features__area pt-20">
    <div class="container">
        <div
            class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
            <div class="col">
                <div class="features__item d-flex white-bg">
                    <div class="features__icon mr-20">
                        <i class="fal fa-truck"></i>
                    </div>
                    <div class="features__content">
                        <h6>DELIVERY</h6>
                        <p>For all orders over</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="features__item d-flex white-bg">
                    <div class="features__icon mr-20">
                        <i class="fal fa-money-check"></i>
                    </div>
                    <div class="features__content">
                        <h6>SAFE PAYMENT</h6>
                        <p>100% secure payment</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="features__item d-flex white-bg">
                    <div class="features__icon mr-20">
                        <i class="fal fa-comments-alt"></i>
                    </div>
                    <div class="features__content">
                        <h6>24/7 HELP CENTER</h6>
                        <p>Delicated 24/7 support</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="features__item features__item-last d-flex white-bg">
                    <div class="features__icon mr-20">
                        <i class="fad fa-user-headset"></i>
                    </div>
                    <div class="features__content">
                        <h6>FRIENDLY SERVICES</h6>
                        <p>30 day satisfaction guarantee</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features__area-end -->

<!-- banner__area-start -->
<section class="banner__area pt-20 pb-10">
    <div class="container">
        <div class="row">
            @foreach ($data['first_category_section'] as $key => $category)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="banner__item p-relative w-img mb-30">
                        <div class=" ">
                            <a href="vendor.html"><img src="{{ $category->image ? $category->image->getUrl() : asset('assets/admin/media/svg/files/blank-image.svg') }}"
                                    alt=""></a>
                        </div>
                        <div class="banner__content">
                            <h6><a href="vendor.html">{{ $category->title }} <br></a></h6>
                            <p>{{ $category->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- banner__area-end -->

<!-- topsell__area-start -->
<section class="topsell__area-1 pt-15">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section__head d-flex justify-content-between mb-10">
                    <div class="section__title">
                        <h5 class="st-titile-d">Top Deals Of The Day</h5>
                    </div>
                    <div class="offer-time">
                        <span class="offer-title d-none d-sm-block">Hurry Up! Offer ends in:</span>
                        <div class="countdown">
                            <div class="countdown-inner b-radius" data-countdown=""
                                data-date="Mar 02 2022 20:20:22">
                                <ul class="text-center">
                                    <li><span data-days="">36</span> Days</li>
                                    <li><span data-hours="">8</span> Hours</li>
                                    <li><span data-minutes="">16</span> Mins</li>
                                    <li><span data-seconds="">54</span> Secs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product-bs-slider">
                <div class="product-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="product__item swiper-slide">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/features-product/product1.jpg') }}"
                                            alt="product">
                                    </a>
                                </div>
                                <div class="product__offer">
                                    <span class="discount">-15%</span>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular 64G</a>
                                </h6>
                                <div class="rating mb-5">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price mb-10">
                                    <span>Rs 105</span>
                                </div>
                                <div class="progress mb-5">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 10%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-rate">
                                    <span>Sold:312/1225</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                        <div class="product__item swiper-slide">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/features-product/product3.jpg') }}"
                                            alt="product">
                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <h6><a href="product-details.html">Men Size Yellow Basketball Jerseys</a></h6>
                                <div class="rating mb-5">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price mb-10">
                                    <span>Rs 105</span>
                                </div>
                                <div class="progress mb-5">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-rate">
                                    <span>Sold:315/1225</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                        <div class="product__item swiper-slide">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/features-product/product4.jpg') }}"
                                            alt="product">
                                    </a>
                                </div>
                                <div class="product__offer">
                                    <span class="discount">-9%</span>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <h6><a href="product-details.html">Xbox Wireless Game Controller Pink</a></h6>
                                <div class="rating mb-5">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price mb-10">
                                    <span>Rs 200</span>
                                </div>
                                <div class="progress mb-5">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-rate">
                                    <span>Sold:370/1225</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                        <div class="product__item swiper-slide">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/features-product/product5.jpg') }}"
                                            alt="product">
                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <h6><a href="product-details.html">Wireless Bluetooth Over-Ear Headphones</a>
                                </h6>
                                <div class="rating mb-5">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price mb-10">
                                    <span>Rs 100</span>
                                </div>
                                <div class="progress mb-5">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-rate">
                                    <span>Sold:420/1225</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                        <div class="product__item swiper-slide">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/features-product/product2.jpg') }}"
                                            alt="product">
                                    </a>
                                </div>
                                <div class="product__offer">
                                    <span class="discount">-10%</span>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <h6><a href="product-details.html">Solo3 Wireless On-Ear Headphones</a></h6>
                                <div class="rating mb-5">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price mb-10">
                                    <span><del>Rs 270</del> Rs 200</span>
                                </div>
                                <div class="progress mb-5">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 10%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-rate">
                                    <span>Sold:312/1225</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                        <div class="product__item swiper-slide">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/features-product/product1.jpg') }}"
                                            alt="product">
                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <h6><a href="product-details.html">Vifa Bluetooth Portable Wireless Speaker</a>
                                </h6>
                                <div class="rating mb-5">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price mb-10">
                                    <span>Rs 150</span>
                                </div>
                                <div class="progress mb-5">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 10%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-rate">
                                    <span>Sold:370/1225</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="bs-button bs-button-prev"><i class="fal fa-chevron-left"></i></div>
                <div class="bs-button bs-button-next"><i class="fal fa-chevron-right"></i></div>
            </div>
        </div>
    </div>
</section>
<!-- topsell__area-end -->

<!-- banner__area-start -->
<section class="banner__area banner__area-d pb-10">
    <div class="container">
        <div class="row">
            @foreach ($data['second_category_section'] as $category)
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="banner__item p-relative w-img mb-30">
                        <div class="banner__img">
                            <a href="vendor.html"><img src="{{ $category->image ? $category->image->getUrl() : asset('assets/admin/media/svg/files/blank-image.svg') }}"
                                    alt=""></a>
                        </div>
                        <div class="banner__content">
                            <span>{{ $category->title }}</span>
                            <p>{{ $category->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- banner__area-end -->

<!-- topsell__area-start -->
<section class="topsell__area-2 pt-15">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section__head d-flex justify-content-between mb-10">
                    <div class="section__title">
                        <h5 class="st-titile">Top Selling Products</h5>
                    </div>
                    <div class="product__nav-tab">
                        <ul class="nav nav-tabs" id="flast-sell-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="computer-tab" data-bs-toggle="tab"
                                    data-bs-target="#computer" type="button" role="tab" aria-controls="computer"
                                    aria-selected="false">Vegetables</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="samsung-tab" data-bs-toggle="tab"
                                    data-bs-target="#samsung" type="button" role="tab"
                                    aria-selected="false">Eggs & Dairy</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="htc-tab" data-bs-toggle="tab"
                                    data-bs-target="#htc" type="button" role="tab" aria-selected="false">Fish &
                                    Meat</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nokia-tab" data-bs-toggle="tab"
                                    data-bs-target="#nokia" type="button" role="tab"
                                    aria-selected="false">Fruits</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tab-content" id="flast-sell-tabContent">
                    <div class="tab-pane fade active show" id="computer" role="tabpanel"
                        aria-labelledby="computer-tab">
                        <div class="product-bs-slider-2">
                            <div class="product-slider-2 swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product1.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-15%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular
                                                    64G</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 105</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product2.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Men Size Yellow Basketball
                                                    Jerseys</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 105</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product3.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-9%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Xbox Wireless Game Controller
                                                    Pink</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 200</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product4.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Wireless Bluetooth Over-Ear
                                                    Headphones</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 100</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product5.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-10%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Solo3 Wireless On-Ear
                                                    Headphones</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span><del>Rs 270</del> Rs 200</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product1.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Vifa Bluetooth Portable Wireless
                                                    Speaker</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 150</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
                            <div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="samsung" role="tabpanel" aria-labelledby="samsung-tab">
                        <div class="product-bs-slider-2">
                            <div class="product-slider-2 swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product2.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-15%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular
                                                    64G</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 105</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product2.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Wireless Bluetooth Over-Ear
                                                    Headphones</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 100</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product3.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-10%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Solo3 Wireless On-Ear
                                                    Headphones</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span><del>Rs 270</del> Rs 200</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product4.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Vifa Bluetooth Portable Wireless
                                                    Speaker</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 150</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product4.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Men Size Yellow Basketball
                                                    Jerseys</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 105</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product5.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-9%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Xbox Wireless Game Controller
                                                    Pink</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 200</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- If we need navigation buttons -->
                            </div>
                            <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
                            <div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="htc" role="tabpanel" aria-labelledby="htc-tab">
                        <div class="product-bs-slider-2">
                            <div class="product-slider-2 swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product1.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Wireless Bluetooth Over-Ear
                                                    Headphones</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 100</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product2.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-10%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Solo3 Wireless On-Ear
                                                    Headphones</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span><del>Rs 270</del> Rs 200</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product3.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Vifa Bluetooth Portable Wireless
                                                    Speaker</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 150</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product4.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-15%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular
                                                    64G</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 105</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/features-product/product5.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Men Size Yellow Basketball
                                                    Jerseys</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 105</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/product/tp-3.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-9%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Xbox Wireless Game Controller
                                                    Pink</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 200/span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
                            <div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nokia" role="tabpanel" aria-labelledby="nokia-tab">
                        <div class="product-bs-slider-2">
                            <div class="product-slider-2 swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/product/tp-1.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-15%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular
                                                    64G</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 105</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/product/tp-2.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Men Size Yellow Basketball
                                                    Jerseys</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 150</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/product/tp-3.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-9%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Xbox Wireless Game Controller
                                                    Pink</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 200</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/product/tp-4.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Wireless Bluetooth Over-Ear
                                                    Headphones</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 100</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/product/tp-5.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-10%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Solo3 Wireless On-Ear
                                                    Headphones</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span><del>Rs 270</del> Rs 200</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/product/tp-6.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Vifa Bluetooth Portable Wireless
                                                    Speaker</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 150</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
                            <div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cell" role="tabpanel" aria-labelledby="cell-tab">
                        <div class="product-bs-slider-2">
                            <div class="product-slider-2 swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/product/tp-1.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-15%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular
                                                    64G</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 105</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/product/tp-2.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Men Size Yellow Basketball
                                                    Jerseys</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 105</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/product/tp-3.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-9%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Xbox Wireless Game Controller
                                                    Pink</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 200</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/product/tp-4.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Wireless Bluetooth Over-Ear
                                                    Headphones</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 100</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/product/tp-5.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-10%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Solo3 Wireless On-Ear
                                                    Headphones</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span><del>Rs 270</del> Rs 200</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('assets/img/product/tp-6.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="product-details.html">Vifa Bluetooth Portable Wireless
                                                    Speaker</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price">
                                                <span>Rs 150</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
                            <div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- topsell__area-end -->

<!-- featured-start -->
<!--   <section class="featured light-bg pt-55 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section__head d-flex justify-content-between mb-30">
                    <div class="section__title">
                        <h5 class="st-titile">Top Featured Products</h5>
                    </div>
                    <div class="button-wrap">
                        <a href="shop.html">See All Product <i class="fal fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="single-features-item single-features-item-d b-radius mb-20">
                    <div class="row  g-0 align-items-center">
                        <div class="col-md-6">
                            <div class="features-thum">
                                <div class="features-product-image w-img">
                                    <a href="product-details.html"><img src="{{ asset('assets/img/features-product/fpb-1.jpg') }}" alt=""></a>
                                </div>
                                <div class="product__offer">
                                    <span class="discount">-15%</span>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product__content product__content-d">
                                <h6><a href="product-details.html">Samsang Galaxy A70 128GB Dual-SIM</a></h6>
                                <div class="rating mb-5">
                                    <ul class="rating-d">
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price d-price mb-10">
                                    <span>Rs 307.00 <del>Rs 110</del></span>
                                </div>
                                <div class="features-des mb-25">
                                    <ul>
                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                    </ul>
                                </div>
                                <div class="cart-option">
                                    <a href="cart.html" class="cart-btn-2 w-100 mr-10">Add to Cart</a>
                                    <a href="cart.html" class="transperant-btn"><i class="fal fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-features-item b-radius mb-20">
                            <div class="row  g-0 align-items-center">
                                <div class="col-6">
                                    <div class="features-thum">
                                        <div class="features-product-image w-img">
                                            <a href="product-details.html"><img src="{{ asset('assets/img/features-product/fp-1.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="product__offer">
                                            <span class="discount">-15%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="product__content product__content-d">
                                        <h6><a href="product-details.html">Epple Watch SE Gold Aluminum</a></h6>
                                        <div class="rating mb-5">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                            <span>(01 review)</span>
                                        </div>
                                        <div class="price d-price">
                                            <span>Rs 307.00 <del>Rs 110</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-features-item b-radius mb-20">
                            <div class="row  g-0 align-items-center">
                                <div class="col-6">
                                    <div class="features-thum">
                                        <div class="features-product-image w-img">
                                            <a href="product-details.html"><img src="{{ asset('assets/img/features-product/fp-2.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="product__offer">
                                            <span class="discount">-5%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="product__content product__content-d">
                                        <h6><a href="product-details.html">G951s Pink Stereo Gaming Headset</a></h6>
                                        <div class="rating mb-5">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                            <span>(01 review)</span>
                                        </div>
                                        <div class="price d-price">
                                            <span>Rs 307.00 <del>Rs 110</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-features-item b-radius mb-20">
                            <div class="row  g-0 align-items-center">
                                <div class="col-6">
                                    <div class="features-thum">
                                        <div class="features-product-image w-img">
                                            <a href="product-details.html"><img src="{{ asset('assets/img/features-product/fp-3.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="product__offer">
                                            <span class="discount">-25%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="product__content product__content-d">
                                        <h6><a href="product-details.html">Solo3 Wireless On-Ear Headphones</a></h6>
                                        <div class="rating mb-5">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                            <span>(01 review)</span>
                                        </div>
                                        <div class="price d-price">
                                            <span>Rs 307.00 <del>Rs 110</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-features-item b-radius mb-20">
                            <div class="row  g-0 align-items-center">
                                <div class="col-6">
                                    <div class="features-thum">
                                        <div class="features-product-image w-img">
                                            <a href="product-details.html"><img src="{{ asset('assets/img/features-product/fp-4.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="product__content product__content-d">
                                        <h6><a href="product-details.html">Men’s Short-Sleeve Pocket Oxford Shirt</a></h6>
                                        <div class="rating mb-5">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                            <span>(01 review)</span>
                                        </div>
                                        <div class="price d-price">
                                            <span>Rs 307.00 <del>Rs 110</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- featured-end -->

<!-- moveing-text-area-start -->
<section class="moveing-text-area">
    <div class="container">
        <div class="ovic-running">
            <div class="wrap">
                <div class="inner">
                    <p class="item">Free UK Delivery - Return Over Rs 100.00 ( Excluding Homeware )
                        | Free UK Collect From Store</p>
                    <p class="item">Design Week / 15% Off the website / Code: AYOSALE-2020</p>
                    <p class="item">Always iconic. Now organic. Introducing the Rs 20 Organic Tee.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- moveing-text-area-end -->

<!-- banner__area-start -->
<section class="banner__area pt-60 pb-25">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="banner__item p-relative w-img mb-30">
                    <div class="banner__img">
                        <a href="product-details.html"><img
                                src="{{ asset('assets/img/banner/banner-6.jpg') }}" alt=""></a>
                    </div>
                    <div class="banner__content banner__content-sd text-center">
                        <div class="banner-button mb-20">
                            <a href="product-details.html" class="st-btn">HOT DEALS</a>
                        </div>
                        <h6><a href="product-details.html">Sale 30% Off <br> Top Computer Case Gaming</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner__item p-relative mb-30 w-img">
                            <div class="banner__img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets/img/banner/banner-7.jpg') }}" alt=""></a>
                            </div>
                            <div class="banner__content banner__content-sd text-center">
                                <h6><a href="product-details.html">Electronic Deals</a></h6>
                                <p>Laptop, Computer, Smartphone, Gampad</p>
                                <div class="banner-button mt-20 d-none d-sm-block">
                                    <a href="product-details.html" class="st-btn-3 b-radius">Shop Deals</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="banner__item p-relative w-img mb-30">
                            <div class="banner__img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets/img/banner/banner-8.jpg') }}" alt=""></a>
                            </div>
                            <div class="banner__content">
                                <h6><a href="product-details.html">Hot Products <br> Laptop Ultra 4K 16”</a>
                                </h6>
                                <p>Discount 20% On Products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="banner__item p-relative mb-30 w-img">
                    <div class="banner__img">
                        <a href="product-details.html"><img
                                src="{{ asset('assets/img/banner/banner-9.jpg') }}" alt=""></a>
                    </div>
                    <div class="banner__content banner__content-sd text-center">
                        <div class="banner-button mb-20">
                            <a href="product-details.html" class="st-btn">HOT DEALS</a>
                        </div>
                        <h6><a href="product-details.html">Sport Edition <br> Best Choice of The Year</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner__area-end -->

<!-- recomand-product-area-start -->
<section class="recomand-product-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section__head d-flex justify-content-between mb-10">
                    <div class="section__title">
                        <h5 class="st-titile">Recommended For You</h5>
                    </div>
                    <div class="button-wrap">
                        <a href="shop.html">See All Product <i class="fal fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="product-bs-slider-2">
                <div class="product-slider-3 swiper-container">
                    <div class="swiper-wrapper">
                        <div class="product__item mb-20 swiper-slide">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/features-product/product1.jpg') }}"
                                            alt="product">
                                    </a>
                                </div>
                                <div class="product__offer">
                                    <span class="discount">-15%</span>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular 64G</a>
                                </h6>
                                <div class="rating mb-5">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>Rs 105</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                        <div class="product__item mb-20 swiper-slide">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/features-product/product2.jpg') }}"
                                            alt="product">
                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <h6><a href="product-details.html">Men Size Yellow Basketball Jerseys</a></h6>
                                <div class="rating mb-5">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>Rs 105</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                        <div class="product__item mb-20 swiper-slide">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/features-product/product3.jpg') }}"
                                            alt="product">
                                    </a>
                                </div>
                                <div class="product__offer">
                                    <span class="discount">-9%</span>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <h6><a href="product-details.html">Xbox Wireless Game Controller Pink</a></h6>
                                <div class="rating mb-5">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>Rs 200</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                        <div class="product__item mb-20 swiper-slide">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/features-product/product1.jpg') }}"
                                            alt="product">
                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <h6><a href="product-details.html">APPO R11s 64GB Dual 20MP Cameras</a></h6>
                                <div class="rating mb-5">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>Rs 150.00</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                        <div class="product__item mb-20 swiper-slide">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/features-product/product5.jpg') }}"
                                            alt="product">
                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <h6><a href="product-details.html">G951s Pink Stereo Gaming Headset</a></h6>
                                <div class="rating mb-5">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>Rs 120.00</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                        <div class="product__item mb-20 swiper-slide">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/features-product/product1.jpg') }}"
                                            alt="product">
                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <h6><a href="product-details.html">Epple iPhone 11 Pro Max 64GB Gold</a></h6>
                                <div class="rating mb-5">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>Rs 120.00</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- recomand-product-area-end -->
@endsection
