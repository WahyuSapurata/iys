<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>{{ config('app.name') }} | IYS 2023</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, Bootstrap, Bootstrap 5, Angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask &amp; Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('iys icon.png') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
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
                    <img src="{{ asset('cover_landing.jpg') }}" class="w-100" style="height: 100vh" alt="">
                    <img src="{{ asset('logo_muda..png') }}" class="w-100px position-absolute bottom-0 end-0"
                        style="background-color: #fff; border-top-left-radius: 30px" alt="">
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
                                        class="logo-default h-25px h-lg-65px" />
                                    <img alt="Logo" src="{{ asset('logo_kemenpora.png') }}"
                                        class="logo-sticky h-20px h-lg-60px" />
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
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6"
                                                href="{{ route('landing2023') }}" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">2023</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6"
                                                href="{{ route('landing') }}" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">2024</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Toolbar-->
                                        <div class="flex-equal ms-15">
                                            <button class="btn btn-danger">Guide Book - Download</button>
                                        </div>

                                        <div class="d-flex ms-10" style="align-items: center; gap: 10px">
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
        <div class="z-index-2" style="margin-top: 645px">
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
                <div class="row w-100 gy-10 mb-md-20 mt-3 justify-content-center" style="padding: 0 100px;">
                    <h3 class="fs-2hx text-dark text-center" id="how-it-works"
                        data-kt-scroll-offset="{default: 100, lg: 150}">
                        DOKUMENTASI IYS 2023</h3>
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
                    <!--begin::Heading-->
                    <div class="text-center mb-5">
                        <!--begin::Title-->
                        <h3 class="fs-2hx text-white mt-10" id="clients"
                            data-kt-scroll-offset="{default: 125, lg: 150}">
                            VENUE</h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Row-->
                    <div class="py-5 py-lg-10">
                        <!--begin::Col-->
                        <div class="mb-10 mb-lg-0">
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9 mb-10 embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.7899906801363!2d119.5751664739799!3d-5.137486594839698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee520c8652ae3%3A0x42f4f41d03bb871b!2sTokka%20Tena%20Rata!5e0!3m2!1sid!2sid!4v1709790655010!5m2!1sid!2sid"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <!--end::Block-->
                        </div>
                        <style>
                            .embed-responsive {
                                position: relative;
                                display: block;
                                width: 100%;
                                height: 55vh;
                                padding: 0;
                                overflow: hidden;
                            }

                            .embed-responsive::before {
                                content: "";
                                display: block;
                                padding-top: 56.25%;
                                /* 16:9 aspect ratio */
                            }

                            .embed-responsive .embed-responsive-item,
                            .embed-responsive iframe,
                            .embed-responsive embed,
                            .embed-responsive object,
                            .embed-responsive video {
                                position: absolute;
                                top: 0;
                                left: 0;
                                bottom: 0;
                                width: 100%;
                                height: 100%;
                                border: 0;
                            }
                        </style>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Heading-->
                    <div class="text-center d-flex justify-content-center mb-17"
                        style="align-items: center; gap: 20px">
                        <!--begin::Title-->
                        <svg id="svg_maps" class="mb-5" height="3em" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <style>
                                #svg_maps {
                                    fill: #dd3b1e
                                }
                            </style>
                            <path
                                d="M320 64A64 64 0 1 0 192 64a64 64 0 1 0 128 0zm-96 96c-35.3 0-64 28.7-64 64v48c0 17.7 14.3 32 32 32h1.8l11.1 99.5c1.8 16.2 15.5 28.5 31.8 28.5h38.7c16.3 0 30-12.3 31.8-28.5L318.2 304H320c17.7 0 32-14.3 32-32V224c0-35.3-28.7-64-64-64H224zM132.3 394.2c13-2.4 21.7-14.9 19.3-27.9s-14.9-21.7-27.9-19.3c-32.4 5.9-60.9 14.2-82 24.8c-10.5 5.3-20.3 11.7-27.8 19.6C6.4 399.5 0 410.5 0 424c0 21.4 15.5 36.1 29.1 45c14.7 9.6 34.3 17.3 56.4 23.4C130.2 504.7 190.4 512 256 512s125.8-7.3 170.4-19.6c22.1-6.1 41.8-13.8 56.4-23.4c13.7-8.9 29.1-23.6 29.1-45c0-13.5-6.4-24.5-14-32.6c-7.5-7.9-17.3-14.3-27.8-19.6c-21-10.6-49.5-18.9-82-24.8c-13-2.4-25.5 6.3-27.9 19.3s6.3 25.5 19.3 27.9c30.2 5.5 53.7 12.8 69 20.5c3.2 1.6 5.8 3.1 7.9 4.5c3.6 2.4 3.6 7.2 0 9.6c-8.8 5.7-23.1 11.8-43 17.3C374.3 457 318.5 464 256 464s-118.3-7-157.7-17.9c-19.9-5.5-34.2-11.6-43-17.3c-3.6-2.4-3.6-7.2 0-9.6c2.1-1.4 4.8-2.9 7.9-4.5c15.3-7.7 38.8-14.9 69-20.5z" />
                        </svg>
                        <h3 class="fs-2hx text-white mb-5" id="clients"
                            data-kt-scroll-offset="{default: 125, lg: 150}">
                            Tokka Tena Rata</h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                </div>
                <!--end::Container-->
                <!--begin::Separator-->
                <div class="landing-dark-separator"></div>
                <!--end::Separator-->
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
        $(".kt_datepicker_1").flatpickr({
            dateFormat: "d-m-Y",
        });
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