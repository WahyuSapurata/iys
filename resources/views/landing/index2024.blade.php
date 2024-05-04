<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>{{ config('app.name') }} | YCC 2023</title>
    <meta charset="utf-8" />
    <meta name="description" content="Registrasi Pendaftaran Indonesian Youth Summit" />
    <meta name="keywords"
        content="dispora, iys, indonesia your summit, pendaftaran indonesia your summit, Registrasi Pendaftaran Indonesian Youth Summit" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="IYS - Indonesian Youth Summit" />
    <meta property="og:url" content="https://iys.dispora.makassarkota.go.id" />
    <meta property="og:site_name" content="Dispora | IYS" />
    <link rel="canonical" href="https://iys.dispora.makassarkota.go.id" />
    <link rel="shortcut icon" href="{{ asset('iys icon.png') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body data-kt-name="metronic" id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu"
    class="bg-white position-relative app-blank">
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div class="position-relative">
                <div class="position-absolute w-100 z-index-n2">
                    <img src="{{ asset('cover_landing.jpg') }}" class="w-100 backgriund-landing d-none d-md-block"
                        style="height: 100vh" alt="">
                    <img src="{{ asset('cover_mobile.jpg') }}" class="w-100 backgriund-landing d-block d-md-none"
                        style="height: 100vh" alt="">
                    <div class="position-absolute bottom-0 end-0"
                        style="background-color: #fff; border-top-left-radius: 30px">
                        <img src="{{ asset('logo_muda..png') }}" class="w-80px" alt="">
                        <img src="{{ asset('Logo_duta_pemuda_makassar.png') }}" class="w-65px" alt="">
                        <img src="{{ asset('binar.png') }}" class="w-60px" alt="">
                        <img src="{{ asset('pemimpin.png') }}" class="w-80px" alt="">
                        <img src="{{ asset('logo_f8.png') }}" class="w-80px" alt="">
                    </div>
                </div>
                <!--begin::Header-->
                <div class="landing-header" style="background-color: #27010191" data-kt-sticky="true"
                    data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between">
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center flex-equal">
                                <!--begin::Mobile menu toggle-->
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                    id="kt_landing_menu_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-2hx">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Mobile menu toggle-->
                                <!--begin::Logo image-->
                                <a href="../../demo1/dist/landing.html">
                                    <img alt="Logo" src="{{ asset('logo_kemenpora.png') }}"
                                        class="logo-default h-45px h-lg-65px" />
                                    <img alt="Logo" src="{{ asset('logo_kemenpora.png') }}"
                                        class="logo-sticky h-40px h-lg-60px" />
                                </a>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Logo-->
                            <!--begin::Menu wrapper-->
                            <div class="d-lg-block" id="kt_header_nav_wrapper">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true"
                                    data-kt-drawer-name="landing-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                                    data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                    data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                                        id="kt_landing_menu" style="align-items: center">
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6"
                                                href="{{ route('landing2023') }}" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">2023</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6"
                                                href="{{ route('landing') }}" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">2024</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Toolbar-->
                                        <div class="flex-equal ms-md-15">
                                            <button class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_1">Daftar</button>
                                        </div>

                                        <div class="d-grid d-md-flex ms-md-10" style="align-items: center; gap: 10px">
                                            <img src="{{ asset('pemkot.png') }}" class="h-60px" alt="">
                                            <img src="{{ asset('Logo_dispora.png') }}" class="h-60px"
                                                alt="">
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Header Section-->
        <!--begin::How It Works Section-->
        <div class="z-index-2 content-deskripsi-pamflet" style="margin-top: 645px">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Product slider-->
                <div class="tns tns-default">
                    <!--begin::Slider-->
                    <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000"
                        data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                        data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false"
                        data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{ asset('dok_2023/flayer.jpeg') }}" class="card-rounded shadow mw-100"
                                alt="" />
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Slider-->
                    <!--begin::Slider button-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                        <span class="svg-icon svg-icon-3x">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Slider button-->
                    <!--begin::Slider button-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                        <span class="svg-icon svg-icon-3x">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Slider button-->
                </div>
                <!--end::Product slider-->
                <!--begin::Row-->
                <div class="row w-100 gy-10 mb-md-20 mt-3 justify-content-center content-benefit">
                    <h3 class="fs-2hx text-dark text-center" id="how-it-works"
                        data-kt-scroll-offset="{default: 100, lg: 150}">
                        DOKUMENTASI YCC 2023</h3>
                    <!--begin::Col-->
                    <div class="col-md-3">
                        <!--begin::Story-->
                        <div class="shadow-lg">
                            <!--begin::Heading-->
                            <img src="{{ asset('dok_2023/1.JPG') }}" class="w-100 rounded-2" alt="">
                            <!--end::Heading-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3">
                        <!--begin::Story-->
                        <div class="shadow-lg">
                            <!--begin::Heading-->
                            <img src="{{ asset('dok_2023/2.JPG') }}" class="w-100 rounded-2" alt="">
                            <!--end::Heading-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3">
                        <!--begin::Story-->
                        <div class="shadow-lg">
                            <!--begin::Heading-->
                            <img src="{{ asset('dok_2023/3.JPG') }}" class="w-100 rounded-2" alt="">
                            <!--end::Heading-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3">
                        <!--begin::Story-->
                        <div class="shadow-lg">
                            <!--begin::Heading-->
                            <img src="{{ asset('dok_2023/4.JPG') }}" class="w-100 rounded-2" alt="">
                            <!--end::Heading-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3">
                        <!--begin::Story-->
                        <div class="shadow-lg">
                            <!--begin::Heading-->
                            <img src="{{ asset('dok_2023/5.JPG') }}" class="w-100 rounded-2" alt="">
                            <!--end::Heading-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3">
                        <!--begin::Story-->
                        <div class="shadow-lg">
                            <!--begin::Heading-->
                            <img src="{{ asset('dok_2023/6.JPG') }}" class="w-100 rounded-2" alt="">
                            <!--end::Heading-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3">
                        <!--begin::Story-->
                        <div class="shadow-lg">
                            <!--begin::Heading-->
                            <img src="{{ asset('dok_2023/7.JPG') }}" class="w-100 rounded-2" alt="">
                            <!--end::Heading-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3">
                        <!--begin::Story-->
                        <div class="shadow-lg">
                            <!--begin::Heading-->
                            <img src="{{ asset('dok_2023/8.JPG') }}" class="w-100 rounded-2" alt="">
                            <!--end::Heading-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3">
                        <!--begin::Story-->
                        <div class="shadow-lg">
                            <!--begin::Heading-->
                            <img src="{{ asset('dok_2023/9.JPG') }}" class="w-100 rounded-2" alt="">
                            <!--end::Heading-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3">
                        <!--begin::Story-->
                        <div class="shadow-lg">
                            <!--begin::Heading-->
                            <img src="{{ asset('dok_2023/10.JPG') }}" class="w-100 rounded-2" alt="">
                            <!--end::Heading-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::How It Works Section-->
        <!--begin::Footer Section-->
        <div class="mb-0">
            <!--begin::Curve top-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <style>
                        svg {
                            fill: #fe4646;
                        }
                    </style>
                    <path
                        d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z">
                    </path>
                </svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="pt-20" style="background-image: linear-gradient(to top, #080808cc, #fe4646)">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-md-row justify-content-between py-7 py-lg-10">
                        <!--begin::Links-->
                        <div class="d-flex fw-semibold flex-column me-20">
                            <!--begin::Subtitle-->
                            <h4 class="fw-bold text-gray-400 mb-6">Contact</h4>
                            <!--end::Subtitle-->
                            <!--begin::Link-->
                            <a href="" class="mb-6">
                                <img src="admin/assets/media/svg/brand-logos/ebay.svg" class="h-20px me-2"
                                    alt="" />
                                <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">E-mail :
                                    indonesianyouthsummitiys@gmail.com</span>
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a href="https://www.instagram.com/indonesiayouthsummit/" target="_blank" class="mb-6">
                                <img src="admin/assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2"
                                    alt="" />
                                <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram :
                                    @indonesiayouthsummit</span>
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a href="https://api.whatsapp.com/send?phone=6289517468703" target="_blank"
                                class="mb-6">
                                <img src="admin/assets/media/svg/brand-logos/whatsapp.svg" class="h-20px me-2"
                                    alt="" />
                                <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Whatsapp :
                                    +6289517468703</span>
                            </a>
                            <!--end::Link-->
                        </div>
                        <!--end::Links-->
                        <!--begin::Links-->
                        <div class="d-flex fw-semibold flex-column ms-lg-20">
                            <!--begin::Subtitle-->
                            <h4 class="fw-bold text-gray-400 mb-6">Helps</h4>
                            <!--end::Subtitle-->
                            <!--begin::Link-->
                            <a href="https://www.facebook.com/keenthemes" class="mb-6">
                                <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Help
                                    Center</span>
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a href="https://github.com/KeenthemesHub" class="mb-6">
                                <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</span>
                            </a>
                            <!--end::Link-->
                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Footer Section-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="svg-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                        transform="rotate(90 13 6)" fill="currentColor" />
                    <path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
    </div>
    <!--end::Root-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "admin/assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used by this page)-->
    <script src="{{ asset('admin/assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used by this page)-->
    <script src="{{ asset('admin/assets/js/custom/landing.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/pages/pricing/general.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            @if (Session::has('status'))
                Swal.fire({
                    icon: 'success',
                    title: 'Mantap',
                    text: @json(Session::get('message')),
                    showConfirmButton: false,
                    timer: 3000
                })
            @endif
        });
    </script>

</body>
<!--end::Body-->

</html>
