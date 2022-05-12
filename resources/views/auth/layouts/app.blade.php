<!DOCTYPE html>
<htwml lang="en">

<head>
    <title>{{ config('general_setting')->website_name ?? 'Ecommerce' }}</title>
    @include('auth.layouts.meta')
    @include('auth.layouts.style')
</head>

<body id="kt_body" class="bg-dark">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url({{ url('assets/media/illustrations/sketchy-1/14-dark.png') }})">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <a href="{{ route('dashboard') }}" class="mb-12">
                    <img alt="Logo" src="{{ asset('assets/admin/media/logos/logo-2.svg') }}" class="h-40px" />
                </a>
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    @yield('content')
                </div>
            </div>
            <div class="d-flex flex-center flex-column-auto p-10">
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="https://www.babasofttechnology.com/" class="text-muted text-hover-primary px-2">About</a>
                    <a href="https://www.babasofttechnology.com/contact/" class="text-muted text-hover-primary px-2">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
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
</body>

</html>
