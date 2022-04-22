@extends('auth.layouts.app')

@section('content')
    <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-10 text-center">
            <h1 class="text-dark mb-3">Send your detail</h1>
            <div class="text-gray-400 fw-bold fs-4">Already have an account?
                <a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in
                    here</a>
            </div>
        </div>
        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">Full Name</label>
            <input id="name" class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="name"
                value="{{ old('name') }}" required autocomplete="off" autofocus />
            @error('name')
                <div class="fv-plugins-message-container invalid-feedback">
                    <div data-field="name" data-validator="notEmpty">{{ $message }}</div>
                </div>
            @enderror
        </div>
        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">Email</label>
            <input id="email" class="form-control form-control-lg form-control-solid" type="email" placeholder=""
                name="email" value="{{ old('email') }}" required autocomplete="off" />
            @error('email')
                <div class="fv-plugins-message-container invalid-feedback">
                    <div data-field="email" data-validator="notEmpty">{{ $message }}</div>
                </div>
            @enderror
        </div>
        <div class="fv-row mb-10">
            <label class="form-label fs-6 fw-bolder text-dark">Contact Number</label>
            <input id="contact" class="form-control form-control-lg form-control-solid" type="text" name="contact"
                value="{{ old('contact') }}" required autocomplete="contact" autofocus />
            @error('contact')
                <div class="fv-plugins-message-container invalid-feedback">
                    <div data-field="contact" data-validator="notEmpty">{{ $message }}</div>
                </div>
            @enderror
        </div>
        <div class="fv-row mb-10">
            <label class="form-label fs-6 fw-bolder text-dark">Shop Name</label>
            <input id="shop_name" class="form-control form-control-lg form-control-solid" type="text" name="shop_name"
                value="{{ old('shop_name') }}" autocomplete="shop_name" autofocus />
            @error('shop_name')
                <div class="fv-plugins-message-container invalid-feedback">
                    <div data-field="shop_name" data-validator="notEmpty">{{ $message }}</div>
                </div>
            @enderror
        </div>
        <div class="fv-row mb-10">
            <label class="form-check form-check-custom form-check-solid form-check-inline">
                <input class="form-check-input" type="checkbox" name="toc" value="1" />
                <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                    <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
            </label>
        </div>
        <div class="text-center">
            <button type="button" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </form>
@endsection

@section('script')

    <script src="{{ asset('assets/admin/js/custom/authentication/sign-up/general.js') }}"></script>

@endsection
