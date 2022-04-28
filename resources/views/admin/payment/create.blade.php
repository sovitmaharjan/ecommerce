@extends('admin.layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Payment</h1>
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
                        <li class="breadcrumb-item text-dark">Payment</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <div class="m-0">
                        <a href="{{ route('payment.index') }}"
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
                    <a href="{{ route('payment.create') }}" class="btn btn-sm btn-primary">Create</a>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <form id="payment_form" class="form d-flex flex-column flex-lg-row" method="POST"
                    action="{{ route('payment.store') }}">
                    @csrf
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2 class="required">Status</h2>
                                </div>
                                <div class="card-toolbar">
                                    <div class="rounded-circle bg-success w-15px h-15px" id="payment_status"></div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <select class="form-select mb-2" data-control="select2" name="status"
                                    data-hide-search="true" data-placeholder="Select an option" id="payment_status_select"
                                    required>
                                    <option></option>
                                    <option value="1" selected="selected">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                <div class="text-muted fs-7">Set the payment status.</div>
                                @error('status')
                                    <div class="fv-plugins-message-container invalid-feedback">
                                        <div data-field="status" data-validator="notEmpty">{{ $message }}</div>
                                    </div>
                                @enderror
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
                                    <label class="required form-label">Payment Name</label>
                                    <input type="text" name="title" class="form-control mb-2" placeholder="Payment name"
                                        value="{{ old('title') }}" required />
                                    <div class="text-muted fs-7">A payment name is required and recommended to be unique.
                                    </div>
                                    @error('title')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="title" data-validator="notEmpty">{{ $message }}</div>
                                        </div>
                                    @enderror
                                </div>
                                <div>
                                    <div id="key">
                                        <div class="form-group">
                                            <div data-repeater-list="key">
                                                <div data-repeater-item>
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <label class="form-label required">Key Name:</label>
                                                            <input type="text" name="key_name" class="form-control mb-2 mb-md-0" required />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label required">Key Value:</label>
                                                            <textarea name="key_value" class="form-control mb-2" rows="3" required></textarea>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <a href="javascript:;" data-repeater-delete
                                                                class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                <i class="la la-trash-o"></i>Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-5">
                                            <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                                <i class="la la-plus"></i>Add
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('payment.index') }}" id="kt_ecommerce_add_product_cancel"
                                class="btn btn-light me-5">Cancel</a>
                            <button type="submit" id="payment_submit" class="btn btn-primary">
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
    <script src="{{ asset('assets/admin/js/custom/apps/ecommerce/catalog/save-payment.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script>
        $('#key').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function () {
                $(this).slideDown();
            },

            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
    </script>
@endSection
