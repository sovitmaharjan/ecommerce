<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <a href="{{ route('dashboard') }}">
            <img alt="Logo" src="{{ asset('assets/admin/media/logos/logo-1-dark.svg') }}" class="h-25px logo" />
        </a>
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize">
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.5"
                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                        fill="black" />
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="black" />
                </svg>
            </span>
        </div>
    </div>
    <div class="aside-menu flex-column-fluid">
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
            data-kt-scroll-offset="0">
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item">
                    <a class="menu-link {{ request()->is('admin') ? 'active' : '' }}"
                        href="{{ route('dashboard') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Navigation</span>
                    </div>
                </div>
                @role('admin')
                    <div data-kt-menu-trigger="click"
                        class="menu-item   {{ request()->is('admin/role*') || request()->is('admin/user*') || request()->is('admin/customer*') || request()->is('admin/account-request*') ? 'here show' : '' }} menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path opacity="0.3"
                                            d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                            fill="black"></path>
                                        <path
                                            d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title">Account</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion">
                            @role('admin')
                                <div class="menu-item">
                                    <a class="menu-link {{ request()->is('admin/user*') ? 'active' : '' }}"
                                        href="{{ route('user.index') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Vendor</span>
                                    </a>
                                </div>
                            @endrole
                            @role('admin')
                                <div class="menu-item">
                                    <a class="menu-link {{ request()->is('admin/customer*') ? 'active' : '' }}"
                                        href="{{ route('customer.index') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Customer</span>
                                    </a>
                                </div>
                            @endrole
                            @role('admin')
                                <div class="menu-item">
                                    <a class="menu-link {{ request()->is('admin/account-request*') ? 'active' : '' }}"
                                        href="{{ route('account-request.index') }}" data-bs-toggle="tooltip"
                                        data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Account Request</span>
                                    </a>
                                </div>
                            @endrole
                        </div>
                    </div>
                @endrole
                @hasanyrole('admin|vendor')
                    <div data-kt-menu-trigger="click"
                        class="menu-item   {{ request()->is('admin/category*') || request()->is('admin/attribute*') || request()->is('admin/brand*') || request()->is('admin/product*') ? 'here show' : '' }} menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path opacity="0.3"
                                            d="M18.041 22.041C18.5932 22.041 19.041 21.5932 19.041 21.041C19.041 20.4887 18.5932 20.041 18.041 20.041C17.4887 20.041 17.041 20.4887 17.041 21.041C17.041 21.5932 17.4887 22.041 18.041 22.041Z"
                                            fill="black" />
                                        <path opacity="0.3"
                                            d="M6.04095 22.041C6.59324 22.041 7.04095 21.5932 7.04095 21.041C7.04095 20.4887 6.59324 20.041 6.04095 20.041C5.48867 20.041 5.04095 20.4887 5.04095 21.041C5.04095 21.5932 5.48867 22.041 6.04095 22.041Z"
                                            fill="black" />
                                        <path opacity="0.3"
                                            d="M7.04095 16.041L19.1409 15.1409C19.7409 15.1409 20.141 14.7409 20.341 14.1409L21.7409 8.34094C21.9409 7.64094 21.4409 7.04095 20.7409 7.04095H5.44095L7.04095 16.041Z"
                                            fill="black" />
                                        <path
                                            d="M19.041 20.041H5.04096C4.74096 20.041 4.34095 19.841 4.14095 19.541C3.94095 19.241 3.94095 18.841 4.14095 18.541L6.04096 14.841L4.14095 4.64095L2.54096 3.84096C2.04096 3.64096 1.84095 3.04097 2.14095 2.54097C2.34095 2.04097 2.94096 1.84095 3.44096 2.14095L5.44096 3.14095C5.74096 3.24095 5.94096 3.54096 5.94096 3.84096L7.94096 14.841C7.94096 15.041 7.94095 15.241 7.84095 15.441L6.54096 18.041H19.041C19.641 18.041 20.041 18.441 20.041 19.041C20.041 19.641 19.641 20.041 19.041 20.041Z"
                                            fill="black" />
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title">Catalog</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion">
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('admin/category*') ? 'active' : '' }}"
                                    href="{{ route('category.index') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Category</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('admin/attribute*') ? 'active' : '' }}"
                                    href="{{ route('attribute.index') }}" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Attribute</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('admin/brand*') ? 'active' : '' }}"
                                    href="{{ route('brand.index') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Brand</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('admin/product*') ? 'active' : '' }}"
                                    href="{{ route('product.index') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Product</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endhasanyrole
                @hasanyrole('admin|vendor')
                    <div class="menu-item">
                        <a class="menu-link {{ request()->is('admin/order*') ? 'active' : '' }}"
                            href="{{ route('order.index') }}">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title">Order</span>
                        </a>
                    </div>
                @endhasanyrole
                @hasanyrole('admin|vendor')
                    <div data-kt-menu-trigger="click"
                        class="menu-item   {{ request()->is('admin/user-profile*') || request()->is('admin/banner*') || request()->is('admin/general-setting*') || request()->is('admin/payment*') ? 'here show' : '' }} menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                            fill="black"></path>
                                        <path opacity="0.3"
                                            d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title">Setting</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion">
                            @hasanyrole('admin|vendor')
                                <div class="menu-item">
                                    <a class="menu-link {{ request()->is('admin/user-profile*') ? 'active' : '' }}"
                                        href="{{ route('user-profile.index') }}" data-bs-toggle="tooltip"
                                        data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Profile Setting</span>
                                    </a>
                                </div>
                            @endhasanyrole
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('admin/banner*') ? 'active' : '' }}"
                                    href="{{ route('banner.index') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Banner Setting</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('admin/general-setting*') ? 'active' : '' }}"
                                    href="{{ route('general-setting.index') }}" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">General Setting</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('admin/payment*') ? 'active' : '' }}"
                                    href="{{ route('payment.index') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Payment Setting</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endhasanyrole
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Others</span>
                    </div>
                </div>
                <div data-kt-menu-trigger="click"
                    class="menu-item   {{ request()->is('admin/report1*') || request()->is('admin/report2*') || request()->is('admin/report3*') ? 'here show' : '' }} menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z"
                                        fill="black"></path>
                                    <path opacity="0.3"
                                        d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Report</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('admin/report1*') ? 'active' : '' }}"
                                href="{{ route('under-construction') }}" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Report 1</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('admin/report2*') ? 'active' : '' }}"
                                href="{{ route('under-construction') }}" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Report 2</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('admin/report3*') ? 'active' : '' }}"
                                href="{{ route('under-construction') }}" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Report 3</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
        <a href="#" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover"
            data-bs-dismiss-="click" title="Contact us for help!">
            <span class="btn-label">Contact Us</span>
            <span class="svg-icon btn-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3"
                        d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                        fill="black" />
                    <rect x="7" y="17" width="6" height="2" rx="1" fill="black" />
                    <rect x="7" y="12" width="10" height="2" rx="1" fill="black" />
                    <rect x="7" y="7" width="6" height="2" rx="1" fill="black" />
                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                </svg>
            </span>
        </a>
    </div>
</div>
