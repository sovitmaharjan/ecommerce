<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <title>{{ config('general_setting')->website_name ?? 'Test' }}</title>
    @include('auth.layouts.meta')
    @include('auth.layouts.style')
    {{-- {{ dd(get_defined_vars()) }} --}}
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-dark">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url({{ url('assets/media/illustrations/sketchy-1/14-dark.png') }})">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <a href="{{ route('admin.dashboard') }}" class="mb-12">
                    <img alt="Logo" src="{{ asset('assets/admin/media/logos/logo-2.svg') }}" class="h-40px" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    @yield('content')
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
                    <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
                    <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    @include('auth.layouts.script')
    @error('email')
        <script>
            toastr.error('{{ $message }}');
        </script>
    @enderror
    @error('password')
        <script>
            toastr.error('{{ $message }}');
        </script>
    @enderror
    @if (Session::get('success'))
        <script>
            toastr.success('{{ Session::get('success') }}');
        </script>
    @endif
    @if (Session::get('info'))
        <script>
            toastr.info('{{ Session::get('info') }}');
        </script>
    @endif
    @if (Session::get('error'))
        <script>
            toastr.error('{{ Session::get('error') }}');
        </script>
    @endif
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
