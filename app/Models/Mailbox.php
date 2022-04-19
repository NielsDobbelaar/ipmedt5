<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mailbox extends Model
{
    protected $table = "mailbox";
    public $timestamps = false;
    protected $fillable = ["is_mailbox_open", "space_in_mailbox"];
}
