@extends('auth.layouts.app')

@section('content')
    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="text-center mb-10">
            <h1 class="text-dark mb-3">Sign In to {{ config('general_setting')->website_name ?? 'Ecommerce' }}</h1>
            <div class="text-gray-400 fw-bold fs-4">New Here?
                <a href="{{ route('register') }}" class="link-primary fw-bolder">Send us your detail</a>
            </div>
        </div>
        <div class="fv-row mb-10">
            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
            <input id="email" class="form-control form-control-lg form-control-solid" type="email" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus />
            @error('email')
                <div class="fv-plugins-message-container invalid-feedback">
                    <div data-field="email" data-validator="notEmpty">{{ $message }}</div>
                </div>
            @enderror
        </div>
        <div class="fv-row mb-10">
            <div class="d-flex flex-stack mb-2">
                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
            </div>
            <input id="password" class="form-control form-control-lg form-control-solid" type="password" name="password"
                required autocomplete="current-password" />
            @error('password')
                <div class="fv-plugins-message-container invalid-feedback">
                    <div data-field="password" data-validator="notEmpty">{{ $message }}</div>
                </div>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                <span class="indicator-label">Continue</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                <img alt="Logo" src="{{ asset('assets/admin/media/svg/brand-logos/google-icon.svg') }}"
                    class="h-20px me-3" />Continue with Google</a>
            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                <img alt="Logo" src="{{ asset('assets/admin/media/svg/brand-logos/facebook-4.svg') }}"
                    class="h-20px me-3" />Continue with Facebook</a>
            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                <img alt="Logo" src="{{ asset('assets/admin/media/svg/brand-logos/apple-black.svg') }}"
                    class="h-20px me-3" />Continue with Apple</a>
        </div>
    </form>
@endsection

@section('script')

    <script src="{{ asset('assets/admin/js/custom/authentication/sign-in/general.js') }}"></script>

@endsection
