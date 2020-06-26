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
Route::get('KhoaHoc',function(){
    return "xin chào các bạn";
});
Route::get('NhatHoang/Laravel',function(){
    echo "<h1>Khóa học Laravel</h1>";
});
Route::get('HoTen/{ten}',function($ten){
    echo "Ten cua ban la:".$ten;
});
Route::get('Laravel/{ngay}',function($ngay){
    echo "Nhat Hoang : ".$ngay;
})->where(['ngay'=>'[0-9]+']);
//định danh cho route
Route::get('Route1',[
    'as'=>'MyRoute',
    function(){
    echo "xin chao cac ban";
    }
]);
Route::get('Rout2',function(){
    echo "day la route2";
})->name('MyRoute2');
Route::get('GoiTen',function(){
    return redirect()->route('MyRoute2');
});
// Route Group
Route::group(['prefix'=>'MyGroup'],function(){
    Route::get('User1',function(){
        echo "User1";
    });
    Route::get('User2',function(){
        echo "User2";
    });
    Route::get('User3',function(){
        echo "User3";
    });
});
//Goi controller
Route::get('GoiController','MyController@xinchao');
Route::get('ThamSo/{ten}','MyController@KhoaHoc');
//URL
Route::get('MyRequest','MyController@GetURL');
//post request

Route::get('getForm','MyController@getForm');
Route::post('postForm','MyController@postForm')->name('postForm');
// Cookie
Route::get('setCookie','MyController@setCookie');
Route::get('getCookie','MyController@getCookie');
// uploadFile
Route::get('uploadFile',function(){
   return view('postFile');
});
Route::post('postFile','MyController@postFile');
// json
Route::get('getJson','MyController@getJson');
//school
Route::get('form','SchoolController@form');
Route::post('/save-form','SchoolController@saveform');
Route::get('/list','SchoolController@index');
