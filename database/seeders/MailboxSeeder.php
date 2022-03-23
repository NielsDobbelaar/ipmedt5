<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class MailboxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("mailbox")->insert([
            "mail_in_mailbox" => false,
            "is_mailbox_open" => false,
            "percentage_space_in_mailbox" => 0,
        ]);
    }
}
