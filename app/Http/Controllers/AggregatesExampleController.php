<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AggregatesExampleController extends Controller
{
    function index(){
        // return DB::table("members")->sum('id');
        // return DB::table("members")->min('id');
        // return DB::table("members")->max('id');
        // return DB::table("members")->max('name');
        return DB::table("members")->avg('id');
        // $data = DB::table("members")->sum('id');
        // return view("AggregatesExample",['idSum',$data]);
    }
}
