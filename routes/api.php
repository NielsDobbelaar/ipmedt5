<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/', function(Request $request) {
    \Illuminate\Support\Facades\Storage::append("log.txt", $request->getContent());
});

Route::get('/', function(){
    return (new Response("banaan", 200))->header("Content-type", "text/plain");
});
