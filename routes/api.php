<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    Route::post('login', 'UserController@login')->name('login');
//});

Route::post('v6/login', 'UserController@login')->name('login');
Route::get('v6/list-user', 'UserController@listUser')->name('list-user');
