<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\BlogController;
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
