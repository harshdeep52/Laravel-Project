<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginWithSession extends Controller
{
    function index(){
        return view("LoginWithSession");
    
    }
    function checkLogin(Request $req){
        // return $req->input();
        $data = $req->input('user');
        $req->session()->put('user',$data);
        return redirect("profile");
    }
}
