<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    function show(){
        $data = ["TATA","BMW","AUDI","HONDA"];
        return view("users",['data'=>$data]);


    }
    function showPage(){
        // $data = ["TATA","BMW","AUDI","HONDA"];
        // return view("users",['data'=>$data]);
        // return DB::select("select * from users");
        return User::all();
    }
}


