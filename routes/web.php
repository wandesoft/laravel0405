<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/test','\App\Http\Controllers\Admin\testController@test');


//Route::get('index','App\Http\Controllers\Admin\shouyeController@index');

use \App\Http\Controllers\Admin\shouyeController;
Route::prefix('admin')->group(function(){
    Route::get('shouye',[shouyeController::class,'index']);
});


Route::get('home',function () {
    return "hello homne";
});
//Route::post('home/{id}',[homeController::class, 'home']);
//Route::match(['get', 'post', 'put'],'/home/{id}','\App\Http\Controllers\admin\homeController@home');
//Route::match(['get', 'post', 'put'],'/home/{id}','Admin\homeController@home');



Route::get('/home/aaa','admin\homeController@home');
//Route::get('/home/aaa','\App\Http\Controllers\admin\homeController@home');


/*Route::get('home/option/{name}/{id?}','\App\Http\Controllers\Admin\homeController@option')
    ->where(['id'=>'\d+','name'=>'[a-z]+']);*/

Route::prefix('order')
    ->namespace('Admin')
    ->group(function(){
        Route::get('index',function(){

            dd('order index');
        });
        Route::get('/poss/{id?}','homeController@poss');
        Route::get('/db','homeController@db');
    });

Route::redirect('order/1','home',302);


Route::prefix('admin/member')->group(function (){

    Route::post('/store','admin\memberController@store')->name('aaaaaa');;
    Route::get('/update','admin\memberController@update');
    Route::get('/index','admin\memberController@index');
    Route::delete('/{id}','admin\memberController@destory');
    Route::get('/{id}/edit','admin\memberController@edit');
    Route::post('/update','admin\memberController@update');

});

Route::get('/admin/demo','admin\demoController@index');
Route::get('/admin/demo/{id}','admin\demoController@show');



Route::prefix('admin/shop')->namespace('Admin')->group(function (){
   Route::get('index','ShopController@index');
   Route::get('show','ShopController@show');
   Route::post('store','ShopController@store');
});



Route::get('admin/test/index','admin\testController@index');













