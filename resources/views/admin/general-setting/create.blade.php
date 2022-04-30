@extends('admin.layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">General Setting</h1>
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
                        <li class="breadcrumb-item text-dark">General Setting</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <div class="m-0">
                        <a href="{{ route('general-setting.index') }}"
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
                    <a href="{{ route('general-setting.index') }}" class="btn btn-sm btn-primary">Create</a>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="flex-lg-row-fluid ms-lg-15">
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_settings_general">
                                General
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_settings_store">
                                Link
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
                            <div class="card card-flush">
                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                    <div class="card-title">
                                        <h2>General</h2>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <form id="general_form" method="POST" class="form" action="{{ route('general-setting.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Website Name</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-solid" name="website_name"
                                                    value="{{ old('website_name') }}" required />
                                            </div>
                                        </div>
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Website Logo</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="image-input image-input-outline image-input-empty"
                                                    data-kt-image-input="true"
                                                    style="background-image: url({{ asset('assets/admin/media/svg/files/blank-image.svg') }})">
                                                    <div class="image-input-wrapper w-125px h-125px"></div>
                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        title="Change logo">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input type="file" name="logo" accept=".png, .jpg, .jpeg"
                                                            required />
                                                    </label>
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                        title="Cancel logo">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                        title="Remove logo">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                </div>
                                                @error('logo')
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                        <div data-field="logo" data-validator="notEmpty">{{ $message }}
                                                        </div>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Website Favicon</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="image-input image-input-outline image-input-empty"
                                                    data-kt-image-input="true"
                                                    style="background-image: url({{ asset('assets/admin/media/svg/files/blank-image.svg') }})">
                                                    <div class="image-input-wrapper w-125px h-125px"></div>
                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        title="Change favicon">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input type="file" name="favicon" accept=".png, .jpg, .jpeg"
                                                            required />
                                                    </label>
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                        title="Cancel favicon">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                        title="Remove favicon">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                </div>
                                                @error('favicon')
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                        <div data-field="favicon" data-validator="notEmpty">{{ $message }}
                                                        </div>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Email</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control form-control-solid"
                                                    name="email" value="{{ old('email') }}" required/>
                                            </div>
                                        </div>
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Address</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea class="form-control form-control-solid" name="address" required>{{ old('address') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Mobile</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-solid" name="mobile"
                                                    value="{{ old('mobile') }}" required />
                                            </div>
                                        </div>
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Phone</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-solid"
                                                    name="phone" value="{{ old('phone') }}" />
                                            </div>
                                        </div>
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Meta Title</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-solid"
                                                    name="meta_title" value="{{ old('meta_title') }}" />
                                            </div>
                                        </div>
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Meta Tag Description</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea class="form-control form-control-solid" name="meta_description">{{ old('meta_description') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Meta Keywords</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-solid"
                                                    name="meta_keyword" value="{{ old('meta_keyword') }}"
                                                    data-kt-ecommerce-settings-type="tagify" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">
                                                <div class="separator mb-6"></div>
                                                <div class="d-flex justify-content-end">
                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">Cancel</button>
                                                    <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
                            <div class="card card-flush">
                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                    <div class="card-title">
                                        <h2>Link</h2>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <form id="link_form" class="form" method="POST" action="{{ route('general-setting.store') }}">
                                        @csrf
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Facebook</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-solid" name="facebook"
                                                    value="{{ old('facebook') }}" />
                                            </div>
                                        </div>
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Twitter</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-solid" name="twitter"
                                                    value="{{ old('twitter') }}" />
                                            </div>
                                        </div>
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Instagram</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-solid" name="instagram"
                                                    value="{{ old('instagram') }}" />
                                            </div>
                                        </div>
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Linkedin</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-solid" name="linkedin"
                                                    value="{{ old('linkedin') }}" />
                                            </div>
                                        </div>
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Youtube</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-solid" name="youtube"
                                                    value="{{ old('youtube') }}" />
                                            </div>
                                        </div>
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Google Map iframe link</span>
                                                </label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea class="form-control form-control-solid" name="google_map">{{ old('google_map') }}</textarea>
                                            </div>
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-md-9 offset-md-3">
                                                <div class="separator mb-6"></div>
                                                <div class="d-flex justify-content-end">
                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">Cancel</button>
                                                    <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </form>
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
    <script src="{{ asset('assets/admin/js/custom/apps/ecommerce/setting/setting.js') }}"></script>
@endSection
