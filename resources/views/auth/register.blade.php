@extends('auth.layouts.app')

@section('content')
    <!--begin::Form-->
    <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" method="POST" action="{{ route('register') }}">
        @csrf
        <!--begin::Heading-->
        <div class="mb-10 text-center">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">Create an Account</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">Already have an account?
                <a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in
                    here</a>
            </div>
            <!--end::Link-->
        </div>
        <!--end::Heading-->
        <!--begin::Input group-->
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
        <!--end::Input group-->
        <!--begin::Input group-->
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
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-10 fv-row" data-kt-password-meter="true">
            <!--begin::Wrapper-->
            <div class="mb-1">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                <!--end::Label-->
                <!--begin::Input wrapper-->
                <div class="position-relative mb-3">
                    <input id="password" class="form-control form-control-lg form-control-solid" type="password"
                        placeholder="" name="password" required autocomplete="off" />
                    @error('password')
                        <div class="fv-plugins-message-container invalid-feedback">
                            <div data-field="password" data-validator="notEmpty">{{ $message }}</div>
                        </div>
                    @enderror
                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                        data-kt-password-meter-control="visibility">
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                    </span>
                </div>
                <!--end::Input wrapper-->
                <!--begin::Meter-->
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
                <!--end::Meter-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Hint-->
            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp;
                symbols.</div>
            <!--end::Hint-->
        </div>
        <!--end::Input group=-->
        <!--begin::Input group-->
        <div class="fv-row mb-5">
            <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
            <input id="password-confirm" class="form-control form-control-lg form-control-solid" type="password"
                placeholder="" name="password_confirmation" required autocomplete="new-password" />
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <label class="form-check form-check-custom form-check-solid form-check-inline">
                <input class="form-check-input" type="checkbox" name="toc" value="1" />
                <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                    <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
            </label>
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center">
            <button type="button" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
@endsection

@section('script')

    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('assets/admin/js/custom/authentication/sign-up/general.js') }}"></script>
    <!--end::Page Custom Javascript-->

@endsection
