@extends('admin.layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Category</h1>
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
                        <li class="breadcrumb-item text-dark">Category</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <div class="m-0">
                        <a href="{{ route('category.index') }}"
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
                    <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary">Create</a>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <form id="category_form" class="form d-flex flex-column flex-lg-row" method="POST"
                    action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2 class="required">Image</h2>
                                </div>
                            </div>
                            <div class="card-body text-center pt-0">
                                <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true">
                                    <div class="image-input-wrapper w-200px h-200px bgi-position-center"
                                        style="background-size: 75%; background-image: url({{ $category->image ? $category->image->getUrl() : asset('assets/admin/media/svg/files/blank-image.svg') }})">
                                    </div>
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    </label>
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel image">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove image">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                </div>
                                <div class="text-muted fs-7">Set the category image. Only *.png, *.jpg and *.jpeg image
                                    files
                                    are accepted</div>
                                @error('image')
                                    <div class="fv-plugins-message-container invalid-feedback">
                                        <div data-field="image" data-validator="notEmpty">{{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2 class="required">Status</h2>
                                </div>
                                <div class="card-toolbar">
                                    <div class="rounded-circle bg-{{ $category->status === 1 ? 'success' : 'danger' }} w-15px h-15px"
                                        id="kt_ecommerce_add_category_status"></div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <select class="form-select mb-2" data-control="select2" name="status"
                                    data-hide-search="true" data-placeholder="Select an option"
                                    id="kt_ecommerce_add_category_status_select" required>
                                    <option></option>
                                    <option value="1" {{ $category->status === 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $category->status === 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                                <div class="text-muted fs-7">Set the category status.</div>
                                @error('status')
                                    <div class="fv-plugins-message-container invalid-feedback">
                                        <div data-field="status" data-validator="notEmpty">{{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2 class="required">Parent</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <select class="form-select mb-2" data-control="select2" name="parent_id"
                                    data-hide-search="true" data-placeholder="Select an option" id="parent_id" required>
                                    <option value="0" selected>Main</option>
                                    @foreach ($all_category as $value)
                                        <option value="{{ $value->id }}"
                                            @if (old('parent_id')) @if (old('parent_id') == $value->id) selected @endif
                                        @else @if ($category->parent_id == $value->id) selected @endif @endif
                                            >{{ $value->title }}</option>
                                    @endforeach
                                </select>
                                <div class="text-muted fs-7">Select parent for this category.</div>
                                @error('parent_id')
                                    <div class="fv-plugins-message-container invalid-feedback">
                                        <div data-field="parent_id" data-validator="notEmpty">{{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Others</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <label for="featured" class="form-label">Featured?</label>
                                <div class="form-check form-check-custom form-check-solid">
                                    <input type="hidden" name="featured" value="0">
                                    <input class="form-check-input" type="checkbox" value="1" id="featured" name="featured"
                                        @if (old('featured')) @if (old('featured') == 1) checked @endif
                                    @else @if ($category->featured == 1) checked @endif @endif
                                    />
                                    <label class="form-check-label" for="featured"></label>
                                </div>
                                <div class="text-muted fs-7">Check to feature this category products.</div>
                            </div>
                            <div class="card-body pt-0">
                                <label for="order" class="form-label">Order</label>
                                <div class="input-group" data-kt-dialer="true" data-kt-dialer-min="0"
                                    data-kt-dialer-max="9999" data-kt-dialer-step="1" data-kt-dialer-prefix="">
                                    <button class="btn btn-icon btn-outline btn-outline-secondary" type="button"
                                        data-kt-dialer-control="decrease">
                                        <i class="bi bi-dash fs-1"></i>
                                    </button>
                                    <input type="text" name="order_level" id="order_level" class="form-control" readonly
                                        placeholder="Amount" value="{{ old('order_level') ?? $category->order_level }}"
                                        data-kt-dialer-control="input" />
                                    <button class="btn btn-icon btn-outline btn-outline-secondary" type="button"
                                        data-kt-dialer-control="increase">
                                        <i class="bi bi-plus fs-1"></i>
                                    </button>
                                </div>
                                <div class="text-muted fs-7">Sort category</div>
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
                                    <label class="required form-label">Category Name</label>
                                    <input type="text" name="title" class="form-control mb-2" placeholder="Category name"
                                        value="{{ old('title') ?? $category->title }}" />
                                    <div class="text-muted fs-7">A category name is required and recommended to be unique.
                                    </div>
                                    @error('title')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="title" data-validator="notEmpty">{{ $message }}</div>
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" placeholder="Type your text here..." class="form-control mb-2" id="description"
                                        rows="5">{{ old('description') ?? $category->description }}</textarea>
                                    <div class="text-muted fs-7">Set a description to the category.</div>
                                </div>
                                <div class="mb-10 fv-row">
                                    @php
                                        $attr_id = $category->attributes->pluck('id')->toArray();
                                    @endphp
                                    <label class="form-label d-block">Attribute</label>
                                    <select class="form-select mb-2" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true" multiple="multiple"
                                        name="attribute[]" id="attribute" required>
                                        @foreach ($attribute as $value)
                                            <option value="{{ $value->id }}" {{ in_array($value->id, $attr_id) ? 'selected' : '' }}>{{ $value->title }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-muted fs-7 mb-7">Select attribute for this category.</div>
                                </div>
                                <a href="{{ route('attribute.create') }}" class="btn btn-light-primary btn-sm mb-10">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                                                transform="rotate(-90 11 18)" fill="black" />
                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                        </svg>
                                    </span>
                                    Create new Attribute
                                </a>
                            </div>
                        </div>
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Meta Options</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="mb-10">
                                    <label class="form-label">Meta Tag Title</label>
                                    <input type="text" class="form-control mb-2" name="meta_title" id="meta_title"
                                        placeholder="Meta tag name"
                                        value="{{ old('meta_title') ?? $category->meta_title }}" />
                                    <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise
                                        keywords.</div>
                                </div>
                                <div class="mb-10">
                                    <label class="form-label">Meta Tag Description</label>
                                    <textarea name="meta_description" placeholder="Type your text here..." class="form-control mb-2" id="meta_description"
                                        rows="5">{{ old('meta_description') ?? $category->meta_description }}</textarea>
                                    <div class="text-muted fs-7">Set a meta tag description to the category for increased
                                        SEO ranking.</div>
                                </div>
                                <div>
                                    <label class="form-label">Meta Tag Keywords</label>
                                    <input id="kt_ecommerce_add_category_meta_keywords" name="meta_keyword"
                                        class="form-control mb-2"
                                        value="{{ old('meta_keyword') ?? $category->meta_keyword }}" />
                                    <div class="text-muted fs-7">Set a list of keywords that the category is related to.
                                        Separate the keywords by adding a comma
                                        <code>,</code>between each keyword.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('category.index') }}" id="kt_ecommerce_add_product_cancel"
                                class="btn btn-light me-5">Cancel</a>
                            <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
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
    <script src="{{ asset('assets/admin/js/custom/apps/ecommerce/catalog/save-category.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#mySelect2').val(['1', '2']);
            $('#mySelect2').trigger('change');
        })
    </script>
@endSection
