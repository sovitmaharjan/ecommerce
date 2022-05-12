@extends('admin.layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Product</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Catalog</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-dark">Product</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <div class="m-0">
                        <a href="{{ route('product.index') }}"
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
                    <a href="{{ route('product.create') }}" class="btn btn-sm btn-primary">Create</a>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <form id="product_form" class="form d-flex flex-column flex-lg-row" method="POST"
                    action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
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
                                        style="background-size: 75%; background-image: url({{ $product->image ? $product->image->getUrl() : asset('assets/admin/media/svg/files/blank-image.svg') }})">
                                    </div>
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg" id="image"
                                            value="{{ old('image') }}" />
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
                                <div class="text-muted fs-7">Set the product image. Only *.png, *.jpg and *.jpeg image files
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
                                    <h2>Status</h2>
                                </div>
                                <div class="card-toolbar">
                                    <div class="rounded-circle bg-@if ($product->status == 'draft') primary @elseif($product->status == 'published')success @elseif($product->status == 'inactive')danger @elseif($product->status == 'suspended')warning @endif w-15px h-15px"
                                        id="status_color"></div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                    data-placeholder="Select an option" id="status" name="status">
                                    <option></option>
                                    <option value="draft"
                                        {{ old('status') ? (old('status') == 'draft' ? 'selected' : '') : ($product->status == 'draft' ? 'selected' : '') }}>
                                        Draft
                                    </option>
                                    <option value="published"
                                        {{ old('status') ? (old('status') == 'published' ? 'selected' : '') : ($product->status == 'published' ? 'selected' : '') }}>
                                        Published</option>
                                    <option value="inactive"
                                        {{ old('status') ? (old('status') == 'inactive' ? 'selected' : '') : ($product->status == 'inactive' ? 'selected' : '') }}>
                                        Inactive</option>
                                </select>
                                <div class="text-muted fs-7">Set the product status.</div>
                            </div>
                        </div>
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Product Details</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <label class="form-label required">Category</label>
                                <select class="form-select" data-hide-search="true" name="category_id"
                                    data-control="select2" data-placeholder="Select an option">
                                    <option></option>
                                    @foreach ($all_category as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id') ? (old('category_id') == $category->id ? 'selected' : '') : ($product->category_id == $category->id ? 'selected' : '') }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="text-muted fs-7 mb-7">Add product to a category.</div>
                                <a href="{{ route('category.create') }}" class="btn btn-light-primary btn-sm mb-10">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                                                transform="rotate(-90 11 18)" fill="black" />
                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                        </svg>
                                    </span>
                                    Create new category
                                </a>
                                <label class="form-label d-block">Tags</label>
                                <input id="tags" name="tags" class="form-control mb-2"
                                    value="{{ old('tag') ?? $product->tags }}" />
                                <div class="text-muted fs-7">Add tags to a product.</div>
                            </div>

                            <div class="card-body pt-0">
                                <label class="form-label d-block">Video url</label>
                                <textarea name="video_url" placeholder="Video url" class="form-control mb-2" id="video_url"
                                    rows="3">{{ old('video_url') ?? $product->video_url }}</textarea>
                                <div class="text-muted fs-7">Set a video url to the product.</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2">
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                    href="#general">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                    href="#advance">Advance</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="general" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush py-4">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>General</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="mb-10 fv-row">
                                                <label class="required form-label">Product Name</label>
                                                <input type="text" name="title" class="form-control mb-2"
                                                    placeholder="Product name"
                                                    value="{{ old('title') ?? $product->title }}" id="title" />
                                                <div class="text-muted fs-7">A product name is required.</div>
                                            </div>
                                            <div>
                                                <label class="form-label">Description</label>
                                                <textarea name="description" placeholder="Type your text here..." class="form-control mb-2" id="description"
                                                    rows="5">{{ old('description') ?? $product->description }}</textarea>
                                                <div class="text-muted fs-7">Set a description to the product.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-flush py-4">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Pricing</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="mb-10 fv-row">
                                                <label class="required form-label">Base Price</label>
                                                <input type="number" id="price" name="price" class="form-control mb-2"
                                                    placeholder="Product price"
                                                    value="{{ old('price') ?? $product->price }}" />
                                                <div class="text-muted fs-7">Set the product price.</div>
                                            </div>
                                            <div class="fv-row mb-10">
                                                <label class="fs-6 fw-bold mb-2">Discount Type
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                        title="Select a discount type that will be applied to this product"></i></label>
                                                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                                    data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                                    <div class="col">
                                                        <label
                                                            class="btn btn-outline btn-outline-dashed btn-outline-default {{ old('discount_option')
                                                                ? (old('discount_option') == 1
                                                                    ? 'active'
                                                                    : '')
                                                                : ($product->discount_option
                                                                    ? ($product->discount_option == 1
                                                                        ? 'active'
                                                                        : '')
                                                                    : 'active') }} d-flex text-start p-6"
                                                            data-kt-button="true">
                                                            <span
                                                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio"
                                                                    name="discount_option" value="1" id="no_discount"
                                                                    {{ old('discount_option')
                                                                        ? (old('discount_option') == 1
                                                                            ? 'checked'
                                                                            : '')
                                                                        : ($product->discount_option
                                                                            ? ($product->discount_option == 1
                                                                                ? 'checked'
                                                                                : '')
                                                                            : 'checked') }} />
                                                            </span>
                                                            <span class="ms-5">
                                                                <span class="fs-4 fw-bolder text-gray-800 d-block">No
                                                                    Discount</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <label
                                                            class="btn btn-outline btn-outline-dashed btn-outline-default {{ old('discount_option')
                                                                ? (old('discount_option') == 2
                                                                    ? 'active'
                                                                    : '')
                                                                : ($product->discount_option
                                                                    ? ($product->discount_option == 2
                                                                        ? 'active'
                                                                        : '')
                                                                    : '') }} d-flex text-start p-6"
                                                            data-kt-button="true">
                                                            <span
                                                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio"
                                                                    name="discount_option" value="2"
                                                                    id="discount_percentage_radio"
                                                                    {{ old('discount_option')
                                                                        ? (old('discount_option') == 2
                                                                            ? 'checked'
                                                                            : '')
                                                                        : ($product->discount_option
                                                                            ? ($product->discount_option == 2
                                                                                ? 'checked'
                                                                                : '')
                                                                            : '') }} />
                                                            </span>
                                                            <span class="ms-5">
                                                                <span
                                                                    class="fs-4 fw-bolder text-gray-800 d-block">Percentage
                                                                    %</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <label
                                                            class="btn btn-outline btn-outline-dashed btn-outline-default {{ old('discount_option')
                                                                ? (old('discount_option') == 3
                                                                    ? 'active'
                                                                    : '')
                                                                : ($product->discount_option
                                                                    ? ($product->discount_option == 3
                                                                        ? 'active'
                                                                        : '')
                                                                    : '') }} d-flex text-start p-6"
                                                            data-kt-button="true">
                                                            <span
                                                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio"
                                                                    name="discount_option" value="3"
                                                                    id="discounted_price_radio"
                                                                    {{ old('discount_option')
                                                                        ? (old('discount_option') == 3
                                                                            ? 'checked'
                                                                            : '')
                                                                        : ($product->discount_option
                                                                            ? ($product->discount_option == 3
                                                                                ? 'checked'
                                                                                : '')
                                                                            : '') }} />
                                                            </span>
                                                            <span class="ms-5">
                                                                <span class="fs-4 fw-bolder text-gray-800 d-block">Fixed
                                                                    Discounted
                                                                    Price</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="{{ old('discount_option')
                                                ? (old('discount_option') == 2
                                                    ? ''
                                                    : 'd-none')
                                                : ($product->discount_option
                                                    ? ($product->discount_option == 2
                                                        ? ''
                                                        : 'd-none')
                                                    : 'd-none') }} mb-10 fv-row"
                                                id="discount_percentage">
                                                <label class="form-label">Set Discount Percentage</label>
                                                <input type="number"
                                                    {{ old('discount_option') ? (old('discount_option') == 2 ? 'name=discount' : '') : ($product->discount_option ? ($product->discount_option == 2 ? 'name=discount' : '') : '') }}
                                                    min="1" max="100" class="form-control mb-2" id="percentage"
                                                    placeholder="Discounted Percentage"
                                                    value="{{ old('discount_option') ? (old('discount_option') == 2 ? old('discount') : '') : ($product->discount ? ($product->discount_option == 2 ? $product->discount : '') : '') }}" />
                                                <div class="text-muted fs-7">Set a percentage discount to be applied on
                                                    this product.</div>
                                            </div>
                                            <div class="{{ old('discount_option')
                                                ? (old('discount_option') == 3
                                                    ? ''
                                                    : 'd-none')
                                                : ($product->discount_option
                                                    ? ($product->discount_option == 3
                                                        ? ''
                                                        : 'd-none')
                                                    : 'd-none') }} mb-10 fv-row"
                                                id="discounted_price">
                                                <label class="form-label">Fixed Price</label>
                                                <input type="number"
                                                    {{ old('discount_option') ? (old('discount_option') == 3 ? 'name=discount' : '') : ($product->discount_option ? ($product->discount_option == 3 ? 'name=discount' : '') : '') }}
                                                    id="fixed" class="form-control mb-2" placeholder="Discounted price"
                                                    value="{{ old('discount_option') ? (old('discount_option') == 3 ? old('discount') : '') : ($product->discount ? ($product->discount_option == 3 ? $product->discount : '') : '') }}" />
                                                <div class="text-muted fs-7">Set the discounted product price. The product
                                                    will be reduced at the determined fixed price</div>
                                            </div>
                                            <div class="d-flex flex-wrap gap-5">
                                                <div class="fv-row w-100 flex-md-root">
                                                    <label class="form-label">VAT (%)</label>
                                                    <input type="number" class="form-control mb-2" min="1" max="100"
                                                        value="{{ old('vat') ?? $product->vat }}" name="vat" />
                                                    <div class="text-muted fs-7">Set the product VAT percentage.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="advance" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush py-4">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Product Variations</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div data-kt-ecommerce-catalog-add-product="auto-options">
                                                <div id="variation">
                                                    <div class="form-group">
                                                        <div data-repeater-list="variation">
                                                            @if (old('variation'))
                                                                @foreach (old('variation') as $key => $variation)
                                                                    <div data-repeater-item>
                                                                        <div class="form-group row mb-5">
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label required">SKU</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="sku"
                                                                                    value="{{ $variation['sku'] }}" />
                                                                                @error('variation.' . $key . '.sku')
                                                                                    <div
                                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                                        <div data-field="attribute_id"
                                                                                            data-validator="notEmpty">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <label
                                                                                    class="form-label required">Price</label>
                                                                                <input type="number" class="form-control"
                                                                                    name="sku_price"
                                                                                    value="{{ $variation['sku_price'] }}" />
                                                                                @error('variation.' . $key . '.sku_price')
                                                                                    <div
                                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                                        <div data-field="attribute_id"
                                                                                            data-validator="notEmpty">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <label
                                                                                    class="form-label required">Quantity</label>
                                                                                <input type="number" class="form-control"
                                                                                    name="quantity"
                                                                                    value="{{ $variation['quantity'] ?? 0 }}" />
                                                                                @error('variation.' . $key . '.quantity')
                                                                                    <div
                                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                                        <div data-field="attribute_id"
                                                                                            data-validator="notEmpty">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-5">
                                                                                <div class="inner-repeater">
                                                                                    <div data-repeater-list="attribute"
                                                                                        class="mb-5">
                                                                                        @foreach ($variation['attribute'] as $key2 => $attribute)
                                                                                            <div data-repeater-item>
                                                                                                <div
                                                                                                    class="form-group row mb-5">
                                                                                                    <div
                                                                                                        class="col-md-5">
                                                                                                        <label
                                                                                                            class="form-label">
                                                                                                            Select Attribute
                                                                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                                                                data-bs-toggle="tooltip"
                                                                                                                title=""
                                                                                                                data-bs-original-title="Set empty if product is single variant"
                                                                                                                aria-label="Set empty if product is single variant"></i>
                                                                                                        </label>
                                                                                                        <select
                                                                                                            class="form-select"
                                                                                                            name="attribute_id"
                                                                                                            repeater="select2">
                                                                                                            <option
                                                                                                                value="">No
                                                                                                                Attribute
                                                                                                            </option>
                                                                                                            @foreach ($all_attribute as $value)
                                                                                                                <option
                                                                                                                    value="{{ $value->id }}"
                                                                                                                    {{ $attribute['attribute_id'] == $value->id ? 'selected' : '' }}>
                                                                                                                    {{ $value->title }}
                                                                                                                </option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                        @error('variation.'
                                                                                                            . $key .
                                                                                                            '.attribute.' .
                                                                                                            $key2 .
                                                                                                            '.attribute_id')
                                                                                                            <div
                                                                                                                class="fv-plugins-message-container invalid-feedback">
                                                                                                                <div data-field="attribute_id"
                                                                                                                    data-validator="notEmpty">
                                                                                                                    {{ $message }}
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        @enderror
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-5">
                                                                                                        <label
                                                                                                            class="form-label">
                                                                                                            Attribute Value
                                                                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                                                                data-bs-toggle="tooltip"
                                                                                                                title=""
                                                                                                                data-bs-original-title="Set empty if product is single variant"
                                                                                                                aria-label="Set empty if product is single variant"></i>
                                                                                                        </label>
                                                                                                        <input type="text"
                                                                                                            class="form-control"
                                                                                                            name="attribute_value"
                                                                                                            value="{{ $attribute['attribute_value'] }}" />
                                                                                                        @error('variation.'
                                                                                                            . $key .
                                                                                                            '.attribute.' .
                                                                                                            $key2 .
                                                                                                            '.attribute_value')
                                                                                                            <div
                                                                                                                class="fv-plugins-message-container invalid-feedback">
                                                                                                                <div data-field="attribute_id"
                                                                                                                    data-validator="notEmpty">
                                                                                                                    {{ $message }}
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        @enderror
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-2">
                                                                                                        <label
                                                                                                            class="form-label">&nbsp;</label>
                                                                                                        <button
                                                                                                            class="border border-secondary btn btn-icon btn-light-danger"
                                                                                                            data-repeater-delete
                                                                                                            type="button">
                                                                                                            <i
                                                                                                                class="la la-trash-o fs-3"></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                    <button
                                                                                        class="btn btn-sm btn-light-primary"
                                                                                        data-repeater-create type="button">
                                                                                        <i class="la la-plus"></i> Add
                                                                                        Number
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <a href="javascript:;" data-repeater-delete
                                                                                    class="btn btn-sm btn-light-danger mt-3 mt-md-9">
                                                                                    <i
                                                                                        class="la la-trash-o fs-3"></i>Delete
                                                                                    Row
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @else
                                                                <div data-repeater-item>
                                                                    <div class="form-group row mb-5">
                                                                        <div class="col-md-3">
                                                                            <label class="form-label required">SKU</label>
                                                                            <input type="text" class="form-control"
                                                                                name="sku" />
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label
                                                                                class="form-label required">Price</label>
                                                                            <input type="number" class="form-control"
                                                                                name="sku_price" />
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label
                                                                                class="form-label required">Quantity</label>
                                                                            <input type="number" class="form-control"
                                                                                name="quantity" />
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="inner-repeater">
                                                                                <div data-repeater-list="attribute"
                                                                                    class="mb-5">
                                                                                    <div data-repeater-item>
                                                                                        <div class="form-group row mb-5">
                                                                                            <div class="col-md-5">
                                                                                                <label
                                                                                                    class="form-label">
                                                                                                    Select Attribute
                                                                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                                                        data-bs-toggle="tooltip"
                                                                                                        title=""
                                                                                                        data-bs-original-title="Set empty if product is single variant"
                                                                                                        aria-label="Set empty if product is single variant"></i>
                                                                                                </label>
                                                                                                <select
                                                                                                    class="form-select"
                                                                                                    name="attribute_id"
                                                                                                    repeater="select2">
                                                                                                    <option value="">No
                                                                                                        Attribute</option>
                                                                                                    @foreach ($all_attribute as $value)
                                                                                                        <option
                                                                                                            value="{{ $value->id }}">
                                                                                                            {{ $value->title }}
                                                                                                        </option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-md-5">
                                                                                                <label
                                                                                                    class="form-label">
                                                                                                    Attribute Value
                                                                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                                                        data-bs-toggle="tooltip"
                                                                                                        title=""
                                                                                                        data-bs-original-title="Set empty if product is single variant"
                                                                                                        aria-label="Set empty if product is single variant"></i>
                                                                                                </label>
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    name="attribute_value" />
                                                                                            </div>
                                                                                            <div class="col-md-2">
                                                                                                <label
                                                                                                    class="form-label">&nbsp;</label>
                                                                                                <button
                                                                                                    class="border border-secondary btn btn-icon btn-light-danger"
                                                                                                    data-repeater-delete
                                                                                                    type="button">
                                                                                                    <i
                                                                                                        class="la la-trash-o fs-3"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <button
                                                                                    class="btn btn-sm btn-light-primary"
                                                                                    data-repeater-create type="button">
                                                                                    <i class="la la-plus"></i> Add
                                                                                    Number
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <a href="javascript:;" data-repeater-delete
                                                                                class="btn btn-sm btn-light-danger mt-3 mt-md-9">
                                                                                <i class="la la-trash-o fs-3"></i>Delete
                                                                                Row
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="javascript:;" data-repeater-create
                                                            class="btn btn-light-primary">
                                                            <i class="la la-plus"></i>Add Row
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <input type="text" class="form-control mb-2" name="meta_title"
                                                    id="meta_title" placeholder="Meta tag name"
                                                    value="{{ old('meta_title') }}" />
                                                <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple
                                                    and precise
                                                    keywords.</div>
                                            </div>
                                            <div class="mb-10">
                                                <label class="form-label">Meta Tag Description</label>
                                                <textarea name="meta_description" placeholder="Type your text here..." class="form-control mb-2" id="meta_description"
                                                    rows="5">{{ old('meta_description') }}</textarea>
                                                <div class="text-muted fs-7">Set a meta tag description to the product for
                                                    increased
                                                    SEO ranking.</div>
                                            </div>
                                            <div>
                                                <label class="form-label">Meta Tag Keywords</label>
                                                <input id="meta_keyword" name="meta_keyword" class="form-control mb-2"
                                                    value="{{ old('meta_keyword') }}" />
                                                <div class="text-muted fs-7">Set a list of keywords that the product is
                                                    related to.
                                                    Separate the keywords by adding a comma
                                                    <code>,</code>between each keyword.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('product.index') }}" class="btn btn-light me-5">Cancel</a>
                            <button type="submit" id="product_submit" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endSection
@section('script')
    <script src="{{ asset('assets/admin/js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script>
        $('#variation').repeater({
            repeaters: [{
                selector: '.inner-repeater',
                show: function() {
                    $(this).slideDown();
                    $(this).find('[repeater="select2"]').select2({
                        minimumResultsForSearch: -1
                    });
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                },

                ready: function() {
                    // Init select2
                    $('[repeater="select2"]').select2({
                        minimumResultsForSearch: -1
                    });
                }
            }],

            show: function() {
                $(this).slideDown();
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
    </script>
@endSection
