<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MutatorExampleModel;

class MutatorExampleController extends Controller
{
    function index(){
        // return MutatorExampleModel::all();
        $members = new MutatorExampleModel;

        $members->name = "vishal";
        $members->email = "vishal@gmail.com";
        $members->city = "Pune";

        $members->save();
        // return view("MutatorExampleView");
    }
}
