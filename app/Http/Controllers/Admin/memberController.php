<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;


use App\Models\Admin\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class memberController extends Controller
{
    //
    public function store(Request $request)
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


        //$ins = DB::insert('insert into member (name, age, email) values ("haohao",19,"haohao@gmail.com")');

        //dd($ins);
        $member = $request->all();
        //$member['age']= 20;
        //$member['email']= 'email@id.com';
        //$mem = (new Member())->fill($member)->save();

        $m = Member::query()->create($member);
        //$m = Member::query()->insert($member);


        dd($m);
    }

    public function update(Request $request)
    {

        $this->validate($request,[
            'name' => 'required|min:3|unique:member,name,'.$request->post('id').',id',
            'email'=>'required|email',
            'age' =>'required|integer'
        ]);
        //$id = DB::table('member')->where('id',9)->update(['age'=>55]);

         //$sql = DB::table('member')->where('id','>',5)->get()->toArray();

        //$sql = DB::table('member')->where('id','=',8)->update(['email'=>'qqqq@qq.com']);
            //$sql = DB::table('member')->where('id','=',8)->increment('age');
            //$sql = DB::table('member')->where('id','=',8)->decrement('age',3);

           /* $up = DB::update('update member set age=37 where id =9');
        dd($up);*/
        if($request->post('id')){

            $member = Member::find($request->post('id'));

            $member->age = $request->post('age');
            $member->email = $request->post('email');
            $member->name = $request->post('name');
            //$res = $member->update($request->toArray());  or
            //$request->hasFile('photo');//是否上传
            //$request->file('photo')->isValid()//是否上传成功
            if($file =$request->file('photo')){
               $file_name = $file->getClientOriginalExtension();
               $filename = time().uniqid().'.'.$file_name;
               $file->move('./uploads/',$filename);
               $member->face = '/uploads/'.$filename;
            }


            $res = $member->save();
            //$res = Member::query()->create($member);

            //index get, user get show ,user post store,user/id delete,user/id/edit get,user/id put

            if($res){
                return redirect('admin/member/index')->with('msg','保存成功');
            }else{
                return redirect('admin/member/'.$request->get('id').'/edit');
            }
        }

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


        //$mm = Member::query()->insert();


        //$member = Member::query()->create();

/*
        $member = new Member();
        $member->name ='member1';
        $member->email ='member1@example.com';
        $member->age =28;
        $member->save();*/

        //$member = Member::query()->find(5);
        //$member = Member::query()->where('id','>=',5)->value('name');
        //$member = Member::query()->where('id','>=',5)->select('name','age);
        //$member = Member::query()->where('id','>=',5)->first();
        //$member = Member::query()->all();
        //$member = Member::all();
        //$members = Member::query()->where('id','>=',2)->get(['name','age','email','id']);

        //$members = Member::query()->where('id','>=',2)->orderBy('age','desc')->get();
        //$members = Member::query()->where('id','>=',2)->orderBy('age','desc')->skip(2)->limit(1)->get();
        //$members = Member::query()->offset(10)->limit(3)->get();


        //$members = Member::query()->count();
        //$members = Member::query()->sum('id');
        //$members = Member::query()->max('id');

        $members = Member::query()->where('id','>=',2)->paginate(3);


        //$data = Member::query()->paginate(3);


        //dd($members);

       return view('admin.index',compact('members'));
    }

    public function destory($id)
    {
       /* $del = DB::table('member')->where('id', '=', 3)->delete();

        //dd($del);

        $ddl = DB::statement('delete from member where id = 4');

        dd($ddl);*/



    }

    public function edit($id)
    {
        $member = Member::query()->find($id);

        return view('admin.edit',compact('member'));

    }




}
