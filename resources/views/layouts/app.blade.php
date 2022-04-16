<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>Title</title>
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
