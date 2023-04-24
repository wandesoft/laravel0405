<?php

namespace App\Listeners\app\Listeners;

use App\Events\app\Events\RegEvents;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class sendFiles
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\app\Events\RegEvents  $event
     * @return void
     */
    public function handle(RegEvents $event)
    {
        //
        echo '文书生成成功';
    }
}
