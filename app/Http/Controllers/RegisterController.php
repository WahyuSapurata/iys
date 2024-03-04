<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Http\Requests\UpdateRegisterRequest;
use App\Models\Register;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function store(StoreRegisterRequest $storeRegisterRequest)
    {
        $newKtp = '';
        $newCv = '';
        $newPpt = '';
        if ($storeRegisterRequest->file('file_ktp')) {
            $extension = $storeRegisterRequest->file('file_ktp')->extension();
            $newKtp = $storeRegisterRequest->nama . '-' . now()->timestamp . 'ktp' . '.' . $extension;
            $storeRegisterRequest->file('file_ktp')->storeAs('public/register', $newKtp);
        }

        if ($storeRegisterRequest->file('file_cv')) {
            $extension = $storeRegisterRequest->file('file_cv')->extension();
            $newCv = $storeRegisterRequest->nama . '-' . now()->timestamp . 'cv' . '.' . $extension;
            $storeRegisterRequest->file('file_cv')->storeAs('public/register', $newCv);
        }

        if ($storeRegisterRequest->file('file_ppt')) {
            $extension = $storeRegisterRequest->file('file_ppt')->extension();
            $newPpt = $storeRegisterRequest->nama . '-' . now()->timestamp . 'ppt' . '.' . $extension;
            $storeRegisterRequest->file('file_ppt')->storeAs('public/register', $newPpt);
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
}
