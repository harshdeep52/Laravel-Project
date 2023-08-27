<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
class HttpExample extends Controller
{
    function index(){
        // echo "This is Http Client Example";
        // return Http::get("https://reqres.in/api/users?page=1");
        $data =  Http::get("https://reqres.in/api/users?page=1");

        return view("HttpExample",['apidata' => $data['data']]);

    }
}
