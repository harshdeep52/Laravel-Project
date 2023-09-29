<?php

use App\Http\Controllers\AggregatesExampleController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DeleteOperationController;
use App\Http\Controllers\FileUploadExample;
use App\Http\Controllers\HttpExample;
use App\Http\Controllers\signupController;
use App\Http\Controllers\HttpRequestController;
use App\Http\Controllers\FlashController;
// use App\Http\Controllers\JoinsExampleController;
use App\Http\Controllers\LoginWithSession;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SaveDbExample;
use App\Http\Controllers\UpdateMemberController;

use App\Http\Controllers\QueryBuilderExampleController;
use App\Http\Controllers\JoinsExampleController;
use App\Http\Controllers\FormExampleController;
use App\Http\Controllers\AccessorExampleController;
use App\Http\Controllers\MutatorExampleController;
use App\Http\Controllers\OneToOneRelationExample;

use App\Http\Controllers\RouteBingingExample;
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
Route::post("uploadFile",[FileUploadExample::class,"uploadFile"]);

// route for ListController example

Route::get("list",[MemberController::class,"index"]);

Route::get("MembersList",[MemberController::class,"dataWithPagination"]);

// foute for save data in db 


Route::get("addUserData",[SaveDbExample::class,"index"]);

Route::post("saveuserdata",[SaveDbExample::class,"saveuserdata"]);

// route for delete oprations

Route::get("deleteMemberList",[DeleteOperationController::class,"index"]);

Route::get('deleteMember/{id}',[DeleteOperationController::class,"deleteMember"]);


// route for update records 

Route::get("updateMemberList",[UpdateMemberController::class,"index"]);
Route::get("udpateMember/{id}",[UpdateMemberController::class,"editMember"]);
Route::get("editMember/{id}",[UpdateMemberController::class,"editMember"]);
Route::post("updateMemberData",[UpdateMemberController::class,"udpateMem"]);



// Route for QueryBuilderExample 

Route::get("queryBuilder",[QueryBuilderExampleController::class,"index"]);
Route::post("addnewMember",[QueryBuilderExampleController::class,"addnewMember"]);
Route::get("editQueryBuilderRecord/{id}",[QueryBuilderExampleController::class,"editQueryBuilderRecord"]);
Route::post("memberInfoUpdate",[QueryBuilderExampleController::class,"memberInfoUpdate"]);
Route::get("deleteQueryBuilderRecord/{id}",[QueryBuilderExampleController::class,"deleteQueryBuilderRecord"]);


// routed for AggregatesExample 

Route::get("aggregatesExample",[AggregatesExampleController::class,"index"]);


// foutes for JoinsExample

Route::get("joinsExample",[JoinsExampleController::class,"index"]);

Route::get("FormExample",[FormExampleController::class,"index"]);


// route for AccessorExampleController

Route::get("accessorExample",[AccessorExampleController::class,"index"]);

// route for mutator example 

Route::get("mutator",[MutatorExampleController::class,"index"]);


// routes for OneToOneRelationExample

Route::get("oneTone",[OneToOneRelationExample::class,"index"]);

// for route binding example

Route::get("RouteBinding/{key}",[RouteBingingExample::class,"index"]);