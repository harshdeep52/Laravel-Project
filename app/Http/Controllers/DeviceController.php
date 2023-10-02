<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // to decode has password
use Validator;

class DeviceController extends Controller
{
    function getDeviceList(){
        $data = Device::all();
        return $data;
    }

    // function findDevice($id=null){
    function findDevice($id=null){
        // return Device::find($id);
        return $id?Device::find($id):Device::all();
    }

    function createDevice(Request $res){
        $device = new Device;
        $device->device_name = $res->device_name;
        $result = $device->save();
        if($result){
            return ['result'=>"data saved"];
        }else{
            return ['result'=>"error while adding data"];
        }
    }

    function updateDevice(Request $req){
        $device = Device::find($req->id);

        $device->device_name = $req->device_name;
        $res = $device->save();
        if($res){
            return ['result'=>"device name updated successfully"];
        }else{
            return ['result'=>"Error while updating device name"];
        }
    }

    // function deleteDevice(Request $req){
    function deleteDevice($id){
        // $device = Device::find($req->id);
        $device = Device::find($id);
        $res = $device->delete();
        if($res){
            return ['result'=>"device  deleted successfully"];
        }else{
            return ['result'=>"Error while deleting device"];
        }

    }

    function searchDevice($params){
        // return Device::where('device_name',"like","%".$params."%")->get();
        $res = Device::where('device_name',"like","%".$params."%")->get();
        if($res){
            return $res;
        }else{
            return ['result'=>"No Result Found"];
        }
    }

    function validateApi(Request $req){
        // return "validate api";
        $rules = array("name" => "required","member_id" => "required | numeric| max:4");

        $validate = Validator::make($req->all(),$rules);
        if($validate->fails()){
            // return $validate->errors();
            return response()->json($validate->errors(),401);
        }else{
            $device = new Device();
            $device->device_name = $req->name;
            $device->member_id = $req->member_id;
            $res = $device->save();

            if($res){
                return ['result'=>" New Device Added successfully "];
            }else{
                return ['result'=>"Error While Adding New Device Info "];
            }
            // member_id
        }
    }

    function login(Request $request)
    {
        $user= User::where('email', $request->email)->first();
           // Hash::check decode password retrive from db  
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
    }

    function uploadFiles(Request $req){
        // return  "uploadFiles";
        // return $req->file('file')->store("apiDocs");
        return ["result" => $req->file("file")->store("apiDocs")];
    }
}
