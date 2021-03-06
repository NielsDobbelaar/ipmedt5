<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use \App\Models\Mailbox;

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
    $data = $request->getContent();
    $lines = Storage::get('database.txt');
    $olddata = explode("\n", $lines);
    $time = now();



    if($data != explode(" ", end($olddata))[0]){
        Storage::disk("local")->append("database.txt", $data . " " . $time);
    }
});

Route::get('/', function(){
    
    $lines = Storage::get('database.txt');
    $data = explode("\n", $lines);


    // Storage::disk("local")->append("database2.txt", end($data));


    return (new Response(explode(" ", end($data))[0], 200))->header("Content-type", "text/plain");
});