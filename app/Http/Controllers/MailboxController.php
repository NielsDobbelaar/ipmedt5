<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailboxController extends Controller
{
    public function frontPage()
    {
        return view("front", [
            "mailbox" => \App\Models\Mailbox::first()
        ]);
    }
}
