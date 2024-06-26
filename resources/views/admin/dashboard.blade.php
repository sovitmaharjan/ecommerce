@extends('admin.layouts.app')

@section('style')
    <link href="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/admin/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">eCommerce Dashboard</h1>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="#" class="btn btn-sm btn-light">Manage
                        Sales</a>
                    <a href="#" class="btn btn-sm btn-primary">Add
                        Product</a>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="row g-5 g-xl-10 mb-xl-10">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <div class="d-flex align-items-center">
                                        <span class="fs-2hx fw-bolder text-dark me-2 lh-1">1,836</span>
                                        <span class="badge badge-danger fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                            style="height: 22px">
                                            <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.5"
                                                        d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z"
                                                        fill="black" />
                                                    <path
                                                        d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">Orders This Month</span>
                                </div>
                            </div>
                            <div class="card-body d-flex align-items-end pt-0">
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                        <span class="fw-boldest fs-6 text-dark">1,048 to Goal</span>
                                        <span class="fw-bolder fs-6 text-gray-400">62%</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                        <div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-flush h-md-50 mb-xl-10">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <div class="d-flex align-items-center">
                                        <span class="fs-2hx fw-bolder text-dark me-2 lh-1">1,836</span>
                                        <span class="badge badge-danger fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                            style="height: 22px">
                                            <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.5"
                                                        d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z"
                                                        fill="black" />
                                                    <path
                                                        d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">Orders This Month</span>
                                </div>
                            </div>
                            <div class="card-body d-flex align-items-end pt-0">
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                        <span class="fw-boldest fs-6 text-dark">1,048 to Goal</span>
                                        <span class="fw-bolder fs-6 text-gray-400">62%</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                        <div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <span class="fs-2hx fw-bolder text-dark me-2 lh-1">6.3k</span>
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">New Customers This Month</span>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-end">
                                <span class="fs-6 fw-boldest text-gray-800 d-block mb-2">Today’s Heroes</span>
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Alan Warden">
                                        <span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Michael Eberon">
                                        <img alt="Pic" src="{{ asset('assets/admin/media/avatars/300-11.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Melody Macy">
                                        <img alt="Pic" src="{{ asset('assets/admin/media/avatars/300-2.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Perry Matthew">
                                        <span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Barry Walter">
                                        <img alt="Pic" src="{{ asset('assets/admin/media/avatars/300-12.jpg') }}" />
                                    </div>
                                    <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_view_users">
                                        <span class="symbol-label bg-gray-900 text-gray-300 fs-8 fw-bolder">+42</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-flush h-md-50 mb-xl-10">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <span class="fs-2hx fw-bolder text-dark me-2 lh-1">6.3k</span>
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">New Customers This Month</span>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-end">
                                <span class="fs-6 fw-boldest text-gray-800 d-block mb-2">Today’s Heroes</span>
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Alan Warden">
                                        <span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Michael Eberon">
                                        <img alt="Pic" src="{{ asset('assets/admin/media/avatars/300-11.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Melody Macy">
                                        <img alt="Pic" src="{{ asset('assets/admin/media/avatars/300-2.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Perry Matthew">
                                        <span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Barry Walter">
                                        <img alt="Pic" src="{{ asset('assets/admin/media/avatars/300-12.jpg') }}" />
                                    </div>
                                    <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_view_users">
                                        <span class="symbol-label bg-gray-900 text-gray-300 fs-8 fw-bolder">+42</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
                        <div class="card card-flush overflow-hidden h-md-100">
                            <div class="card-header py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">Sales This Months</span>
                                    <span class="text-gray-400 mt-1 fw-bold fs-6">Users from all channels</span>
                                </h3>
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-sm btn-light-primary fw-bolder">Launch eCommerce App</a>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                                <div class="px-9 mb-5">
                                    <div class="d-flex mb-2">
                                        <span class="fs-4 fw-bold text-gray-400 me-1">$</span>
                                        <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">14,094</span>
                                    </div>
                                    <span class="fs-6 fw-bold text-gray-400">Another $48,346 to Goal</span>
                                </div>
                                <div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-5 g-xl-10">
                    <div class="col-xl-6 mb-xl-10">
                        <div class="card h-md-100">
                            <div class="card-header align-items-center border-0">
                                <h3 class="fw-bolder text-gray-900 m-0">Recent Orders</h3>
                                <button
                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                            <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                            <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                            <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                        </svg>
                                    </span>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                    </div>
                                    <div class="separator mb-3 opacity-75"></div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <div class="separator mt-3 opacity-75"></div>
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-2">
                                {{-- <ul class="nav nav-pills nav-pills-custom mb-3">
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden active w-80px h-85px py-4"
                                            data-bs-toggle="pill" href="#kt_stats_widget_2_tab_1">
                                            <div class="nav-icon">
                                                <img alt=""
                                                    src="{{ asset('assets/admin/media/svg/products-categories/t-shirt.svg') }}"
                                                    class="" />
                                            </div>
                                            <span class="nav-text text-gray-700 fw-bolder fs-6 lh-1">T-shirt</span>
                                            <span
                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                            data-bs-toggle="pill" href="#kt_stats_widget_2_tab_2">
                                            <div class="nav-icon">
                                                <img alt=""
                                                    src="{{ asset('assets/admin/media/svg/products-categories/gaming.svg') }}"
                                                    class="" />
                                            </div>
                                            <span class="nav-text text-gray-700 fw-bolder fs-6 lh-1">Gaming</span>
                                            <span
                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                            data-bs-toggle="pill" href="#kt_stats_widget_2_tab_3">
                                            <div class="nav-icon">
                                                <img alt=""
                                                    src="{{ asset('assets/admin/media/svg/products-categories/watch.svg') }}"
                                                    class="" />
                                            </div>
                                            <span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Watch</span>
                                            <span
                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                            data-bs-toggle="pill" href="#kt_stats_widget_2_tab_4">
                                            <div class="nav-icon">
                                                <img alt=""
                                                    src="{{ asset('assets/admin/media/svg/products-categories/gloves.svg') }}"
                                                    class="nav-icon" />
                                            </div>
                                            <span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Gloves</span>
                                            <span
                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                            data-bs-toggle="pill" href="#kt_stats_widget_2_tab_5">
                                            <div class="nav-icon">
                                                <img alt=""
                                                    src="{{ asset('assets/admin/media/svg/products-categories/shoes.svg') }}"
                                                    class="nav-icon" />
                                            </div>
                                            <span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Shoes</span>
                                            <span
                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        </a>
                                    </li>
                                </ul> --}}
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1">
                                        <div class="table-responsive">
                                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                <thead>
                                                    <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                        <th class="ps-0 w-50px">ITEM</th>
                                                        <th class="min-w-140px"></th>
                                                        <th class="text-end min-w-140px">QTY</th>
                                                        <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                        <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('assets/admin/media/stock/ecommerce/210.gif') }}"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                1802</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-2347</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$72.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$126.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('assets/admin/media/stock/ecommerce/215.gif') }}"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                                Laga</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-1321</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$45.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$76.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('assets/admin/media/stock/ecommerce/209.gif') }}"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-4312</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$84.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$168.00</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_stats_widget_2_tab_2">
                                        <div class="table-responsive">
                                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                <thead>
                                                    <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                        <th class="ps-0 w-50px">ITEM</th>
                                                        <th class="min-w-140px"></th>
                                                        <th class="text-end min-w-140px">QTY</th>
                                                        <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                        <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('assets/admin/media/stock/ecommerce/197.gif') }}"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                1802</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-4312</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$32.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$312.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('assets/admin/media/stock/ecommerce/178.gif') }}"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                                Laga</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-3122</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$53.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$62.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('assets/admin/media/stock/ecommerce/22.gif') }}"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-1142</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$74.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$139.00</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_stats_widget_2_tab_3">
                                        <div class="table-responsive">
                                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                <thead>
                                                    <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                        <th class="ps-0 w-50px">ITEM</th>
                                                        <th class="min-w-140px"></th>
                                                        <th class="text-end min-w-140px">QTY</th>
                                                        <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                        <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('assets/admin/media/stock/ecommerce/1.gif') }}"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                1324</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-1523</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$43.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$231.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('assets/admin/media/stock/ecommerce/24.gif') }}"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                                Laga</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-5314</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$71.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$53.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('assets/admin/media/stock/ecommerce/71.gif') }}"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-4222</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$23.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$213.00</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_stats_widget_2_tab_4">
                                        <div class="table-responsive">
                                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                <thead>
                                                    <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                        <th class="ps-0 w-50px">ITEM</th>
                                                        <th class="min-w-140px"></th>
                                                        <th class="text-end min-w-140px">QTY</th>
                                                        <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                        <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('assets/admin/media/stock/ecommerce/41.gif') }}"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                2635</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-1523</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$65.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$163.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('assets/admin/media/stock/ecommerce/63.gif') }}"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                                Laga</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-2745</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$64.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$73.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('assets/admin/media/stock/ecommerce/59.gif') }}"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-5173</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$54.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$173.00</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_stats_widget_2_tab_5">
                                        <div class="table-responsive">
                                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                <thead>
                                                    <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                        <th class="ps-0 w-50px">ITEM</th>
                                                        <th class="min-w-140px"></th>
                                                        <th class="text-end min-w-140px">QTY</th>
                                                        <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                        <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('assets/admin/media/stock/ecommerce/10.gif') }}"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Nike</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-2163</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$64.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$287.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('assets/admin/media/stock/ecommerce/96.gif') }}"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Adidas</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-2162</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$76.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$51.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('assets/admin/media/stock/ecommerce/13.gif') }}"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Puma</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-1537</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$27.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$167.00</span>
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
                    <div class="col-xl-6 mb-5 mb-xl-10">
                        <div class="card card-flush overflow-hidden h-md-100">
                            <div class="card-header py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">Discounted Product Sales</span>
                                    <span class="text-gray-400 mt-1 fw-bold fs-6">Users from all channels</span>
                                </h3>
                                <div class="card-toolbar">
                                    <button
                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                                    fill="black" />
                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions
                                            </div>
                                        </div>
                                        <div class="separator mb-3 opacity-75"></div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <div class="separator mt-3 opacity-75"></div>
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                                <div class="px-9 mb-5">
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="fs-4 fw-bold text-gray-400 align-self-start me-1">$</span>
                                        <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">3,706</span>
                                        <span class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center">
                                            <span class="svg-icon svg-icon-7 svg-icon-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.5"
                                                        d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                        fill="black" />
                                                    <path
                                                        d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                    <span class="fs-6 fw-bold text-gray-400">Total Discounted Sales This Month</span>
                                </div>
                                <div id="kt_charts_widget_4" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-5 g-xl-10">
                    <div class="col-xl-4 mb-xl-10">
                        <div class="card h-md-100">
                            <div class="card-body d-flex flex-column flex-center">
                                <div class="mb-2">
                                    <h1 class="fw-bold text-gray-800 text-center lh-lg">Have you tried
                                        <br />new
                                        <span class="fw-boldest">eCommerce App ?</span>
                                    </h1>
                                    <div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 my-lg-12"
                                        style="background-image:url('assets/media/svg/illustrations/easy/2.svg')"></div>
                                </div>
                                <div class="text-center">
                                    <a class="btn btn-sm btn-primary me-2" href="#">View App</a>
                                    <a class="btn btn-sm btn-light" href="#">New Product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 mb-5 mb-xl-10">
                        <div class="card card-flush h-xl-100">
                            <div class="card-header pt-7">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">Product Orders</span>
                                    <span class="text-gray-400 mt-1 fw-bold fs-6">Avg. 57 orders per day</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div class="d-flex flex-stack flex-wrap gap-4">
                                        <div class="d-flex align-items-center fw-bolder">
                                            <div class="text-muted fs-7 me-2">Cateogry</div>
                                            <select
                                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                data-control="select2" data-hide-search="true"
                                                data-dropdown-css-class="w-150px"
                                                data-placeholder="Select an option">
                                                <option></option>
                                                <option value="Show All" selected="selected">Show All</option>
                                                <option value="a">Category A</option>
                                                <option value="b">Category A</option>
                                            </select>
                                        </div>
                                        <div class="d-flex align-items-center fw-bolder">
                                            <div class="text-muted fs-7 me-2">Status</div>
                                            <select
                                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                data-control="select2" data-hide-search="true"
                                                data-dropdown-css-class="w-150px"
                                                data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
                                                <option></option>
                                                <option value="Show All" selected="selected">Show All</option>
                                                <option value="Shipped">Shipped</option>
                                                <option value="Confirmed">Confirmed</option>
                                                <option value="Rejected">Rejected</option>
                                                <option value="Pending">Pending</option>
                                            </select>
                                        </div>
                                        <div class="position-relative my-1">
                                            <span
                                                class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                                    <path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <input type="text" data-kt-table-widget-4="search"
                                                class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-100px">Order ID</th>
                                            <th class="text-end min-w-100px">Created</th>
                                            <th class="text-end min-w-125px">Customer</th>
                                            <th class="text-end min-w-100px">Total</th>
                                            <th class="text-end min-w-100px">Profit</th>
                                            <th class="text-end min-w-50px">Status</th>
                                            <th class="text-end"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-bolder text-gray-600">
                                        <tr data-kt-table-widget-4="subtable_template" class="d-none">
                                            <td colspan="2">
                                                <div class="d-flex align-items-center gap-3">
                                                    <a href="#"
                                                        class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                        <img src="{{ asset('assets/admin/media/stock/ecommerce/') }}"
                                                            alt="" data-kt-table-widget-4="template_image" />
                                                    </a>
                                                    <div class="d-flex flex-column text-muted">
                                                        <a href="#" class="text-dark text-hover-primary fw-bolder"
                                                            data-kt-table-widget-4="template_name">Product name</a>
                                                        <div class="fs-7"
                                                            data-kt-table-widget-4="template_description">Product
                                                            description</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="text-dark fs-7">Cost</div>
                                                <div class="text-muted fs-7 fw-bolder"
                                                    data-kt-table-widget-4="template_cost">1</div>
                                            </td>
                                            <td class="text-end">
                                                <div class="text-dark fs-7">Qty</div>
                                                <div class="text-muted fs-7 fw-bolder"
                                                    data-kt-table-widget-4="template_qty">1</div>
                                            </td>
                                            <td class="text-end">
                                                <div class="text-dark fs-7">Total</div>
                                                <div class="text-muted fs-7 fw-bolder"
                                                    data-kt-table-widget-4="template_total">name</div>
                                            </td>
                                            <td class="text-end">
                                                <div class="text-dark fs-7 me-3">On hand</div>
                                                <div class="text-muted fs-7 fw-bolder"
                                                    data-kt-table-widget-4="template_stock">32</div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-dark text-hover-primary">#XGT-346</a>
                                            </td>
                                            <td class="text-end">31 December 2021, 1:42 pm</td>
                                            <td class="text-end">
                                                <a href="" class="text-dark text-hover-primary">Emma Smith</a>
                                            </td>
                                            <td class="text-end">$630.00</td>
                                            <td class="text-end">
                                                <span class="text-dark fw-bolder">$86.70</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button"
                                                    class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                    data-kt-table-widget-4="expand_row">
                                                    <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                                                                transform="rotate(-90 11 18)" fill="black" />
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-dark text-hover-primary">#YHD-047</a>
                                            </td>
                                            <td class="text-end">31 December 2021, 12:51 pm</td>
                                            <td class="text-end">
                                                <a href="" class="text-dark text-hover-primary">Melody Macy</a>
                                            </td>
                                            <td class="text-end">$25.00</td>
                                            <td class="text-end">
                                                <span class="text-dark fw-bolder">$4.20</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button"
                                                    class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                    data-kt-table-widget-4="expand_row">
                                                    <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                                                                transform="rotate(-90 11 18)" fill="black" />
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-dark text-hover-primary">#SRR-678</a>
                                            </td>
                                            <td class="text-end">31 December 2021, 9:43 am</td>
                                            <td class="text-end">
                                                <a href="" class="text-dark text-hover-primary">Max Smith</a>
                                            </td>
                                            <td class="text-end">$1,630.00</td>
                                            <td class="text-end">
                                                <span class="text-dark fw-bolder">$203.90</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button"
                                                    class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                    data-kt-table-widget-4="expand_row">
                                                    <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                                                                transform="rotate(-90 11 18)" fill="black" />
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-dark text-hover-primary">#PXF-534</a>
                                            </td>
                                            <td class="text-end">30 December 2021, 1:43 pm</td>
                                            <td class="text-end">
                                                <a href="" class="text-dark text-hover-primary">Sean Bean</a>
                                            </td>
                                            <td class="text-end">$119.00</td>
                                            <td class="text-end">
                                                <span class="text-dark fw-bolder">$12.00</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button"
                                                    class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                    data-kt-table-widget-4="expand_row">
                                                    <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                                                                transform="rotate(-90 11 18)" fill="black" />
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-dark text-hover-primary">#XGD-249</a>
                                            </td>
                                            <td class="text-end">29 December 2021, 1:43 pm</td>
                                            <td class="text-end">
                                                <a href="" class="text-dark text-hover-primary">Brian Cox</a>
                                            </td>
                                            <td class="text-end">$660.00</td>
                                            <td class="text-end">
                                                <span class="text-dark fw-bolder">$52.26</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button"
                                                    class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                    data-kt-table-widget-4="expand_row">
                                                    <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                                                                transform="rotate(-90 11 18)" fill="black" />
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-dark text-hover-primary">#SKP-035</a>
                                            </td>
                                            <td class="text-end">28 December 2021, 1:43 pm</td>
                                            <td class="text-end">
                                                <a href="" class="text-dark text-hover-primary">Brian Cox</a>
                                            </td>
                                            <td class="text-end">$290.00</td>
                                            <td class="text-end">
                                                <span class="text-dark fw-bolder">$29.00</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-danger">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button"
                                                    class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                    data-kt-table-widget-4="expand_row">
                                                    <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                                                                transform="rotate(-90 11 18)" fill="black" />
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-dark text-hover-primary">#SKP-567</a>
                                            </td>
                                            <td class="text-end">25 December 2021, 1:43 pm</td>
                                            <td class="text-end">
                                                <a href="" class="text-dark text-hover-primary">Mikaela Collins</a>
                                            </td>
                                            <td class="text-end">$590.00</td>
                                            <td class="text-end">
                                                <span class="text-dark fw-bolder">$50.00</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button"
                                                    class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                    data-kt-table-widget-4="expand_row">
                                                    <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                                                                transform="rotate(-90 11 18)" fill="black" />
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-5 g-xl-10">
                    <div class="col-xl-4">
                        <div class="card card-flush h-xl-100">
                            <div class="card-header pt-7">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">Product Delivery</span>
                                    <span class="text-gray-400 mt-1 fw-bold fs-6">1M Products Shipped so far</span>
                                </h3>
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-sm btn-light">Order Details</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                                    <div
                                        class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                        <div class="d-flex flex-stack mb-3">
                                            <div class="me-3">
                                                <img src="{{ asset('assets/admin/media/stock/ecommerce/210.gif') }}"
                                                    class="w-50px ms-n1 me-1" alt="" />
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder">Elephant
                                                    1802</a>
                                            </div>
                                            <div class="m-0">
                                                <button
                                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                    data-kt-menu-overflow="true">
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                                                fill="black" />
                                                            <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                            <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                            <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                    data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick
                                                            Actions</div>
                                                    </div>
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Customer</a>
                                                    </div>
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                        data-kt-menu-placement="right-start">
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Member Group</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Contact</a>
                                                    </div>
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                Reports</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-stack">
                                            <span class="text-gray-400 fw-bolder">To:
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder">Jason
                                                    Bourne</a></span>
                                            <span class="badge badge-light-success">Delivered</span>
                                        </div>
                                    </div>
                                    <div
                                        class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                        <div class="d-flex flex-stack mb-3">
                                            <div class="me-3">
                                                <img src="{{ asset('assets/admin/media/stock/ecommerce/209.gif') }}"
                                                    class="w-50px ms-n1 me-1" alt="" />
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder">RiseUP</a>
                                            </div>
                                            <div class="m-0">
                                                <button
                                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                    data-kt-menu-overflow="true">
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                                                fill="black" />
                                                            <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                            <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                            <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                    data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick
                                                            Actions</div>
                                                    </div>
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Customer</a>
                                                    </div>
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                        data-kt-menu-placement="right-start">
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Member Group</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Contact</a>
                                                    </div>
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                Reports</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-stack">
                                            <span class="text-gray-400 fw-bolder">To:
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder">Marie
                                                    Durant</a></span>
                                            <span class="badge badge-light-primary">Shipping</span>
                                        </div>
                                    </div>
                                    <div
                                        class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                        <div class="d-flex flex-stack mb-3">
                                            <div class="me-3">
                                                <img src="{{ asset('assets/admin/media/stock/ecommerce/214.gif') }}"
                                                    class="w-50px ms-n1 me-1" alt="" />
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder">Yellow
                                                    Stone</a>
                                            </div>
                                            <div class="m-0">
                                                <button
                                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                    data-kt-menu-overflow="true">
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                                                fill="black" />
                                                            <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                            <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                            <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                    data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick
                                                            Actions</div>
                                                    </div>
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Customer</a>
                                                    </div>
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                        data-kt-menu-placement="right-start">
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Member Group</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Contact</a>
                                                    </div>
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                Reports</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-stack">
                                            <span class="text-gray-400 fw-bolder">To:
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder">Dan
                                                    Wilson</a></span>
                                            <span class="badge badge-light-danger">Confirmed</span>
                                        </div>
                                    </div>
                                    <div
                                        class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                        <div class="d-flex flex-stack mb-3">
                                            <div class="me-3">
                                                <img src="{{ asset('assets/admin/media/stock/ecommerce/211.gif') }}"
                                                    class="w-50px ms-n1 me-1" alt="" />
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder">Elephant
                                                    1802</a>
                                            </div>
                                            <div class="m-0">
                                                <button
                                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                    data-kt-menu-overflow="true">
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                                                fill="black" />
                                                            <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                            <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                            <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                    data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick
                                                            Actions</div>
                                                    </div>
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Customer</a>
                                                    </div>
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                        data-kt-menu-placement="right-start">
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Member Group</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Contact</a>
                                                    </div>
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                Reports</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-stack">
                                            <span class="text-gray-400 fw-bolder">To:
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder">Lebron
                                                    Wayde</a></span>
                                            <span class="badge badge-light-success">Delivered</span>
                                        </div>
                                    </div>
                                    <div
                                        class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                        <div class="d-flex flex-stack mb-3">
                                            <div class="me-3">
                                                <img src="{{ asset('assets/admin/media/stock/ecommerce/215.gif') }}"
                                                    class="w-50px ms-n1 me-1" alt="" />
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder">RiseUP</a>
                                            </div>
                                            <div class="m-0">
                                                <button
                                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                    data-kt-menu-overflow="true">
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                                                fill="black" />
                                                            <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                            <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                            <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                    data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick
                                                            Actions</div>
                                                    </div>
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Customer</a>
                                                    </div>
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                        data-kt-menu-placement="right-start">
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Member Group</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Contact</a>
                                                    </div>
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                Reports</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-stack">
                                            <span class="text-gray-400 fw-bolder">To:
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder">Ana
                                                    Simmons</a></span>
                                            <span class="badge badge-light-primary">Shipping</span>
                                        </div>
                                    </div>
                                    <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3">
                                        <div class="d-flex flex-stack mb-3">
                                            <div class="me-3">
                                                <img src="{{ asset('assets/admin/media/stock/ecommerce/192.gif') }}"
                                                    class="w-50px ms-n1 me-1" alt="" />
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder">Yellow
                                                    Stone</a>
                                            </div>
                                            <div class="m-0">
                                                <button
                                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                    data-kt-menu-overflow="true">
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                                                fill="black" />
                                                            <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                            <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                            <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                    data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick
                                                            Actions</div>
                                                    </div>
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Customer</a>
                                                    </div>
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                        data-kt-menu-placement="right-start">
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Member Group</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Contact</a>
                                                    </div>
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                Reports</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-stack">
                                            <span class="text-gray-400 fw-bolder">To:
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder">Kevin
                                                    Leonard</a></span>
                                            <span class="badge badge-light-danger">Confirmed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card card-flush h-xl-100">
                            <div class="card-header pt-7">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">Stock Report</span>
                                    <span class="text-gray-400 mt-1 fw-bold fs-6">Total 2,356 Items in the Stock</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div class="d-flex flex-stack flex-wrap gap-4">
                                        <div class="d-flex align-items-center fw-bolder">
                                            <div class="text-muted fs-7 me-2">Cateogry</div>
                                            <select
                                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                data-control="select2" data-hide-search="true"
                                                data-dropdown-css-class="w-150px"
                                                data-placeholder="Select an option">
                                                <option></option>
                                                <option value="Show All" selected="selected">Show All</option>
                                                <option value="a">Category A</option>
                                                <option value="b">Category B</option>
                                            </select>
                                        </div>
                                        <div class="d-flex align-items-center fw-bolder">
                                            <div class="text-muted fs-7 me-2">Status</div>
                                            <select
                                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                data-control="select2" data-hide-search="true"
                                                data-dropdown-css-class="w-150px"
                                                data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
                                                <option></option>
                                                <option value="Show All" selected="selected">Show All</option>
                                                <option value="In Stock">In Stock</option>
                                                <option value="Out of Stock">Out of Stock</option>
                                                <option value="Low Stock">Low Stock</option>
                                            </select>
                                        </div>
                                        <a href="#" class="btn btn-light btn-sm">View Stock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-100px">Item</th>
                                            <th class="text-end pe-3 min-w-100px">Product ID</th>
                                            <th class="text-end pe-3 min-w-150px">Date Added</th>
                                            <th class="text-end pe-3 min-w-100px">Price</th>
                                            <th class="text-end pe-3 min-w-50px">Status</th>
                                            <th class="text-end pe-0 min-w-25px">Qty</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-bolder text-gray-600">
                                        <tr>
                                            <td>
                                                <a href="#" class="text-dark text-hover-primary">Macbook Air M1</a>
                                            </td>
                                            <td class="text-end">#XGY-356</td>
                                            <td class="text-end">May 05, 2021</td>
                                            <td class="text-end">$1,230</td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                            </td>
                                            <td class="text-end" data-order="58">
                                                <span class="text-dark fw-bolder">58 PCS</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-dark text-hover-primary">Surface Laptop 4</a>
                                            </td>
                                            <td class="text-end">#YHD-047</td>
                                            <td class="text-end">Aug 19, 2021</td>
                                            <td class="text-end">$1,060</td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                            </td>
                                            <td class="text-end" data-order="0">
                                                <span class="text-dark fw-bolder">0 PCS</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-dark text-hover-primary">Logitech MX 250</a>
                                            </td>
                                            <td class="text-end">#SRR-678</td>
                                            <td class="text-end">Jul 25, 2021</td>
                                            <td class="text-end">$64</td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                            </td>
                                            <td class="text-end" data-order="290">
                                                <span class="text-dark fw-bolder">290 PCS</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-dark text-hover-primary">AudioEngine HD3</a>
                                            </td>
                                            <td class="text-end">#PXF-578</td>
                                            <td class="text-end">Aug 19, 2021</td>
                                            <td class="text-end">$1,060</td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                            </td>
                                            <td class="text-end" data-order="46">
                                                <span class="text-dark fw-bolder">46 PCS</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-dark text-hover-primary">HP Hyper LTR</a>
                                            </td>
                                            <td class="text-end">#PXF-778</td>
                                            <td class="text-end">May 05, 2021</td>
                                            <td class="text-end">$4500</td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                            </td>
                                            <td class="text-end" data-order="78">
                                                <span class="text-dark fw-bolder">78 PCS</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-dark text-hover-primary">Dell 32 UltraSharp</a>
                                            </td>
                                            <td class="text-end">#XGY-356</td>
                                            <td class="text-end">Aug 19, 2021</td>
                                            <td class="text-end">$1,060</td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-warning">Low Stock</span>
                                            </td>
                                            <td class="text-end" data-order="8">
                                                <span class="text-dark fw-bolder">8 PCS</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-dark text-hover-primary">Google Pixel 6 Pro</a>
                                            </td>
                                            <td class="text-end">#XVR-425</td>
                                            <td class="text-end">Dec 20, 2021</td>
                                            <td class="text-end">$1,060</td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                            </td>
                                            <td class="text-end" data-order="124">
                                                <span class="text-dark fw-bolder">124 PCS</span>
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
@endsection

@section('script')
    <script src="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom/utilities/modals/users-search.js') }}"></script>
@endsection
