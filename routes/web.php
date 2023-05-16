<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view('home');
})->name('home');

Route::middleware('guest')->group(function () {
Route::get('/login',function(){
    return view('login');
})->name('login');
});

Route::post('login', 'App\Http\Controllers\AdminController@login');

Route::get('/register',function(){
    return view('register');
})->name('register');

Route::post('register', 'App\Http\Controllers\RegisterController@check');

Route::middleware(['userAccess:is_owner'])->group(function(){
Route::get('/showuser', 'App\Http\Controllers\RegisterController@show');
});
Route::get('/showuserbyid/{id}', 'App\Http\Controllers\RegisterController@showbyid');

Route::get('delete/{id}','App\Http\Controllers\RegisterController@delete');

Route::get('/adminregister',function(){
    return view('adminregister');
})->name('adminregister');

Route::post('adminregister', 'App\Http\Controllers\AdminController@registeradmin');

Route::get('/logout','App\Http\Controllers\AdminController@logout');