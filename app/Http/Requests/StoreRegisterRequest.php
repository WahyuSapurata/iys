<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'email' => 'required',
            'asal' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'no_telp' => 'required',
            'akun_sosmed' => 'required',
            'profesi' => 'required',
            'instansi' => 'required',
            'motivasi' => 'required',
            'riwayat_penyakit' => 'required',
            'ukuran' => 'required',
            // 'file_ktp' => 'required',
            // 'file_cv' => 'required',
            // 'file_ppt' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Kolom nama harus di isi.',
            'email.required' => 'Kolom email harus di isi.',
            'asal.required' => 'Kolom asal harus di isi.',
            'jenis_kelamin.required' => 'Kolom jenis kelamin harus di isi.',
            'tanggal_lahir.required' => 'Kolom tanggal lahir harus di isi.',
            'no_telp.required' => 'Kolom no telp harus di isi.',
            'akun_sosmed.required' => 'Kolom akun sosmed harus di isi.',
            'profesi.required' => 'Kolom profesi harus di isi.',
            'instansi.required' => 'Kolom instansi harus di isi.',
            'motivasi.required' => 'Kolom motivasi harus di isi.',
            'riwayat_penyakit.required' => 'Kolom riwayat penyakit harus di isi.',
            'ukuran.required' => 'Kolom ukuran t-shirt di isi.',
            // 'file_ktp.required' => 'Kolom file ktp harus di isi.',
            // 'file_cv.required' => 'Kolom file cv harus di isi.',
            // 'file_ppt.required' => 'Kolom file ppt harus di isi.',
        ];
    }
}
