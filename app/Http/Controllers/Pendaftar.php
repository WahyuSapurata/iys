<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
}
