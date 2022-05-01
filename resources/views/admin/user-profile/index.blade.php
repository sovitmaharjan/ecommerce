@extends('admin.layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">User Profile</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Setting</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-dark">User Profile</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <div class="m-0">
                        <a href="{{ route('user-profile.index') }}"
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
                            Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                    <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">Profile Info</h3>
                        </div>
                        <a href="{{ route('user-profile.edit') }}" class="btn btn-primary align-self-center">Edit
                            Profile</a>
                    </div>
                    <div class="card-body pt-9 pb-0">
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                            <div class="me-7 mb-4">
                                <div class="symbol symbol-100px symbol-lg-150px symbol-fixed position-relative">
                                    <img src="{{
                                        Auth::user()->profile ?
                                            Auth::user()->profile->image ?
                                                Auth::user()->profile->image->getUrl() 
                                                : asset('assets/admin/media/svg/files/blank-image.svg')
                                            : asset('assets/admin/media/svg/files/blank-image.svg') 
                                        }}"
                                    alt="image" />
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Full Name</label>
                                    <div class="col-lg-8">
                                        <span class="fw-bolder fs-6 text-gray-800">{{ Auth::user()->name }}</span>
                                    </div>
                                </div>
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Shop Name</label>
                                    <div class="col-lg-8 fv-row">
                                        <span class="fw-bold text-gray-800 fs-6">{{ Auth::user()->profile->shop_name ?? 'N/A' }}</span>
                                    </div>
                                </div>
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Mobile Number</label>
                                    <div class="col-lg-8 d-flex align-items-center">
                                        <span class="fw-bolder fs-6 text-gray-800 me-2">{{ Auth::user()->profile->mobile ?? 'N/A' }}</span>
                                        {{-- <span class="badge badge-success">Verified</span> --}}
                                    </div>
                                </div>
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Phone Number</label>
                                    <div class="col-lg-8">
                                        <a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ Auth::user()->profile->mobile ?? 'N/A' }}</a>
                                    </div>
                                </div>
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Address</label>
                                    <div class="col-lg-8">
                                        <a href="#"
                                            class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ Auth::user()->profile->address ?? 'N/A' }}</a>
                                    </div>
                                </div>
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Pan/Vat Number</label>
                                    <div class="col-lg-8">
                                        <a href="#"
                                            class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ Auth::user()->profile->pan_vat ?? 'N/A' }}</a>
                                    </div>
                                </div>
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Bank Name</label>
                                    <div class="col-lg-8">
                                        <a href="#"
                                            class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ Auth::user()->profile->bank_name ?? 'N/A' }}</a>
                                    </div>
                                </div>
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Bank Branch</label>
                                    <div class="col-lg-8">
                                        <a href="#"
                                            class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ Auth::user()->profile->bank_branch ?? 'N/A' }}</a>
                                    </div>
                                </div>
                                <div class="row mb-7">
                                    <label class="col-lg-4 fw-bold text-muted">Account Number</label>
                                    <div class="col-lg-8">
                                        <a href="#"
                                            class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ Auth::user()->profile->account_number ?? 'N/A' }}</a>
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
    <script src="{{ asset('assets/admin/js/custom/apps/ecommerce/catalog/save-user-profile.js') }}"></script>
@endSection
