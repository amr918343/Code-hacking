<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;
//use Carbon\Carbon;
Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');



Route::get('admin', function() {
    return view('admin.index');

});










Route::group(['middleware' => 'admin'], function() {
    Route::resource('admin/users', 'AdminUsersController');
});

Route::resource('admin/posts', 'AdminPostsController');

//Route::get('admin/users', function() {
//
//    return view('admin.users.index', compact('users'));
//});

