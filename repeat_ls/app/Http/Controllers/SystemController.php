<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index()
    {
        //$sys = System::find(1);
        //dd($sys->devices);
        $dev = Device::find(3);
        dd($dev->systems);
    }
}
