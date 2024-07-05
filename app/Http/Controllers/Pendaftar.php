<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Pendaftar extends BaseController
{
    public function index()
    {
        $module = 'Pendaftar';
        return view('admin.pendaftar.index', compact('module'));
    }

    public function get()
    {
        $data = Register::all();
        return $this->sendResponse($data, 'Get data success');
    }

    public function store(StoreRegisterRequest $storeRegisterRequest)
    {
        // $validator = Validator::make($storeRegisterRequest->all(), [
        //     'file_ktp' => 'required|max:1048',
        //     'file_cv' => 'required|max:1048',
        //     'file_ppt' => 'required|max:1048',
        // ]);
        // if ($validator) {
        //     Session::flash('status', 'warning');
        //     Session::flash('message', 'file melebihi 1 mb');
        // }

        $newKtp = '';
        $newCv = '';
        $newPpt = '';
        if ($storeRegisterRequest->file('file_ktp')) {
            $extension = $storeRegisterRequest->file('file_ktp')->extension();
            $newKtp = $storeRegisterRequest->nama . '-' . now()->timestamp . 'ktp' . '.' . $extension;
            $storeRegisterRequest->file('file_ktp')->storeAs('register', $newKtp);
        }

        if ($storeRegisterRequest->file('file_cv')) {
            $extension = $storeRegisterRequest->file('file_cv')->extension();
            $newCv = $storeRegisterRequest->nama . '-' . now()->timestamp . 'cv' . '.' . $extension;
            $storeRegisterRequest->file('file_cv')->storeAs('register', $newCv);
        }

        if ($storeRegisterRequest->file('file_ppt')) {
            $extension = $storeRegisterRequest->file('file_ppt')->extension();
            $newPpt = $storeRegisterRequest->nama . '-' . now()->timestamp . 'ppt' . '.' . $extension;
            $storeRegisterRequest->file('file_ppt')->storeAs('register', $newPpt);
        }

        $data = $storeRegisterRequest->all();
        $data['file_ktp'] = $newKtp;
        $data['file_cv'] = $newCv;
        $data['file_ppt'] = $newPpt;
        $register = Register::create($data);

        if ($register) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data berhasil dikirim!');
        }
        return redirect()->route('landing');
    }

    public function export_excel()
    {
        $data = Register::all();

        // Buat objek Spreadsheet
        $spreadsheet = new Spreadsheet();

        // Ambil objek aktif (sheet aktif)
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        $sheet->getPageSetup()->setPaperSize(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::PAPERSIZE_FOLIO);
        $sheet->getRowDimension(1)->setRowHeight(30);
        $spreadsheet->getDefaultStyle()->getFont()->setName('Times New Roman');
        $fontStyle = [
            'font' => [
                'name' => 'Times New Roman',
                'size' => 12,
            ],
        ];

        // Isi data ke dalam sheet
        $centerStyle = [
            'alignment' => [
                //'vertical' => Alignment::VERTICAL_CENTER,
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
        ];
        $sheet->setCellValue('A1', 'REKAP PENDAFTAR')->mergeCells('A1:P1');

        $sheet->setCellValue('A3', 'No');
        $sheet->setCellValue('B3', 'Nama');
        $sheet->setCellValue('C3', 'Email');
        $sheet->setCellValue('D3', 'Asal Kota/Kabupaten');
        $sheet->setCellValue('E3', 'Jenis Kelamin');
        $sheet->setCellValue('F3', 'Tanggal Lahir');
        $sheet->setCellValue('G3', 'No Telp');
        $sheet->setCellValue('H3', 'Akun Sosmed');
        $sheet->setCellValue('I3', 'Profesi');
        $sheet->setCellValue('J3', 'Instansi');
        $sheet->setCellValue('K3', 'Motivasi');
        $sheet->setCellValue('L3', 'Riwayat Penyakit');
        $sheet->setCellValue('M3', '⁠Ukuran T-Shirt (S-M-L-XL)');
        $sheet->setCellValue('N3', 'File KTP');
        $sheet->setCellValue('O3', 'File CV');
        $sheet->setCellValue('P3', 'File PPT');

        // Memberikan warna pada sel-sel baris ke-3
        $sheet->getStyle('A3:P3')->applyFromArray([
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => 'acb9ca', // Warna Peach
                ],
            ],
        ]);

        $row = 4;

        foreach ($data as $index => $lap) {
            $sheet->setCellValue('A' . $row, $index + 1);
            $sheet->setCellValue('B' . $row, $lap->nama);
            $sheet->setCellValue('C' . $row, $lap->email);
            $sheet->setCellValue('D' . $row, $lap->asal);
            $sheet->setCellValue('E' . $row, $lap->jenis_kelamin);
            $sheet->setCellValue('F' . $row, $lap->tanggal_lahir);
            $sheet->setCellValue('G' . $row, $lap->no_telp);
            $sheet->setCellValue('H' . $row, $lap->akun_sosmed);
            $sheet->setCellValue('I' . $row, $lap->profesi);
            $sheet->setCellValue('J' . $row, $lap->instansi);
            $sheet->setCellValue('K' . $row, $lap->motivasi);
            $sheet->setCellValue('L' . $row, $lap->riwayat_penyakit);
            $sheet->setCellValue('M' . $row, $lap->ukuran);

            // Menambahkan link ke file jika URL valid
            if (!empty($lap->file_ktp)) {
                $sheet->setCellValue('N' . $row, 'Lihat KTP');
                $sheet->getCell('N' . $row)->getHyperlink()->setUrl(url('register/' . $lap->file_ktp));
            } else {
                $sheet->setCellValue('N' . $row, '');
            }

            if (!empty($lap->file_cv)) {
                $sheet->setCellValue('O' . $row, 'Lihat CV');
                $sheet->getCell('O' . $row)->getHyperlink()->setUrl(url('register/' . $lap->file_cv));
            } else {
                $sheet->setCellValue('O' . $row, '');
            }

            if (!empty($lap->file_ppt)) {
                $sheet->setCellValue('P' . $row, 'Lihat PPT');
                $sheet->getCell('P' . $row)->getHyperlink()->setUrl(url('register/' . $lap->file_ppt));
            } else {
                $sheet->setCellValue('P' . $row, '');
            }

            $row++;
        }

        // Ambil objek kolom terakhir yang memiliki data (A, B, C, dst.)
        $lastColumn = $sheet->getHighestDataColumn();

        // Iterate melalui kolom-kolom yang memiliki data dan atur lebar kolomnya
        foreach (range('A', $lastColumn) as $column) {
            $sheet->getColumnDimension($column)->setAutoSize(true);
        }

        // Menerapkan style alignment untuk seluruh sel dalam spreadsheet
        $sheet->getStyle('A1:' . $lastColumn . $row)->applyFromArray([
            'alignment' => [
                'vertical' => Alignment::VERTICAL_CENTER,
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
        ]);

        $sheet->getStyle('C4:' . $lastColumn . $row)->applyFromArray([
            'alignment' => [
                'vertical' => Alignment::VERTICAL_CENTER,
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
        ]);

        $sheet->getStyle('A3:I3')->applyFromArray([
            'alignment' => [
                'vertical' => Alignment::VERTICAL_CENTER,
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
        ]);

        $sheet->getStyle('A11:A' . $row)->applyFromArray([
            'alignment' => [
                'vertical' => Alignment::VERTICAL_CENTER,
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
        ]);

        $sheet->getStyle('A1:I1')->applyFromArray([
            'alignment' => [
                'vertical' => Alignment::VERTICAL_CENTER,
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
        ]);

        $sheet->getStyle('E7:E8')->applyFromArray([
            'alignment' => [
                'vertical' => Alignment::VERTICAL_CENTER,
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
        ]);

        // Memberikan border ke seluruh sel di kolom
        for ($col = 'A'; $col <= 'P'; $col++) {
            $sheet->getStyle($col . '3:' . $col . ($row - 1))->applyFromArray([
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                ],
            ]);
        }

        $excelFileName = 'rekap.xlsx';
        $excelFilePath = public_path($excelFileName);
        $writer = new Xlsx($spreadsheet);
        $writer->save($excelFilePath);

        // Kembalikan response dengan file Excel yang diunduh
        return response()->download(public_path($excelFileName));
    }
}
