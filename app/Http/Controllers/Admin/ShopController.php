<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {

        return view('admin.list');
    }

    public function show()
    {

        return view('admin.detail');
    }
    public function store(Request $request){

        dd($_POST);
        $ss = $request->all();
        $one = $request->only('name');
        $one = $request->has('name');
        $ext = $request->method();
        $ext = $request->path();
        $ext = $request->password;
        $ext = $request->only(['name','password']);
        $ext = $request->input('name');




        dd($ext);
        dd($request);

        $requestData = $request->all();
        dd($requestData);

    }
}
