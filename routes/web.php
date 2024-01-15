<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Passing;
use App\Http\Controllers\Form;

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

Route::get('/documentation', function () {
    return view('documentation');
});
Route::get('/', function () {
    return view('documentation');
});
// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/hello/{name}', function ($name) {
    return view('hello',["name"=>$name]);
});
Route::view("about1","/about");
Route::get("/user",[UserController::class,'show']);
Route::get("/users",function(){
    return view("users");
});
Route::get("passing/{name}",[Passing::class,'load_view']);
Route::post("form",[Form::class,'getData']);
Route::get("login",function(){
    return view('form');
});
Route::view("userpage","/userpage");
Route::view("noaccess","/noaccess");

Route::view('home','/home');

Route::group(['middleware'=>['protectPage','protectPage_2']],function(){
    Route::view('home1','/home1');
});
Route::view('routemiddleware','/routemiddleware')->middleware('protectPage');