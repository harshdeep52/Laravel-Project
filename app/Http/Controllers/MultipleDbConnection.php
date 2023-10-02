<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Product;
class MultipleDbConnection extends Controller
{
    function productList(){
        // useing Query Builder 
        // return DB::table("products")->get();

        // for multiple databse connection use 
        // return DB::connection("mysql2")->table("branch_master")->get();

        // using Model with multiple databse connection

        // return Product::all();

        return Product::all();
    }
}
