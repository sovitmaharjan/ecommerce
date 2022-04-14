@extends('admin.layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Order</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Catalog</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-dark">Order</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <div class="m-0">
                        <a href="{{ route('order.index') }}"
                            class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder">
                            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                        fill="black"></path>
                                    <path opacity="0.3"
                                        d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                            List
                        </a>
                    </div>
                    {{-- <a href="{{ route('order.create') }}" class="btn btn-sm btn-primary">Create</a> --}}
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                        <div class="card card-flush py-4 flex-row-fluid">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Order Details (#{{ $order->order_number }})</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <tbody class="fw-bold text-gray-600">
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                                            <path opacity="0.3" d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z" fill="black" />
                                                            <path d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    Date Added</div>
                                                </td>
                                                <td class="fw-bolder text-end">{{ $order->created_at->format('Y-m-d') }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="black" />
                                                            <path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="black" />
                                                            <path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    Payment Method</div>
                                                </td>
                                                <td class="fw-bolder text-end">Cash on delivery</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z" fill="black" />
                                                            <path opacity="0.3" d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    Shipping Method</div>
                                                </td>
                                                <td class="fw-bolder text-end">Flat Shipping Rate</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card card-flush py-4 flex-row-fluid">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Customer Details</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <tbody class="fw-bold text-gray-600">
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
                                                            <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    Customer</div>
                                                </td>
                                                <td class="fw-bolder text-end">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="symbol symbol-circle symbol-25px overflow-hidden me-3">
                                                            {{-- <a href="../../demo1/dist/apps/user-management/users/view.html"> --}}
                                                                <div class="symbol-label">
                                                                    <img src="{{ asset('assets/admin/media/avatars/300-23.jpg') }}" alt="Dan Wilson" class="w-100" />
                                                                </div>
                                                            {{-- </a> --}}
                                                        </div>
                                                        {{-- <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-600 text-hover-primary"> --}}
                                                            {{ $order->user->name }}
                                                        {{-- </a> --}}
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black" />
                                                            <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    Email</div>
                                                </td>
                                                <td class="fw-bolder text-end">
                                                    <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-600 text-hover-primary">{{ $order->user->email }}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M5 20H19V21C19 21.6 18.6 22 18 22H6C5.4 22 5 21.6 5 21V20ZM19 3C19 2.4 18.6 2 18 2H6C5.4 2 5 2.4 5 3V4H19V3Z" fill="black" />
                                                            <path opacity="0.3" d="M19 4H5V20H19V4Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    Phone</div>
                                                </td>
                                                <td class="fw-bolder text-end">+6141 234 567</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-lg-n2 me-auto">
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_summary">Order Summary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_history">Order History</a>
                            </li>
                        </ul>
                        {{-- <a href="../../demo1/dist/apps/ecommerce/sales/listing.html" class="btn btn-icon btn-light-primary btn-sm ms-auto me-lg-n7">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
                                </svg>
                            </span>
                            
                        </a>
                        <a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="btn btn-light-primary btn-sm me-lg-n7">Edit Order</a>
                        <a href="../../demo1/dist/apps/ecommerce/sales/add-order.html" class="btn btn-light-primary btn-sm">Add New Order</a> --}}
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                                    <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                        <div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
                                            <img src="assets/media/icons/duotune/ecommerce/ecm001.svg" class="w-175px" />
                                        </div>
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Payment Address</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">Unit 1/23 Hastings Road,
                                        <br />Melbourne 3000,
                                        <br />Victoria,
                                        <br />Australia.</div>
                                    </div>
                                    <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                        <div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
                                            <img src="assets/media/icons/duotune/ecommerce/ecm006.svg" class="w-175px" />
                                        </div>
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Shipping Address</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">Unit 1/23 Hastings Road,
                                        <br />Melbourne 3000,
                                        <br />Victoria,
                                        <br />Australia.</div>
                                    </div>
                                </div>
                                <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Order #{{ $order->order_number }}</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                        <th class="min-w-175px">Product</th>
                                                        <th class="min-w-100px text-end">SKU</th>
                                                        <th class="min-w-70px text-end">Qty</th>
                                                        <th class="min-w-100px text-end">Unit Price</th>
                                                        <th class="min-w-100px text-end">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-bold text-gray-600">
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/1.gif);"></span>
                                                                </a>
                                                                <div class="ms-5">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="fw-bolder text-gray-600 text-hover-primary">Product 1</a>
                                                                    <div class="fs-7 text-muted">Delivery Date: 31/12/2021</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">02222006</td>
                                                        <td class="text-end">2</td>
                                                        <td class="text-end">$120.00</td>
                                                        <td class="text-end">$240.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/100.gif);"></span>
                                                                </a>
                                                                <div class="ms-5">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="fw-bolder text-gray-600 text-hover-primary">Footwear</a>
                                                                    <div class="fs-7 text-muted">Delivery Date: 31/12/2021</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">03502001</td>
                                                        <td class="text-end">1</td>
                                                        <td class="text-end">$24.00</td>
                                                        <td class="text-end">$24.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="text-end">Subtotal</td>
                                                        <td class="text-end">$264.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="text-end">VAT (0%)</td>
                                                        <td class="text-end">$0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="text-end">Shipping Rate</td>
                                                        <td class="text-end">$5.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="fs-3 text-dark text-end">Grand Total</td>
                                                        <td class="text-dark fs-3 fw-boldest text-end">$269.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_sales_order_history" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <div class="card card-flush py-4 flex-row-fluid">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Order History</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                        <th class="min-w-100px">Date Added</th>
                                                        <th class="min-w-175px">Comment</th>
                                                        <th class="min-w-70px">Order Status</th>
                                                        <th class="min-w-100px">Customer Notifed</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-bold text-gray-600">
                                                    <tr>
                                                        <td>31/12/2021</td>
                                                        <td>Order completed</td>
                                                        <td>
                                                            <div class="badge badge-light-success">Completed</div>
                                                        </td>
                                                        <td>No</td>
                                                    </tr>
                                                    <tr>
                                                        <td>30/12/2021</td>
                                                        <td>Order received by customer</td>
                                                        <td>
                                                            <div class="badge badge-light-success">Delivered</div>
                                                        </td>
                                                        <td>Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>29/12/2021</td>
                                                        <td>Order shipped from warehouse</td>
                                                        <td>
                                                            <div class="badge badge-light-primary">Delivering</div>
                                                        </td>
                                                        <td>Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28/12/2021</td>
                                                        <td>Payment received</td>
                                                        <td>
                                                            <div class="badge badge-light-primary">Processing</div>
                                                        </td>
                                                        <td>No</td>
                                                    </tr>
                                                    <tr>
                                                        <td>27/12/2021</td>
                                                        <td>Pending payment</td>
                                                        <td>
                                                            <div class="badge badge-light-warning">Pending</div>
                                                        </td>
                                                        <td>No</td>
                                                    </tr>
                                                    <tr>
                                                        <td>26/12/2021</td>
                                                        <td>Payment method updated</td>
                                                        <td>
                                                            <div class="badge badge-light-warning">Pending</div>
                                                        </td>
                                                        <td>No</td>
                                                    </tr>
                                                    <tr>
                                                        <td>25/12/2021</td>
                                                        <td>Payment method expired</td>
                                                        <td>
                                                            <div class="badge badge-light-danger">Failed</div>
                                                        </td>
                                                        <td>Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>24/12/2021</td>
                                                        <td>Pending payment</td>
                                                        <td>
                                                            <div class="badge badge-light-warning">Pending</div>
                                                        </td>
                                                        <td>No</td>
                                                    </tr>
                                                    <tr>
                                                        <td>23/12/2021</td>
                                                        <td>Order received</td>
                                                        <td>
                                                            <div class="badge badge-light-warning">Pending</div>
                                                        </td>
                                                        <td>Yes</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-flush py-4 flex-row-fluid">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Order Data</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5">
                                                <tbody class="fw-bold text-gray-600">
                                                    <tr>
                                                        <td class="text-muted">IP Address</td>
                                                        <td class="fw-bolder text-end">172.68.221.26</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Forwarded IP</td>
                                                        <td class="fw-bolder text-end">89.201.163.49</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">User Agent</td>
                                                        <td class="fw-bolder text-end">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Accept Language</td>
                                                        <td class="fw-bolder text-end">en-GB,en-US;q=0.9,en;q=0.8</td>
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
        </div>
    </div>
@endSection
@section('script')
    <script src="{{ asset('assets/admin/js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>
@endSection
