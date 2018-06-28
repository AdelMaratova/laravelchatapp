<?php

namespace App\Listeners;

use App\Events\MessageSent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendChatMessage
{

    public function __construct()
    {
        //
    }


    public function handle(MessageSent $event)
    {
        //
    }
}
