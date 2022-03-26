<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('assets/admin/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/admin/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>

<!--end::Global Javascript Bundle-->
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toastr-bottom-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script>
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
@yield('script')
