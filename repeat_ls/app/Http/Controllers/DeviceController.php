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
    public function edit()
    {
        dd('edit');
    }
    public function update()
    {
        dd('update');
    }
    public function delete()
    {
        dd('delete');
    }
}
