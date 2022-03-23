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

    \App\Http\Controllers\MailboxController::changeDatabase();


});

Route::get('/', function(){
    $mailbox = \App\Models\Mailbox::first();
    $data = [$mailbox->is_mailbox_open, $mailbox->space_in_mailbox];

    return (new Response($data, 200))->header("Content-type", "text/plain");
});
