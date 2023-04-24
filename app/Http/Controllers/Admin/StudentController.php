<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // index 显示列表页面 /Students get
        // create 增加新的学生页面 / Students/create get, store 新的页面保存 /students post
        // destory 删除学生 /students/$id Delete
        // StudengController@edit 编辑页面 /students/$id/edit get, StudentController@update 编辑保存 /students/$id patch
        // StudentController@show 查询信息  /students/$id get
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // studentController@index /students get
        // studentController@create /students/create get
        // studentController@store /students post
        // studentController@destory /students/$id DELETE
        // studentController@edit /students/$id/edit get
        // studentController@updtate /students/$id/update patch
        // studentController@show /students/$id get
        //
    }
}
