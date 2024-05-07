<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function index()
    {
        return Device::all();
    }

    public function show($id)
    {
        return Device::findOrFail($id);
    }

    public function store(Request $request)
    {
        $device = Device::create($request->all());
        return response()->json($device, 201);
    }

    public function update(Request $request, $id)
    {
        $device = Device::findOrFail($id);
        $device->update($request->all());
        return response()->json($device, 200);
    }

    public function delete($id)
    {
        Device::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
