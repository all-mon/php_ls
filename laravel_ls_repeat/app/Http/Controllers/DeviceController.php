<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function getById($id)
    {
        $device = Device::find($id);
        dump($device->name);
        dump($device->system);
        dd($device->description);
    }
    public function getAll()
    {
        dd('test');
    }
}
