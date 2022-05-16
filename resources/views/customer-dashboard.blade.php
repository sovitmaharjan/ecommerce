@extends('layouts.app')

@section('title', 'Customer Dashboard')

@section('content')

    <section class="breadcrumb__area box-plr-75">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Customer Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="shop-area mb-85">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    @include('layouts.sidebar')
                </div>
                <div class="col-xl-9 col-lg-8">
                    <h5 class="sidebar-title">Customer Dashboard</h5>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="single-smblog mb-30">
                                <div class="smblog-content smblog-content-3"
                                    style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                                    <h5>Personal Info <a href="{{ route('customer.profile') }}" class="btn">Edit</a></h5>
                                    <p class="mt-20">{{ Auth::user()->name ?? 'N/A' }}</p>
                                    <p>{{ Auth::user()->email ?? 'N/A' }}</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="single-smblog mb-30">
                                <div class="smblog-content smblog-content-3"
                                    style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                                    <h5>Address<a href="#" class="btn">Add New</a></h5>
                                    <p class="mt-20">Kathmandu</p>
                                    <p>Bagmati</p>

                                </div>
                            </div>
                        </div>
                        <h5>Recent Order</h5>
                        <div class="col-xl-12">
                            <div class="single-smblog">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Order</th>
                                                <th class="cart-product-name">Order date</th>
                                                <th class="product-price">Items</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-thumbnail"><a href="shop-details.html"><img
                                                            src="assets/img/cart/shop-p-10.jpg" alt=""
                                                            style="height: 40px; width: 40px;"></a></td>
                                                <td class="product-name"><a href="shop-details.html">Light Jacket</a>
                                                </td>
                                                <td class="product-price"><span class="amount">$130.00</span>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">$130.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-thumbnail"><a href="shop-details.html"><img
                                                            src="assets/img/cart/shop-p-11.jpg" alt=""
                                                            style="height: 40px; width: 40px;"></a></td>
                                                <td class="product-name"><a href="shop-details.html">Pink Jacket</a>
                                                </td>
                                                <td class="product-price"><span class="amount">$120.50</span>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">$120.50</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
