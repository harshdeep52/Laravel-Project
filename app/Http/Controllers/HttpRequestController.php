<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpRequestController extends Controller
{
    function index(){
        // echo "Hello From Http Request Methods";
        return view("HttpRequest");
    }

    function getData(Request $req){
            return $req->input();
    }
}
