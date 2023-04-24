<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendUserEmail;
use Illuminate\Http\Request;

class testController extends Controller
{
    public  function __construct(){

    }

    public function test()
    {

        $job = new SendUserEmail('zhangsan','zhangsan@gmail.com');
        $this->dispatch($job);


        echo 'admin test';
    }

}
