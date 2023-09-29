<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SaveDbExample extends Controller
{
    //

    function index(){
        return view("SaveDbExample");
    }

    function saveuserdata(Request $req){
            $user = new User;
            $user->name     = $req->name;
            $user->email    = $req->email;
            $user->password = $req->password;
            $user->age      = $req->age;
            $user->address  = $req->address;

            $user->save();
            $req->session()->flash("userAdded","User Added successfully");
            return redirect("addUserData");
            // return $req->input();
    } 
}
