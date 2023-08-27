<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FlashController extends Controller
{
    function index(){
        // echo "Hello From Flash Example";
        return view("flashEx");
    }

    function storeFlashData(Request $req){
            // return $req->input();
            $data = $req->input('user');
            $req->session()->flash("user",$data);
            return redirect("flashEx");
    }
}