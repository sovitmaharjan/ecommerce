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
                    <h5 class="sidebar-title">Customer Wishlist</h5>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="single-smblog">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="product-price">Unit Price</th>
                                                <th class="product-remove">Product Detail</th>
                                                <th class="product-remove">Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($wishlist as $value)
                                                <tr>
                                                    <td class="product-thumbnail" align="center">
                                                        <div style="height: 125px; width: 125px;">
                                                            <a
                                                                href="{{ route('product.detail', $value->product->slug) }}">
                                                                <img class="object-fit"
                                                                    src="{{ $value->product->image ? $value->product->image->getUrl() ?? asset('no-image.png') : asset('no-image.png') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="{{ route('product.detail', $value->product->slug) }}">
                                                            {{ $value->product->title }}
                                                        </a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amount">Rs.
                                                            {{ $value->product->price }}</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <a class="btn btn-warning"
                                                            href="{{ route('product.detail', $value->product->slug) }}"><i
                                                                class="fa fa-info-circle"></i> Product Detail</a>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <a data-id="{{ $value->id }}" class="btn btn-danger remove"
                                                            href="javascript:void(0);"><i class="fa fa-times"></i>
                                                            Remove</a>
                                                    </td>
                                                </tr>
                                            @endforeach
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

@section('script')
    {{-- <script>
        $(document).on('click', '.remove', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var id = $(this).data('id');
            var url = "{{ route('customer.wishlist.destroy', ':id') }}";
            url = url.replace(':id', id);

            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    "_method": 'DELETE'
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(response) {
                    console.log(response.responseText);
                }
            });
        })
    </script> --}}
@endsection
