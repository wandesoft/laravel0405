<?php

namespace App\Http\Controllers\Admin;

use App\Events\app\Events\RegEvents;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class shouyeController extends Controller
{
    //
    public function index()
    {



        echo 'shouye';

        event(new RegEvents());
    }
}
