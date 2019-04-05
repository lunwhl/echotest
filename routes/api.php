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

Route::post('/testing', function(Request $reuqest) {
    return response()->json(['testi' => 'tesint']);
});

Route::get('test-broadcast', function(){
    broadcast(new \App\Events\ExampleEvent);
});

Route::get('push-to-pin', function(){
    broadcast(new \App\Events\pushToPin);
});