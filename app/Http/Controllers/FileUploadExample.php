<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadExample extends Controller
{
    function index(){
        return view("FileUploadEx");

    }

    function uploadFile(Request $req){
        // echo "File Will Upload here...";
        return $req->file('sel_file')->store('image');
    }
}
