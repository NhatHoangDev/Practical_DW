<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
class MyController extends Controller
{
    public function xinchao(){
        echo "chao cac ban";
    }
    public function KhoaHoc($ten)
    {
        echo "khoa hoc :" . $ten;
    }
    public function GetURL(Request $request){
//        return $request->url();
        if($request->isMethod('post')){
            echo "phuong thuc get";
        }else{
            echo "khong phai phuong thuc get";
        }
    }
    public function getForm(){
        return view('postForm');
}
    public function postForm(Request $request){
        echo "Tên bạn là ";
        echo $request->hoten ;
        echo $request->tuoi;
        echo " tuổi";
    }
    // đặt cookie
    public function setCookie(){
        $response = new Response();
        $response -> withCookie(
            'Nhat Hoang',
            'Laravel Nhat Hoang',
            1
        );
        return $response;
    }
    // hiện thi cookie
    public function getCookie(Request $request)
    {
        return $request -> cookie('Nhat Hoang');
    }
    // uploadFile
    public function postFile(Request $request){
        if($request->hasFile('myfile')){
            $file = $request->file('myfile');
                $filename = $file -> getClientOriginalName('myfile');
                echo "Đã lưu file :".$filename;
                $file -> move('img',$filename);
        }
    }
    public function getJson(){
        $array = ['Laravel','Php','ASP.net','HTML'];
        return response() -> json($array);
    }
}
