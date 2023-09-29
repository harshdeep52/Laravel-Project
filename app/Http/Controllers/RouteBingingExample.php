<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class RouteBingingExample extends Controller
{
    function index(Device $key){
        // return "Route Binding Example";
        // return Device::all();  // for all records 
        return $key->device_name;
    }
}
