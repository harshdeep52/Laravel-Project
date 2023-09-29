<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccessorExampleModel;

class AccessorExampleController extends Controller
{
    function index(){
        // return view("AccessorExampleView");
        return AccessorExampleModel::all();
    }
}
