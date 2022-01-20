<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



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

Auth::routes();


Route::namespace("Admin")
->middleware("auth")
->prefix("admin")
->name("admin.")
->group(function(){
    Route::get('/', 'HomeController@index')->name("home");
    Route::resource("post","PostController");
    Route::resource("user","UserController");
    Route::resource("categories","CategorieController");

});



Route::get("{any?}",function(){
    return view("guests.home");
})->where("any",".*");
