@extends('admin.layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">User</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-dark">User</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <div class="m-0">
                        <a href="{{ route('user.index') }}"
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
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">User Statistics</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Over {{ count($user) }}
                                user{{ count($user) > 1 ? 's' : '' }}</span>
                        </h3>
                    </div>
                    <div class="card-body pt-0">
                        <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table id="kt_datatable_example_5"
                                    class="table table-row-bordered gy-5 gs-7 border rounded align-middle">
                                    <thead>
                                        <tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            @can(['user-edit', 'user-delete'])
                                                <th>Action</th>
                                            @endcan
                                            @can('user-login-as')
                                                <th>Login as</th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="symbol symbol-50px">
                                                            <span class="symbol-label"
                                                                style="background-image:url({{ $value->profile
                                                                    ? ($value->profile->image
                                                                        ? $value->profile->image->getUrl()
                                                                        : asset('assets/admin/media/svg/files/blank-image.svg'))
                                                                    : asset('assets/admin/media/svg/files/blank-image.svg') }});">
                                                            </span>
                                                        </span>
                                                        <div class="ms-5">
                                                            <span
                                                                class="text-gray-800 fs-5 fw-bolder">{{ $value->name }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $value->email }}
                                                </td>
                                                <td>
                                                    @if ($value->email_verified_at)
                                                        <div class="badge badge-light-success">Active</div>
                                                    @else
                                                        <div class="badge badge-light-danger">InActive</div>
                                                    @endif
                                                </td>
                                                @can(['user-edit', 'user-delete'])
                                                    <td>
                                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">Actions
                                                            <span class="svg-icon svg-icon-5 m-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                            data-kt-menu="true">
                                                            @can('user-edit')
                                                                <div class="menu-item px-3">
                                                                    <a href="{{ route('user.edit', $value->id) }}"
                                                                        class="menu-link px-3">Edit</a>
                                                                </div>
                                                            @endcan
                                                            @can('user-delete')
                                                                <div class="menu-item px-3">
                                                                    <form id="form{{ $value->id }}"
                                                                        action="{{ route('user.destroy', $value->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('delete')
                                                                    </form>
                                                                    <a href="javascript:void(0)" class="menu-link px-3 delete"
                                                                        data-kt-customer-table-filter="delete_row"
                                                                        data-id="{{ $value->id }}"
                                                                        data-name="{{ $value->title }}">Delete</a>
                                                                </div>
                                                            @endcan
                                                        </div>
                                                    </td>
                                                @endcan
                                                @can('user-login-as')
                                                    <td>
                                                        <a href="{{ route('user.loginWithId', $value->id) }}"
                                                            class="btn btn-sm btn-primary">
                                                            <i class="bi bi-box-arrow-in-right fs-1x"></i>
                                                            Login
                                                        </a>
                                                    </td>
                                                @endcan
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection
@section('script')
    <script>
        $(document).ready(function() {
            $("#kt_datatable_example_5").DataTable({
                "language": {
                    "lengthMenu": "Show _MENU_",
                },
                "dom": "<'row'" +
                    "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                    "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                    ">" +

                    "<'table-responsive'tr>" +

                    "<'row'" +
                    "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                    "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                    ">"
            });
            $('.delete').on('click', function() {
                event.preventDefault();
                var t = $(this);
                var name = t.data('name');
                var id = t.data('id');
                Swal.fire({
                    text: 'You are about to delete ' + name + ' data. Are you sure?',
                    icon: "warning",
                    buttonsStyling: false,
                    showCancelButton: true,
                    confirmButtonText: "Delete",
                    cancelButtonText: 'Cancel',
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: 'btn btn-danger'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form' + id).submit();
                    }
                })
            });
        })
    </script>
@endSection
