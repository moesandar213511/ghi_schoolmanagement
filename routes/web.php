<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('logout','Auth\LoginController@logout')->middleware('auth');

// admin
Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/admin',function(){
        return 'admin';
    });
});

// staff
Route::group(['middleware'=>['auth','staff']],function(){
    Route::get('/staff',function(){
        return 'staff';
    });
});

// teacher
Route::group(['middleware'=>['auth','teacher']],function(){
    Route::get('/teacher',function(){
        return 'teacher';
    });
});

// parent
Route::group(['middleware'=>['auth','parent']],function(){
    Route::get('/parent',function(){
        return 'parent';
    });
});

// student
Route::group(['middleware'=>['auth','student']],function(){
    Route::get('/student',function(){
        return 'student';
    });
});
