<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Mailbox;
use DB;
use Storage;

class MailboxController extends Controller
{
    public function frontPage()
    {
        $lines = Storage::get('database.txt');
        $data = explode("\n", $lines);

        $timestamp_array = Array();
        $mailbox_status_array = Array();

        foreach($data as $string)
        {
            $string = explode(" ", $string, 2);
            array_push($timestamp_array, $string);
        }

        return view("front", [
            "timestamp" => $timestamp_array
        ]);
    }

    public function empty()
    {
        $lines = Storage::get('database.txt');
        $data = explode("\n", $lines);

        $file = "database.txt";
        Storage::delete($file);

        Storage::disk("local")->put('database.txt', end($data));
        return redirect('/');
    }
}
