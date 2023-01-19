<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::all();
        return view('device.index',compact('devices'));
    }
    public function create()
    {
        return view('device.create');
    }
    public function store()
    {
        $data = request()->validate([
            'name'=>'string',
            'system'=>'string',
            'description'=>'string'
        ]);
        Device::create($data);
        return redirect()->route('device.index');
    }
    public function show(Device $device)
    {
        return view('device.show',compact('device'));
    }
    public function edit(Device $device)
    {
        return view('device.edit',compact('device'));
    }
    public function update(Device $device)
    {
        $data = request()->validate([
            'name'=>'string',
            'system'=>'string',
            'description'=>'string'
        ]);
        $device->update($data);
        return redirect()->route('device.show',$device->id);
    }
    public function destroy(Device $device)
    {
        $device->delete();
        return redirect()->route('device.index');
    }
}
