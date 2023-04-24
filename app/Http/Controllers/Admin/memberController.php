<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;


use App\Models\Admin\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class memberController extends Controller
{
    //
    public function store()
    {

        /*$db_insert = DB::table('member')->insert([
            [
            'name' => '张三3',
            'age'=>18,
            'email' => 'zhangsang@gmail.com'],
            [
                'name' => '李四3',
                'age' => 20,
                'email' => 'lisi@163.com'],
            [
                'name' => '王五3',
                'age' => 30,
                'email' => 'wangwu@hotmail.com']

        ]);
        dd($db_insert);
        $insert_id = DB::table('member')->insertGetId([
            'name' => 'ID',
            'age' => 28,
            'email' => 'id@id.com'

        ]);
        dd($insert_id);*/


        $ins = DB::insert('insert into member (name, age, email) values ("haohao",19,"haohao@gmail.com")');

        dd($ins);
    }

    public function update()
    {
        //$id = DB::table('member')->where('id',9)->update(['age'=>55]);

         //$sql = DB::table('member')->where('id','>',5)->get()->toArray();

        //$sql = DB::table('member')->where('id','=',8)->update(['email'=>'qqqq@qq.com']);
            //$sql = DB::table('member')->where('id','=',8)->increment('age');
            //$sql = DB::table('member')->where('id','=',8)->decrement('age',3);

            $up = DB::update('update member set age=37 where id =9');
        dd($up);
    }

    public function index()
    {
/*
        $members = DB::table('member')->get()->toArray();

        foreach ($members as $member){
            //echo $member->name.'----'.$member->email.'<br />';
        }

        $m = DB::table('member')->where('id',"<",6)->get();
        foreach ($m as $member){
            //echo $member->id.'-----'.$member->name.'----'.$member->email.'<br />';
        }

        $one = DB::table('member')->where('id','>=',6)->first();
        //echo 'one-----------'.$one->name.'<br />';


        $val = DB::table('member')->where('id','>=',6)->value('name');
        //echo 'val-----------'.$val.'<br />';


        $sel = DB::table('member')->select('name as n','email as e')->where('id',7)->get();
        //dd($sel);


        $dis = DB::table('member')->distinct()->orderBy('email','desc')->get();

        //dd($dis);


        $d = DB::table('member')->select('email')->distinct()->get();
        //dd($d);

        $fenye = DB::table('member')->limit(3)->offset(4)->get();

        dd($fenye);*/


        /*$member = new Member;
        $member->name ='member';
        $member->email ='member@example.com';
        $member->age =18;
        $member->save();*/


        $mm = Member::query()->insert();


        $member = Member::query()->create();



        //dd($members);
        echo '<pre>';
           // var_dump($members);
        echo '</pre>';
    }

    public function destory()
    {
        $del = DB::table('member')->where('id', '=', 3)->delete();

        //dd($del);

        $ddl = DB::statement('delete from member where id = 4');

        dd($ddl);

    }





}
