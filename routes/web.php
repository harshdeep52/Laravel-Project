<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FileUploadExample;
use App\Http\Controllers\HttpExample;
use App\Http\Controllers\signupController;
use App\Http\Controllers\HttpRequestController;
use App\Http\Controllers\FlashController;
use App\Http\Controllers\LoginWithSession;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});




// Route::get("/usersList",[UserController::class,'show']);
Route::get("/usersList/{user}",[UserController::class,'show']);

Route::get("/blogs",[BlogController::class,'allBlogs']);

// routes for Components 

Route::view("users","users");
Route::view("about","about");


//  

Route::get("/users",[UserController::class,"showPage"]);
Route::get("/blogs",[BlogController::class,"blogs"]);

//  route for signup controller 


// Route::post("signup",[signupController::class,'getData']);

// Route::view("signupForm","signup");


// route for middlware 

Route::view("noaccess","noaccess");

// route for group middleware


// Route::group(['middleware'=>['protectedAge']],function(){
//     Route::view("signup","signup");
// });
Route::view("signup","signup")->middleware('protectedAge');



// this is for http client example route 

Route::get("httpclient",[HttpExample::class,"index"]);


// this route for Http Request Methods 

Route::get("httpRequest",[HttpRequestController::class,"index"]);

// Route::get("sendData",[HttpRequestController::class,"getData"]);
// Route::post("sendData",[HttpRequestController::class,"getData"]);
Route::put("sendData",[HttpRequestController::class,"getData"]);

// route  for flash controller example 

Route::get("flashEx",[FlashController::class,"index"]);

Route::post("flashStore",[FlashController::class,"storeFlashData"]);

// route form LoginWithSession

Route::get("login",[LoginWithSession::class,"index"]);
Route::view("profile","profile");

Route::get("logout",function(){
    if(Session::has('user')){
        Session()->put('user',null);
        return redirect("login");
    }
});

Route::get("/login",function(){
if(Session::has('user')){
    return redirect("profile");
}
    return redirect("login");
});
Route::post("loginCheck",[LoginWithSession::class,"checkLogin"]);


// route for fileupload example

Route::get("FileUploadEx",[FileUploadExample::class,"index"]);