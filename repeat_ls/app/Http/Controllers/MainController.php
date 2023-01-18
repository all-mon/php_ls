<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main');
    }

}
