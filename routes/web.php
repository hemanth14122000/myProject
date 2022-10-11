<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ContentController;
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

/*(Route::get('/', function () {
    return view('home');
});*/
//Route::get('/','TemplateController@index');
Route::get('/',[TemplateController::class,"index"]);
/*Route::view("signin",'signin');
Route::view("signup",'signup');
Route::post("signup",[ApiController::class,"register"]);
Route::post("signin",[ApiController::class,"Login"]);*/
//Route::view("signin",'signin');
Route::view("dashboard",'dashboard');
Route::view("signup",'signup');
Route::view("home",'home');

Route::view("content",'content');
Route::post('/signup',[ApiController::class,'register']);
Route::post('/signin',[ApiController::class,'Login']);
Route::get('/detail',[ApiController::class,'detail'])->middleware('auth:sanctum');
Route::view("addcontent",'addcontent');
Route::post("add_content",[ContentController::class,"store"]);
//Route::post("edit_post",[PostController::class,"edit"]);
Route::get("content",[ContentController::class,"show"]);

//login logout session

Route::get('/signin', function () {
    if(session()->has('email')){
        return redirect('dashboard');

    }
    return view('signin');
});

Route::get('/signout', function () {
    if(session()->has('email')){
        session()->pull('email');
       
    }
    return redirect('home');
});

if(session()->has('email')){
    
    Route::view("content",'content');
}


Route::get("delete/{id}",[ContentController::class,"delete"]);
Route::get("editcontent/{id}",[ContentController::class,"editData"]);
Route::post("editcontent",[ContentController::class,"update"]);
//Route::view("/editcontent",'editcontent');