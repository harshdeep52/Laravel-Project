<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class OneToOneRelationExample extends Controller
{
    function index(){
        // return "one to one relation example";
        return Employee::find(1)->companyData;
    }
}
