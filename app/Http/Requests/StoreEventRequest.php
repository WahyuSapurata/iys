<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'judul' => 'required',
            'event' => 'required',
            'lokasi' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'deskripsi' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'judul.required' => 'Kolom judul harus di isi.',
            'event.required' => 'Kolom event harus di isi.',
            'lokasi.required' => 'Kolom lokasi harus di isi.',
            'jam_mulai.required' => 'Kolom jam mulai harus di isi.',
            'jam_selesai.required' => 'Kolom jam selesai harus di isi.',
            'deskripsi.required' => 'Kolom deskripsi harus di isi.',
        ];
    }
}
