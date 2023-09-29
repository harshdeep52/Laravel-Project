<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class JoinsExampleController extends Controller
{
    function index(){
        // return DB::table("employees")->get();
        // return DB::table("employees")->join("company","employees.id","=","company.emp_id")->select("company.company_name,employees.emp_name")->get();
        return DB::table("employees")->join("company","employees.id","=","company.emp_id")->select("company.company_name")->where("company.id",1)->get();
        return view("JoinsExample");
    }
}
