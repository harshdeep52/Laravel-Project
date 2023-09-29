<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UpdateMemberModel;

class UpdateMemberController extends Controller
{
    function index(){
        $data = UpdateMemberModel::paginate(5);
        return view("UpdateMemberView",['updateMemberList' => $data]);
    }

    function updateMemnber($id,Request $req){

            $data = UpdateMemberModel::find($id);
            $data->update();

            $req->session()->flash("updated","Records updated successfully !");
            return redirect("updateMemberList");
    }

    function editMember($id){
        $data = UpdateMemberModel::find($id);
        return view("editMember",['membersData'=>$data]);
    }
    function udpateMem(Request $req){
        $member = UpdateMemberModel::find($req->id);
        $member->name = $req->name;
        $member->email = $req->email;
        $member->city = $req->city;
        $member->save();

        $req->session()->flash("userUpdate","user updated successfully !");
        return redirect("updateMemberList");
    }
}
