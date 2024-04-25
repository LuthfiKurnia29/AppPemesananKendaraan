<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    //
    public function index(){
        $datas = Driver::all();
        return view('Driver.index', compact('datas'));
    }

    
}
