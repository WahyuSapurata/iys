<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class Landing extends BaseController
{
    public function index()
    {
        $data_event = Event::all();
        return view('landing.index', compact('data_event'));
    }

    public function detail($params)
    {
        $data_event = Event::where('uuid', $params)->first();
        return view('landing.detail', compact('data_event'));
    }
}
