<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List coffee shops
Route::get('kafics', 'KaficController@index');

// List single coffee shop
Route::get('kafic/{id}', 'KaficController@show');

// Create single coffee shop
Route::post('kafic', 'KaficController@store');

// Create single coffee shop
Route::put('kafic', 'KaficController@store');

// Delete single coffee shop
Route::delete('kafic', 'KaficController@destory');