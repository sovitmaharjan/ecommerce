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
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home</a>
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
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                        data-bs-target="#kt_account_profile_details" aria-expanded="true"
                        aria-controls="kt_account_profile_details">
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">Profile Details</h3>
                        </div>
                    </div>
                    <div class="collapse show">
                        <form class="form" method="POST" enctype="multipart/form-data"
                            action="{{ route('user-profile.store') }}">
                            @csrf
                            <div class="card-body border-top p-9">
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                                    <div class="col-lg-8">
                                        <div class="image-input image-input-outline image-input-empty"
                                            data-kt-image-input="true">
                                            <div class="image-input-wrapper w-125px h-125px bgi-position-center"
                                                style="background-size: 90%; background-image: url({{ Auth::user()->profile->image ? Auth::user()->profile->image->getUrl() : asset('assets/admin/media/svg/files/blank-image.svg') }})">
                                            </div>
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change image">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <input type="file" name="image" accept=".png, .jpg, .jpeg" id="image" />
                                                <input type="hidden" name="image_remove" />
                                            </label>
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel image">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove image">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                        </div>
                                        <div class="text-muted fs-7">Set the product image. Only *.png, *.jpg and *.jpeg
                                            image files are accepted</div>
                                        @error('image')
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="image" data-validator="notEmpty">{{ $message }}</div>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="fv-row">
                                                <input type="text" name="name"
                                                    class="form-control form-control-lg mb-3 mb-lg-0"
                                                    placeholder="First name" value="{{ Auth::user()->name ?? '' }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Shop Name</label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="shop_name"
                                            class="form-control form-control-lg" placeholder="Company name"
                                            value="{{ Auth::user()->profile->shop_name ?? '' }}" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Mobile Number</label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="tel" name="mobile" class="form-control form-control-lg"
                                            placeholder="Mobile number"
                                            value="{{ Auth::user()->profile->mobile ?? '' }}" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Phone Number</label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="phone" class="form-control form-control-lg"
                                            placeholder="Phone Number" value="{{ Auth::user()->profile->phone ?? '' }}" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Address</label>
                                    <div class="col-lg-8 fv-row">
                                        <textarea name="address" placeholder="Type your text here..." class="form-control  form-control-lg mb-2" id="address" rows="5">{{ Auth::user()->profile->address ?? '' }}</textarea>
                                        <div class="text-muted fs-7">Set your address.</div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Pan/Vat Number</label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="pan_vat" class="form-control form-control-lg"
                                            placeholder="Pan/Vat Number"
                                            value="{{ Auth::user()->profile->pan_vat ?? '' }}" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Bank Name</label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="bank_name"
                                            class="form-control form-control-lg" placeholder="Bank Name"
                                            value="{{ Auth::user()->profile->bank_name ?? '' }}" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Bank Branch</label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="bank_branch"
                                            class="form-control form-control-lg" placeholder="Bank Branch"
                                            value="{{ Auth::user()->profile->bank_branch ?? '' }}" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Account Number</label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="account_number"
                                            class="form-control form-control-lg" placeholder="Account Number"
                                            value="{{ Auth::user()->profile->account_number ?? '' }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <a href="{{ route('user-profile.index') }}" class="btn btn-light btn-active-light-primary me-2">Discard</a>
                                <button type="submit" class="btn btn-primary" id="">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection
@section('script')
    <script src="{{ asset('assets/admin/js/custom/apps/ecommerce/catalog/save-user-profile.js') }}"></script>
@endSection
