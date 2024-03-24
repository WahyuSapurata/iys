@extends('layouts.layout')
{{-- @section('button')
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <button class="btn btn-primary btn-sm " data-kt-drawer-show="true" data-kt-drawer-target="#side_form"
                id="button-side-form"><i class="fa fa-plus-circle" style="color:#ffffff" aria-hidden="true"></i> Tambah
                Data</button>
            <!--end::Title-->
        </div>
    </div>
@endsection --}}
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <div class="row">

                <div class="card">
                    <div class="card-body p-0">
                        <div class="container">
                            <div class="py-5 table-responsive">
                                <table id="kt_table_data"
                                    class="table table-striped table-rounded border border-gray-300 table-row-bordered table-row-gray-300">
                                    <thead class="text-center">
                                        <tr class="fw-bolder fs-6 text-gray-800">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Asal Kota/Kabupaten</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tanggal Lahir</th>
                                            <th>No Telp</th>
                                            <th>Akun Sosmed</th>
                                            <th>Profesi</th>
                                            <th>Instansi</th>
                                            <th>Motivasi</th>
                                            <th>Riwayat Penyakit</th>
                                            <th>⁠Ukuran T-Shirt (S-M-L-XL)</th>
                                            <th>File Data Diri</th>
                                            {{-- <th>Aksi</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection
{{-- @section('side-form')
    <div id="side_form" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true"
        data-kt-drawer-toggle="#side_form_button" data-kt-drawer-close="#side_form_close" data-kt-drawer-width="500px">
        <!--begin::Card-->
        <div class="card w-100">
            <!--begin::Card header-->
            <div class="card-header pe-5">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::User-->
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="#"
                            class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1 title_side_form"></a>
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="side_form_close">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                    fill="#000000">
                                    <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                    <rect fill="#000000" opacity="0.5"
                                        transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                        x="0" y="7" width="16" height="2" rx="1" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body hover-scroll-overlay-y">
                <form class="form-data" enctype="multipart/form-data">

                    <input type="hidden" name="id">
                    <input type="hidden" name="uuid">

                    <div class="mb-10">
                        <label class="form-label">Judul</label>
                        <input type="text" id="judul" class="form-control" name="judul">
                        <small class="text-danger judul_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">Event</label>
                        <input type="text" id="event" class="form-control" name="event">
                        <small class="text-danger event_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">Lokasi</label>
                        <input type="text" id="lokasi" class="form-control" name="lokasi">
                        <small class="text-danger lokasi_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">Jam Mulai</label>
                        <input type="text" id="jam_mulai" class="form-control kt_datepicker_1" name="jam_mulai">
                        <small class="text-danger jam_mulai_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">Jam Selesai</label>
                        <input type="text" id="jam_selesai" class="form-control kt_datepicker_2" name="jam_selesai">
                        <small class="text-danger jam_selesai_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">Link ID Youtube <span
                                style="font-size: 10px; color: #EA443E; font-style: italic">(Optional)</span></label>
                        <input type="text" id="link_youtube" class="form-control" name="link_youtube">
                        <small class="text-danger link_youtube_error"></small>
                    </div>

                    <div class="mb-10">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" class="form-control" data-kt-autosize="true"></textarea>
                        <small class="text-danger deskripsi_error"></small>
                    </div>

                    <div class="separator separator-dashed mt-8 mb-5"></div>
                    <div class="d-flex gap-5">
                        <button type="submit" class="btn btn-primary btn-sm btn-submit d-flex align-items-center"><i
                                class="bi bi-file-earmark-diff"></i> Simpan</button>
                        <button type="reset" id="side_form_close"
                            class="btn mr-2 btn-light btn-cancel btn-sm d-flex align-items-center"
                            style="background-color: #ea443e65; color: #EA443E"><i class="bi bi-trash-fill"
                                style="color: #EA443E"></i>Batal</button>
                    </div>
                </form>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
@endsection --}}
@section('script')
    <script>
        let control = new Control();

        $(document).on('keyup', '#search_', function(e) {
            e.preventDefault();
            control.searchTable(this.value);
        })

        const initDatatable = async () => {
            // Destroy existing DataTable if it exists
            if ($.fn.DataTable.isDataTable('#kt_table_data')) {
                $('#kt_table_data').DataTable().clear().destroy();
            }

            var groupedData = {}; // Menyimpan nilai grup sebelumnya

            // Initialize DataTable
            $('#kt_table_data').DataTable({
                responsive: true,
                pageLength: 10,
                order: [
                    [0, 'asc']
                ],
                processing: true,
                ajax: '/admin/get-data-pendaftar',
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'nama',
                        className: 'text-center',
                    }, {
                        data: 'email',
                        className: 'text-center',
                    }, {
                        data: 'asal',
                        className: 'text-center',
                    }, {
                        data: 'jenis_kelamin',
                        className: 'text-center',
                    }, {
                        data: 'tanggal_lahir',
                        className: 'text-center',
                    }, {
                        data: 'no_telp',
                        className: 'text-center',
                    }, {
                        data: 'akun_sosmed',
                        className: 'text-center',
                    }, {
                        data: 'profesi',
                        className: 'text-center',
                    }, {
                        data: 'instansi',
                        className: 'text-center',
                    }, {
                        data: 'motivasi',
                        className: 'text-center',
                    }, {
                        data: 'riwayat_penyakit',
                        className: 'text-center',
                    }, {
                        data: 'ukuran',
                        className: 'text-center',
                    }, {
                        data: 'file_ktp',
                        className: 'text-center',
                        render: function(data, type, row, meta) {
                            let result;
                            result =
                                `<a href="{{ asset('register/${data}') }}" target="_blank" class="btn btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger p-2 py-1">
                                    <div class="d-flex justify-content-center align-items-center" style="gap: 5px; color: red;">
                                        Lihat File
                                    </div>
                                </a>`;
                            return result;
                        }
                    }
                ],
                rowCallback: function(row, data, index) {
                    var api = this.api();
                    var startIndex = api.context[0]._iDisplayStart;
                    var rowIndex = startIndex + index + 1;
                    $('td', row).eq(0).html(rowIndex);
                },
            });
        };

        $(function() {
            initDatatable();
        });
    </script>
@endsection
