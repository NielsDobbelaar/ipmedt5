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
            "is_mailbox_open" => "1",
            "space_in_mailbox" => "1"
        ]);
    }
}
