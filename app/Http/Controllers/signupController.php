<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signupController extends Controller
{
    function signUp(){
        return view("signup");
    }

    function getData(Request $req){
        // echo "form submitted";
        return $req->input();
        // echo $req->input();
    }
}
