<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    //
    public function form(){
        return view('form');
    }
    public function index()
    {
        $school = School::all();
        return view("list", ["school" => $school]);
    }
    public function saveform(Request $request)
    {
        //validate du lieu
//        $request->validate([
//            "student name" => "required|string|min:6|unique:school",
//            "student email"=>"required",
//            "student telephone"=>"required",
//            "feedback"=>"required",
//        ]);
        try {
            School::create([
                "studentname" => $request->get("studentname"),
                "studentemail" => $request->get("studentemail"),
                "studenttelephone" => $request->get("studenttelephone"),
                "feedback" => $request->get("feedback"),
            ]);

        } catch (\Exception $exception) {
                return $exception->getMessage();

        }
        return redirect()->to("/list");
    }
}
