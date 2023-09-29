<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyApiExample extends Controller
{
    function getData(){
        return ['name' => "Sam",'Email'=>"sam@gmail.com",'city' => 'Pune']; 
    
}
}