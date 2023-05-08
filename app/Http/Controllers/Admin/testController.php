<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendUserEmail;
use App\Models\admin\Article;
use App\Models\admin\Author;
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

    public function index(){

        //$artices = Article::query()->with('author')->get()->toArray();
        $artices = Article::query()->with('authorb')->get();

        foreach ($artices as $artice) {
            echo $artice->authorb->name.'</br>';
        }

        $authors = Author::query()->with('articleObject')->get();

        //dd($authors);
        foreach($authors as $author) {
            echo (isset($author->articleObject->title)?$author->articleObject->title:'').'</br>';
        }

    }
}
