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
            "space_in_mailbox" => "1"
        ]);
    }
}
