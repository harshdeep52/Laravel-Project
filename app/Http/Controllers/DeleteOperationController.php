<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeleteOperationModel;

class DeleteOperationController extends Controller
{
    function index(){
        $data = DeleteOperationModel::all();
        return view("DeleteOperationView",['memberList'=>$data]);
    }

    function deleteMember($id,Request $req){
        $data = DeleteOperationModel::find($id);
        $data->delete();

        $req->session()->flash("deleteUser","Selected user is deleted !");
        return redirect("deleteMemberList");
    }
}
