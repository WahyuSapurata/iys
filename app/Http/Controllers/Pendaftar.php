<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

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
}
