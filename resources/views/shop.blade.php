@extends('layouts.app')

@section('title', 'Shop')

@section('content')

    <!-- breadcrumb__area-start -->
    <section class="breadcrumb__area box-plr-75">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb__area-end -->

    <!-- shop-area-start -->
    <div class="shop-area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="product-widget mb-30">
                        <h5 class="pt-title">Product categories</h5>
                        <div class="widget-category-list mt-20">
                            <form action="#">
                                @foreach ($category as $key => $category)
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-{{ $key + 1 }}" name="cat-item">
                                        <label for="cat-item-{{ $key + 1 }}">{{ $category->title }} <span>(12)</span></label>
                                    </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                    <div class="product-widget mb-30">
                        <h5 class="pt-title">Filter By Price</h5>
                        <div class="price__slider mt-30">
                            <div id="slider-range"
                                class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;">
                                </div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                    style="left: 0%;"></span><span tabindex="0"
                                    class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                            </div>
                            <div>
                                <form action="#" class="s-form mt-20">
                                    <input type="text" id="amount" readonly="">
                                    <button type="submit" class="tp-btn-square-lg">Filter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    @if($banner)
                    <div class="shop-banner mb-30">
                        <div class="banner-image">
                            <img class="banner-l" src="{{  asset('assets/admin/media/svg/files/blank-image.svg') }}" alt="">
                            {{-- <img class="banner-sm" src="assets/img/banner/sl-banner-sm.png" alt=""> --}}
                            <div class="banner-content text-center">
                                <p class="banner-text mb-30">{{ $banner->title }}</p>
                                <a href="vendor.html" class="st-btn-d b-radius">{{ $banner->url }}</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="product-lists-top">
                        <div class="product__filter-wrap">
                            <div class="row align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="product__filter d-sm-flex align-items-center">
                                        <div class="product__col">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="FourCol-tab" data-bs-toggle="tab"
                                                        data-bs-target="#" type="button" role="tab" aria-controls="FourCol"
                                                        aria-selected="true">
                                                        <i class="fal fa-th"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__result pl-60">
                                            <p>Showing 1-20 of {{ $product->total() }} results</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="product__filter-right d-flex align-items-center justify-content-md-end">
                                        <div class="product__sorting product__show-no">
                                            <select>
                                                <option>10</option>
                                                <option>20</option>
                                                <option>30</option>
                                                <option>40</option>
                                            </select>
                                        </div>
                                        <div class="product__sorting product__show-position ml-20">
                                            <select>
                                                <option>Latest</option>
                                                <option>New</option>
                                                <option>Up comeing</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                    <div class="product__nav-tab">
                                        <ul class="nav nav-tabs" id="flast-sell-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="computer-tab" data-bs-toggle="tab"
                                                    data-bs-target="#vegetables" type="button" role="tab"
                                                    aria-controls="computer" aria-selected="false">Vegetables</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="samsung-tab" data-bs-toggle="tab"
                                                    data-bs-target="#eggs" type="button" role="tab"
                                                    aria-selected="false">Eggs & Dairy</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="htc-tab" data-bs-toggle="tab"
                                                    data-bs-target="#fish" type="button" role="tab"
                                                    aria-selected="false">Fish & Meat</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nokia-tab" data-bs-toggle="tab"
                                                    data-bs-target="#fruits" type="button" role="tab"
                                                    aria-selected="false">Fruits</button>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="productGridTabContent">
                        <div class="tp-wrapper">
                            <div class="row g-0">
                                {{-- {{ dd($product) }} --}}
                                @foreach ($product as $value)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img" style="height: 213px; width: 213px;">
                                                    <a href="{{ route('product.detail', $value->slug) }}">
                                                        <img class="object-fit" src="{{ $value->image ? $value->image->getUrl() : asset('assets/admin/media/svg/files/blank-image.svg') }}" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0);" id="quick-view" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                        data-bs-target="#productModalId">
                                                        <i class="fal fa-eye"></i>
                                                        <i class="fal fa-eye"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-product-id="{{ $value->id }}" id="add-to-wishlist" class="icon-box icon-box-1">
                                                        <i class="fal fa-heart"></i>
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" id="add-to-cart" class="icon-box icon-box-1">
                                                        <i class="fal fa-shopping-cart"></i>
                                                        <i class="fal fa-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product__content-3">
                                                <h6><a href="{{ route('product.detail', $value->slug) }}">{{ $value->title }}</a>
                                                </h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(0 review)</span>
                                                </div>
                                                <div class="price mb-10">
                                                    <span>Rs {{ $value->price }}</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button"
                                                    class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                    Add to Cart
                                                </button>
                                                <button type="button"
                                                    class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                                    data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Quick View
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tp-pagination text-center">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="basic-pagination pt-30 pb-30">
                                    <nav>
                                        <ul>
                                            @if ($product->currentPage() != 1)
                                                <li>
                                                    <a href="{{ $product->path() . '?page=' . $product->currentPage() - 1 }}">
                                                        <i class="fal fa-angle-double-left"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @for ($i = 1; $i <= $product->lastPage(); $i++)
                                                <li>
                                                    <a href="{{ $product->path() . '?page=' . $i }}" {{ $i == $product->currentPage() ? 'class="active"' : '' }}>{{ $i }}</a>
                                                </li>
                                            @endfor
                                            {{-- <li>
                                                <a href="#">2</a>
                                            </li>
                                            <li>
                                                <a href="#">3</a>
                                            </li>
                                            <li>
                                                <a href="#">5</a>
                                            </li>
                                            <li>
                                                <a href="#">6</a>
                                            </li> --}}
                                            @if ($product->currentPage() != $product->lastPage())
                                                <li>
                                                    <a href="{{ $product->path() . '?page=' . $product->currentPage() + 1 }}">
                                                        <i class="fal fa-angle-double-right"></i>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop-area-end -->

@endsection
