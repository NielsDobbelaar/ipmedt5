<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Mailbox;
use DB;

class MailboxController extends Controller
{
    public function frontPage()
    {
        return view("front", [
            "mailbox" => \App\Models\Mailbox::first()
        ]);
    }

    public function changeDatabase()
    {
        $mailbox = Mailbox::first();
        // $regel2 = new mailbox;
        // $regel2->is_mailbox_open = "0";
        // $regel2->space_in_mailbox = "0";
        // $regel2 = \App\Models\Mailbox::first();
        // DB::delete("delete * from mailbox");
        // return redirect()->back();
        // $mailbox->is_mailbox_open = 0;
        // $mailbox->update(["is_mailbox_open" => null]);
        // print gettype($mailbox->is_mailbox_open);
        // switch($data){
        //     case "slotopen":
        //         $mailbox->is_mailbox_open = TRUE;
        //         break;
        //     case "slotdicht":
        //         $mailbox->is_mailbox_open = FALSE;
        //         break;
        //     case "leeg":
        //         $mailbox->percentage_space_in_mailbox = 0;
        //         break;
        //     case "half":
        //         $mailbox->percentage_space_in_mailbox = 1;
        //         break;
        //     case "vol":
        //         $mailbox->percentage_space_in_mailbox = 2;
        //         break;
        //     default:
        //         break;
        //     }


    }
}
