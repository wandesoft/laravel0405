<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


class homeController extends Controller
{
    public function home()
    {

       echo 'homellllllllll';
    }

    public function option($name='',$id=100)
    {
        dd('nihao---'.$name.'---'.$id);
    }

    public function poss($par='haha')
    {
        $data = Request::all();
        $age = Request::get('age');
        echo $age;
        $one =Request::only(['name']);
        var_dump($one);

        $exect = Request::except(['name']);
        echo $exect['age'];
        if(Request::has('names')){
            echo 'name cun zai';
        }else{
            echo 'name bu cun zai';;
        }


        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }

    public function db()
    {
        $db = DB::table('jobs')->toSql();





        echo $db;


    }
}
