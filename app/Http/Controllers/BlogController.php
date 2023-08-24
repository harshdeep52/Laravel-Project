<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Class BlogController extends Controller{
    function allBlogs(){
        return "Hello From BlogController";
    }

    function blogs(){
        return view("blogs");
    }
}