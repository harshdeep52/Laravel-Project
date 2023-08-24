<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function show($user){
        // return "Hello From User Controller  ".$id;
        return view("users",['username'=>$user]);
    }


    
    function showPage(){
        return view("users");
    }
}


