<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function getById($id)
    {
        dd($id);
    }
    public function getAll()
    {
        dd('test');
    }
}
