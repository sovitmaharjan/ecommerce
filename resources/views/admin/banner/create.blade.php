@extends('admin.layouts.app')

@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Banner</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Bazar-Max</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Setting</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-dark">Banner</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <div class="m-0">
                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder">
                            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                            Filter
                        </a>
                    </div>
                    <!--begin::Secondary button-->
                    <a href="/metronic8/demo1/../demo1/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_create_app">Create</a>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <form id="banner_form" class="form d-flex flex-column flex-lg-row" method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Image</h2>
                                </div>
                            </div>
                            <div class="card-body text-center pt-0">
                                <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url({{ asset('assets/admin/media/svg/files/blank-image.svg') }})">
                                    <div class="image-input-wrapper w-225px h-125px"></div>
                        
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                        
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg" required/>
                                    </label>
                        
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel image">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                        
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove image">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                </div>
                                <div class="text-muted fs-7">Set the Banner image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                            </div>
                        </div>
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Status</h2>
                                </div>
                                <div class="card-toolbar">
                                    <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_banner_status"></div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <select class="form-select mb-2" data-control="select2" name="status" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_banner_status_select" required>
                                    <option></option>
                                    <option value="1" selected="selected">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                <div class="text-muted fs-7">Set the Banner status.</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>General</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Banner Name</label>
                                    <input type="text" name="title" class="form-control mb-2" placeholder="Banner name" value="" required/>
                                    <div class="text-muted fs-7">A banner name is required and recommended to be unique.</div>
                                </div>
                                <div>
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control mb-2" id="textarea_description" rows="5"></textarea>
                                    <div class="text-muted fs-7">Set a description to the banner.</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('banner.index') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                            <button type="submit" id="kt_ecommerce_add_banner_submit" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endSection

@section('script')
    <script src="{{ asset('assets/admin/js/custom/apps/ecommerce/catalog/save-banner.js') }}"></script>
@endSection
