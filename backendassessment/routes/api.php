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

Route::post('login', 'UserController@login');
Route::post('store', 'UserController@store');

Route::post('/logout', 'UserControler@logout')->middleware('auth:api');

Route::get('index', 'UserController@index');

Route::middleware('auth:api')->group(function () {
    Route::get('self', 'UserController@self');

    Route::get('product', 'OrderController@check_available');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
