<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendUserEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $email)
    {
        $this->user = $user;

        $this->email = $email;


    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo $this->user.' hahha';
        \Log::info('发送成功。。。。。。。');
    }

    public function failed(){

        \Log::info('发送失败。。。。。。');
    }

}
