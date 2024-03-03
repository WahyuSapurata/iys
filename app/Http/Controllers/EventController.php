<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;

class EventController extends BaseController
{
    public function index()
    {
        $module = 'Data Event';
        return view('admin.event.index', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = Event::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(StoreEventRequest $storeEventRequest)
    {
        $data = array();
        try {
            $data = new Event();
            $data->judul = $storeEventRequest->judul;
            $data->event = $storeEventRequest->event;
            $data->lokasi = $storeEventRequest->lokasi;
            $data->jam_mulai = $storeEventRequest->jam_mulai;
            $data->jam_selesai = $storeEventRequest->jam_selesai;
            $data->link_youtube = $storeEventRequest->link_youtube;
            $data->deskripsi = $storeEventRequest->deskripsi;
            $data->save();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Added data success');
    }

    public function show($params)
    {
        $data = array();
        try {
            $data = Event::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(StoreEventRequest $storeEventRequest, $params)
    {
        try {
            $data = Event::where('uuid', $params)->first();
            $data->judul = $storeEventRequest->judul;
            $data->event = $storeEventRequest->event;
            $data->lokasi = $storeEventRequest->lokasi;
            $data->jam_mulai = $storeEventRequest->jam_mulai;
            $data->jam_selesai = $storeEventRequest->jam_selesai;
            $data->link_youtube = $storeEventRequest->link_youtube;
            $data->deskripsi = $storeEventRequest->deskripsi;
            $data->save();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }

        return $this->sendResponse($data, 'Update data success');
    }

    public function delete($params)
    {
        $data = array();
        try {
            $data = Event::where('uuid', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }
}
