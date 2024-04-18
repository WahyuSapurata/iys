<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>{{ config('app.name') }} | {{ $data_event->event }}</title>
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
                <!--begin::Landing hero-->
                <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9"
                    data-kt-sticky="true" data-kt-sticky-name="landing-partner"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Heading-->
                    <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                        <!--begin::Action-->
                        {{-- <button class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_1">Daftar</button> --}}
                        <div class="modal fade" tabindex="-1" id="kt_modal_1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Registrasi Data</h3>

                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            <span class="svg-icon svg-icon-1"></span>
                                        </div>
                                        <!--end::Close-->
                                    </div>

                                    <div class="modal-body text-start">
                                        <form action="{{ route('registrasi-user') }}" method="POST"
                                            class="form-data" enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')
                                            <div class="mb-10">
                                                <label class="form-label">Nama</label>
                                                <input class="form-control" type="text" name="nama"
                                                    id="nama">
                                                <small class="text-danger nama_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" type="email" name="email"
                                                    id="email">
                                                <small class="text-danger email_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">Asal
                                                    Kota/Kabupaten</label>
                                                <input class="form-control" type="text" name="asal"
                                                    id="asal">
                                                <small class="text-danger asal_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" class="form-select"
                                                    data-placeholder="Pilih jenis kelamin">
                                                    <option></option>
                                                    <option value="laki-laki">Laki - laki</option>
                                                    <option value="perempuan">Perempuan</option>
                                                </select>
                                                <small class="text-danger asal_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">Tanggal
                                                    Lahir</label>
                                                <input class="form-control" type="date" name="tanggal_lahir"
                                                    id="tanggal_lahir">
                                                <small class="text-danger tanggal_lahir_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">No Telp</label>
                                                <input class="form-control" type="text" name="no_telp"
                                                    id="no_telp">
                                                <small class="text-danger no_telp_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">Akun Sosmed</label>
                                                <input class="form-control" type="text" name="akun_sosmed"
                                                    id="akun_sosmed">
                                                <small class="text-danger akun_sosmed_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">Profesi</label>
                                                <input class="form-control" type="text" name="profesi"
                                                    id="profesi">
                                                <small class="text-danger profesi_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">Instansi</label>
                                                <input class="form-control" type="text" name="instansi"
                                                    id="instansi">
                                                <small class="text-danger instansi_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">Motivasi</label>
                                                <textarea id="motivasi" name="motivasi" class="form-control" data-kt-autosize="true"></textarea>
                                                <small class="text-danger motivasi_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">Riwayat
                                                    Penyakit</label>
                                                <input class="form-control" type="text" name="riwayat_penyakit"
                                                    id="riwayat_penyakit">
                                                <small class="text-danger riwayat_penyakit_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">⁠Ukuran T-Shirt
                                                    (S-M-L-XL)</label>
                                                <select name="ukuran" class="form-select"
                                                    data-placeholder="Pilih jenis ukuran">
                                                    <option></option>
                                                    <option value="s">S</option>
                                                    <option value="m">M</option>
                                                    <option value="l">L</option>
                                                    <option value="xl">XL</option>
                                                </select>
                                                <small class="text-danger ukuran_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">File KTP<span
                                                        style="font-size: 10px; color: #EA443E; font-style: italic">(Dalam
                                                        bentuk file pdf)</span></label>
                                                <input class="form-control" accept=".pdf" type="file"
                                                    name="file_ktp" id="file_ktp">
                                                <small class="text-danger file_ktp_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label for="file_cv" class="form-label">CV <span
                                                        style="font-size: 10px; color: #EA443E; font-style: italic">(Dalam
                                                        bentuk file pdf)</span></label>
                                                <input class="form-control" accept=".pdf" type="file"
                                                    name="file_cv" id="file_cv">
                                                <small class="text-danger file_cv_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label for="file_ppt" class="form-label">Desk
                                                    (PowerPoint)</label>
                                                <input class="form-control" accept=".pptx, .ppt" type="file"
                                                    name="file_ppt" id="file_ppt">
                                                <small class="text-danger file_ppt_error"></small>
                                            </div>

                                            <div class="separator separator-dashed mt-8 mb-5"></div>
                                            <div class="d-flex gap-5">
                                                <button type="submit"
                                                    class="btn btn-primary btn-sm btn-submit-import d-flex align-items-center"><i
                                                        class="bi bi-file-earmark-diff"></i> Simpan</button>
                                                <button type="reset" data-bs-dismiss="modal"
                                                    class="btn mr-2 btn-light btn-sm d-flex align-items-center"
                                                    style="background-color: #ea443e65; color: #EA443E"><i
                                                        class="bi bi-trash-fill"
                                                        style="color: #EA443E"></i>Batal</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end::Action-->
                    </div>
                    <!--end::Heading-->
                </div>
                <!--end::Landing hero-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Header Section-->
        <!--begin::How It Works Section-->
        <div class="mb-n10 mb-lg-n20 z-index-2 content-deskripsi" style="margin-top: 220px">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mb-17">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">
                        {{ $data_event->judul }}</h3>
                    <h4 class="text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">
                        {{ $data_event->event }}</h4>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="fs-5 text-muted fw-bold" style="padding: 0 100px; text-align: justify">
                        {{ $data_event->deskripsi }}
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Heading-->
                <!--begin::Row-->
                <div class="row w-100 gy-10 mb-md-20">
                    <h4 class="text-dark mb-5 text-center" id="how-it-works"
                        data-kt-scroll-offset="{default: 100, lg: 150}">
                        Tempat Dan Waktu Event</h4>
                    <!--begin::Col-->
                    <div class="col-md-6 px-5">
                        <!--begin::Story-->
                        <div class="text-center mb-10 mb-md-0">
                            <svg id="svg_maps" class="mb-5" height="5em" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <style>
                                    #svg_maps {
                                        fill: #dd3b1e
                                    }
                                </style>
                                <path
                                    d="M320 64A64 64 0 1 0 192 64a64 64 0 1 0 128 0zm-96 96c-35.3 0-64 28.7-64 64v48c0 17.7 14.3 32 32 32h1.8l11.1 99.5c1.8 16.2 15.5 28.5 31.8 28.5h38.7c16.3 0 30-12.3 31.8-28.5L318.2 304H320c17.7 0 32-14.3 32-32V224c0-35.3-28.7-64-64-64H224zM132.3 394.2c13-2.4 21.7-14.9 19.3-27.9s-14.9-21.7-27.9-19.3c-32.4 5.9-60.9 14.2-82 24.8c-10.5 5.3-20.3 11.7-27.8 19.6C6.4 399.5 0 410.5 0 424c0 21.4 15.5 36.1 29.1 45c14.7 9.6 34.3 17.3 56.4 23.4C130.2 504.7 190.4 512 256 512s125.8-7.3 170.4-19.6c22.1-6.1 41.8-13.8 56.4-23.4c13.7-8.9 29.1-23.6 29.1-45c0-13.5-6.4-24.5-14-32.6c-7.5-7.9-17.3-14.3-27.8-19.6c-21-10.6-49.5-18.9-82-24.8c-13-2.4-25.5 6.3-27.9 19.3s6.3 25.5 19.3 27.9c30.2 5.5 53.7 12.8 69 20.5c3.2 1.6 5.8 3.1 7.9 4.5c3.6 2.4 3.6 7.2 0 9.6c-8.8 5.7-23.1 11.8-43 17.3C374.3 457 318.5 464 256 464s-118.3-7-157.7-17.9c-19.9-5.5-34.2-11.6-43-17.3c-3.6-2.4-3.6-7.2 0-9.6c2.1-1.4 4.8-2.9 7.9-4.5c15.3-7.7 38.8-14.9 69-20.5z" />
                            </svg>
                            <!--begin::Heading-->
                            <div class="d-flex flex-center mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold text-dark">{{ $data_event->lokasi }}</div>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 px-5">
                        <!--begin::Story-->
                        <div class="text-center mb-10 mb-md-0">
                            <svg id="svg_clock" class="mb-5" height="5em" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <style>
                                    #svg_clock {
                                        fill: #1e71dd
                                    }
                                </style>
                                <path
                                    d="M75 75L41 41C25.9 25.9 0 36.6 0 57.9V168c0 13.3 10.7 24 24 24H134.1c21.4 0 32.1-25.9 17-41l-30.8-30.8C155 85.5 203 64 256 64c106 0 192 86 192 192s-86 192-192 192c-40.8 0-78.6-12.7-109.7-34.4c-14.5-10.1-34.4-6.6-44.6 7.9s-6.6 34.4 7.9 44.6C151.2 495 201.7 512 256 512c141.4 0 256-114.6 256-256S397.4 0 256 0C185.3 0 121.3 28.7 75 75zm181 53c-13.3 0-24 10.7-24 24V256c0 6.4 2.5 12.5 7 17l72 72c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-65-65V152c0-13.3-10.7-24-24-24z" />
                            </svg>
                            <!--begin::Heading-->
                            <div class="d-flex flex-center mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold text-dark">
                                    {{ $data_event->jam_mulai . ' - ' . $data_event->jam_selesai }}</div>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Product slider-->
                <div class="tns tns-default">
                    <!--begin::Slider-->
                    <!--begin::Item-->
                    <div class="text-center mb-15 px-5 pt-5 pt-lg-10 px-lg-10">
                        @if ($data_event->link_youtube)
                            <iframe class="card-rounded shadow video-detail"
                                src="https://www.youtube.com/embed/{{ $data_event->link_youtube }}" frameborder="0"
                                allowfullscreen></iframe>
                        @else
                            <img src="{{ asset('no_image.jpg') }}" class="card-rounded shadow mw-100"
                                alt="" />
                        @endif
                        <!--end::Item-->
                    </div>
                </div>
                <!--end::Product slider-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::How It Works Section-->
        <!--end::Projects Section-->
        <!--begin::Testimonials Section-->
        <div class="mt-20 mb-n20 position-relative z-index-2">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <!--end::Heading-->
                <!--begin::Row-->
                {{-- <div class="row g-lg-10 mb-10 mb-lg-20">
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <!--begin::Testimonial-->
                        <div
                            class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <!--begin::Wrapper-->
                            <div class="mb-7">
                                <!--begin::Rating-->
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                </div>
                                <!--end::Rating-->
                                <!--begin::Title-->
                                <div class="fs-2 fw-bold text-dark mb-3">This is by far the cleanest template
                                    <br />and the most well structured
                                </div>
                                <!--end::Title-->
                                <!--begin::Feedback-->
                                <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I
                                    have ever used. The codes are up to tandard. The css styles are very clean. In fact
                                    the cleanest and the most up to standard I have ever seen.</div>
                                <!--end::Feedback-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="assets/media/avatars/300-1.jpg" class="" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Paul Miles</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                        </div>
                        <!--end::Testimonial-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <!--begin::Testimonial-->
                        <div
                            class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <!--begin::Wrapper-->
                            <div class="mb-7">
                                <!--begin::Rating-->
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                </div>
                                <!--end::Rating-->
                                <!--begin::Title-->
                                <div class="fs-2 fw-bold text-dark mb-3">This is by far the cleanest template
                                    <br />and the most well structured
                                </div>
                                <!--end::Title-->
                                <!--begin::Feedback-->
                                <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I
                                    have ever used. The codes are up to tandard. The css styles are very clean. In fact
                                    the cleanest and the most up to standard I have ever seen.</div>
                                <!--end::Feedback-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="assets/media/avatars/300-2.jpg" class="" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Janya
                                        Clebert</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                        </div>
                        <!--end::Testimonial-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <!--begin::Testimonial-->
                        <div
                            class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <!--begin::Wrapper-->
                            <div class="mb-7">
                                <!--begin::Rating-->
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                </div>
                                <!--end::Rating-->
                                <!--begin::Title-->
                                <div class="fs-2 fw-bold text-dark mb-3">This is by far the cleanest template
                                    <br />and the most well structured
                                </div>
                                <!--end::Title-->
                                <!--begin::Feedback-->
                                <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I
                                    have ever used. The codes are up to tandard. The css styles are very clean. In fact
                                    the cleanest and the most up to standard I have ever seen.</div>
                                <!--end::Feedback-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="assets/media/avatars/300-16.jpg" class="" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Steave
                                        Brown</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                        </div>
                        <!--end::Testimonial-->
                    </div>
                    <!--end::Col-->
                </div> --}}
                <!--end::Row-->
                <!--begin::Highlight-->
                <div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-2 p-lg-6 mb-n5 mb-lg-n13"
                    style="background: linear-gradient(90deg, #fe1a19 0%, #fff9f9 100%);">
                    <!--begin::Content-->
                    <div class="my-2 me-5">
                        <!--begin::Title-->
                        <div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">DAFTAR INDONESIA YOUTH SUMMIT
                        </div>
                        <!--end::Title-->
                        <!--begin::Description-->
                        {{-- <div class="fs-6 fs-lg-5 text-white fw-semibold opacity-75">Join over 100,000 Professionals
                        Community to Stay Ahead</div> --}}
                        <!--end::Description-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Link-->
                    <button data-bs-toggle="modal" data-bs-target="#kt_modal_1"
                        class="btn btn-lg btn-danger border-2 flex-shrink-0 my-2">
                        Daftar</button>
                    <!--end::Link-->
                </div>
                <!--end::Highlight-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Testimonials Section-->
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
                                <img src="{{ asset('admin/assets/media/svg/brand-logos/ebay.svg') }}"
                                    class="h-20px me-2" alt="" />
                                <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">E-mail :
                                    indonesianyouthsummitiys@gmail.com</span>
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a href="https://www.instagram.com/indonesiayouthsummit/" target="_blank" class="mb-6">
                                <img src="{{ asset('admin/assets/media/svg/brand-logos/instagram-2-1.svg') }}"
                                    class="h-20px me-2" alt="" />
                                <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram :
                                    @indonesiayouthsummit</span>
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a href="https://api.whatsapp.com/send?phone=6289517468703" target="_blank"
                                class="mb-6">
                                <img src="{{ asset('admin/assets/media/svg/brand-logos/whatsapp.svg') }}"
                                    class="h-20px me-2" alt="" />
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
