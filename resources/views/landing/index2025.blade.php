<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>{{ config('app.name') }} | Indonesian Youth Summit 2025</title>
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

    <style>
        [data-kt-sticky-landing-header="on"] .landing-header {
            padding: 0;
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 100;
            background-color: #9e292f !important;
            box-shadow: 0 10px 30px 0 rgba(82, 63, 105, 0.05);
            height: 80px;
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body data-kt-name="metronic" id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu"
    class="bg-white position-relative app-blank">
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home" style="height: 100vh;">
            <!--begin::Wrapper-->
            <div class="position-relative">
                <div class="position-absolute w-100 z-index-n2">
                    <img src="{{ asset('desktop_2025.jpg') }}" class="w-100 backgriund-landing d-none d-md-block"
                        style="height: 100vh" alt="">
                    <img src="{{ asset('mobile_2025.jpg') }}" class="w-100 backgriund-landing d-block d-md-none"
                        style="height: 100vh" alt="">
                    <div class="position-absolute bottom-0 mb-10px mb-md-0px w-100 d-flex justify-content-center">
                        <img src="{{ asset('logo_2025/logo-06.png') }}" class="w-75px w-md-100px" alt="">
                        <img src="{{ asset('logo_2025/logo-07.png') }}" class="w-55px w-md-80px" alt="">
                        <img src="{{ asset('logo_2025/logo-08.png') }}" class="w-55px w-md-80px" alt="">
                    </div>
                </div>
                <!--begin::Header-->
                <div class="landing-header" style="background-color: transparent" data-kt-sticky="true"
                    data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="px-5 w-100">
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
                                    <div class="d-flex align-items-center">
                                        <img alt="Logo" src="{{ asset('logo_2025/logo-03.png') }}"
                                            class="logo-default h-45px h-lg-65px" />
                                        <img alt="Logo" src="{{ asset('logo_2025/logo-04.png') }}"
                                            class="logo-default h-45px h-lg-65px" />
                                        <img alt="Logo" src="{{ asset('logo_2025/logo-05.png') }}"
                                            class="logo-default h-45px h-lg-70px" />
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img alt="Logo" src="{{ asset('logo_2025/logo-03.png') }}"
                                            class="logo-sticky h-40px h-lg-60px" />
                                        <img alt="Logo" src="{{ asset('logo_2025/logo-04.png') }}"
                                            class="logo-sticky h-40px h-lg-60px" />
                                        <img alt="Logo" src="{{ asset('logo_2025/logo-05.png') }}"
                                            class="logo-sticky h-40px h-lg-60px" />
                                    </div>
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
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}"
                                    style="background-color: #9e292f !important;">
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
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6"
                                                href="{{ route('landing2024') }}" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">2024</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6"
                                                href="{{ route('landing2025') }}" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">2025</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Toolbar-->
                                        <div class="flex-equal ms-md-15">
                                            <button class="btn btn-danger" id="button" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_1">Daftar</button>
                                        </div>
                                        {{-- <a href="https://iys.whoops.co.id" target="_blank"
                                            class="btn btn-danger">Daftar</a> --}}

                                        <div class="d-grid d-md-flex ms-md-10"
                                            style="align-items: center; gap: 10px;  justify-items: center">
                                            <img src="{{ asset('logo_2025/logo-09.png') }}" class="h-60px"
                                                alt="">
                                            <img src="{{ asset('logo_2025/logo-10.png') }}" class="h-60px"
                                                alt="">
                                            <img src="{{ asset('logo_2025/logo-11.png') }}" class="h-60px"
                                                alt="">
                                            <img src="{{ asset('logo_2025/logo-12.png') }}" class="h-60px"
                                                alt="">
                                            <img src="{{ asset('logo_2025/logo-13.png') }}" class="h-60px"
                                                alt="">
                                            <img src="{{ asset('logo_2025/logo-14.png') }}" class="h-60px"
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
                                                    name="file_ktp" id="file_ktp" required>
                                                <small class="text-danger file_ktp_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label for="file_cv" class="form-label">CV <span
                                                        style="font-size: 10px; color: #EA443E; font-style: italic">(Dalam
                                                        bentuk file pdf)</span></label>
                                                <input class="form-control" accept=".pdf" type="file"
                                                    name="file_cv" id="file_cv" required>
                                                <small class="text-danger file_cv_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">Link Drive Video Presentase</label>
                                                <input class="form-control" type="text"
                                                    name="link_drive_peresentase" id="link_drive_peresentase">
                                                <small class="text-danger link_drive_peresentase_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">Link Drive Video Presentase</label>
                                                <input class="form-control" type="text"
                                                    name="link_drive_peresentase" id="link_drive_peresentase">
                                                <small class="text-danger link_drive_peresentase_error"></small>
                                            </div>

                                            <div class="mb-10 d-grid gap-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="status_video" id="statusVideoTrue" value="1">
                                                    <label class="form-check-label" for="statusVideoTrue">General
                                                        Participant (Ceremonial Conference IYS) <span
                                                            style="font-size: 10px; color: #EA443E; font-style: italic">(*Tidak
                                                            wajib upload video)</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="status_video" id="statusVideoFalse" value="0">
                                                    <label class="form-check-label" for="statusVideoFalse">⁠Official
                                                        Delegate IYS <span
                                                            style="font-size: 10px; color: #EA443E; font-style: italic">(*Wajib
                                                            upload video)</span></label>
                                                </div>

                                                <small class="text-danger status_video_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">Link Drive Video Bakat <span
                                                        style="font-size: 10px; color: #EA443E; font-style: italic">(Jika
                                                        ada)</span></label>
                                                <input class="form-control" type="text" name="link_drive_video"
                                                    id="link_drive_video">
                                                <small class="text-danger link_drive_video_error"></small>
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
                </div>
                <!--end::Landing hero-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Header Section-->

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

        window.onload = function() {
            document.getElementById("button").click(); // Ganti selector sesuai tombol "Daftar"
        };
    </script>

</body>
<!--end::Body-->

</html>
