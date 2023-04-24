<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class demoController extends Controller
{

    public function __construct(){

    }

    public function index()
    {
        //return view('demo',['year' =>2023]);

        return view('demo')->with('year',2022)->with('month',4)->with('day',23);
    }


    public function show($id){

        $member = DB::table('member')->where('id','>',$id)->get()->toArray();

        $time= time();
        //dd($member);
        //return view('demo')->with('member',$member)->with('title',$title)->with(['time'=>$time]);

        //return view('demo',['member' => $member]);


        //return view('admin.index')->with('member',$member);
        return view('admin.index',compact('time','member'));
    }




}
