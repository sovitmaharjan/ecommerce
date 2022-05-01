<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>{{ config('general_setting')->website_name ?? 'Ecommerce' }} | @yield('title')</title>
    @include('layouts.meta')
    @include('layouts.style')
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.script')
</body>
</html>
