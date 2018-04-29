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

Route::middleware('api')->post('woo',function(){
	return 'asd';
});

Route::get('users1/{user}',function(App\User $user){
	return $user;
});

Route::get('pro/{user_model}',function(\App\User $user_model){
	return $user_model;
});
