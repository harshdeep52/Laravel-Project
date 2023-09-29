<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderExampleController extends Controller
{
    function index(){
        // $data = DB::table('members')->where("city","New Yark")->get();   // withb where clause example 
        $data = DB::table('members')->get();
        // return DB::table('members').count();
        return view("QueryBuilderExample",["membersList"=>$data]);
    }

    function addnewMember(Request $req){
            // return $req->input();
            // return $req->input();
             DB::table("members")->insert(['name' => $req->input('name'),'email' => $req->input('email'),'city'  => $req->input('city')]);
            return redirect("queryBuilder");
    }

    function editQueryBuilderRecord($id){
        // return $id;
        // return DB::table("members")->where('id',$id)->get();

        $data = DB::table("members")->where('id',$id)->get();
        return view("editQueryBuilderRecord",['memberdata' => $data]);
    }

    function memberInfoUpdate(Request $req){
        DB::table("members")->where('id',$req->input('id'))->update(['name' => $req->input('name'),'email'=>$req->input('email'),'city'=>$req->input('city')]);
        return redirect("queryBuilder");
    }

    function deleteQueryBuilderRecord($id){
        DB::table("members")->where("id",$id)->delete();
        return redirect("queryBuilder");
    }
}
