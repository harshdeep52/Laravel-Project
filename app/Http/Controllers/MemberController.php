<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function index(){
        // return view("Members");
        $data =  Member::all();
        return view("Members",['membersList' => $data]);
    }
    function dataWithPagination(){
        $data = Member::paginate(5);
        return view("MembersList",['membersList' => $data]);
    }
}
