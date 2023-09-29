<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DummyApiExample;
use App\Http\Controllers\DeviceController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    // return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    
    Route::get("getDeviceList",[DeviceController::class,"getDeviceList"]);

    Route::get("findDevice/{id?}",[DeviceController::class,"findDevice"]);

    Route::post("createDevice",[DeviceController::class,"createDevice"]);

    Route::put("updateDevice",[DeviceController::class,"updateDevice"]);

    // Route::delete("deleteDevice",[DeviceController::class,"deleteDevice"]);
    Route::delete("deleteDevice/{id}",[DeviceController::class,"deleteDevice"]);

    // Route::post("searchDevice",[DeviceController::class,"searchDevice"]);
    Route::get("searchDevice/{name}",[DeviceController::class,"searchDevice"]);

    // route for validation api 
    Route::get("validateApi",[DeviceController::class,"validateApi"]);
});

    
/*

//  route for dummyApi 
Route::get("dummyData",[DummyApiExample::class,"getData"]);

Route::get("getDeviceList",[DeviceController::class,"getDeviceList"]);

Route::get("findDevice/{id?}",[DeviceController::class,"findDevice"]);

Route::post("createDevice",[DeviceController::class,"createDevice"]);

Route::put("updateDevice",[DeviceController::class,"updateDevice"]);

// Route::delete("deleteDevice",[DeviceController::class,"deleteDevice"]);
Route::delete("deleteDevice/{id}",[DeviceController::class,"deleteDevice"]);

// Route::post("searchDevice",[DeviceController::class,"searchDevice"]);
Route::get("searchDevice/{name}",[DeviceController::class,"searchDevice"]);

// route for validation api 
Route::get("validateApi",[DeviceController::class,"validateApi"]);   */


// login api with authenticate

Route::post("login",[DeviceController::class,"login"]);