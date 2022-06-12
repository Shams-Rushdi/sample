<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function details(Request $req){
        
        $st = Student::where('st_id',$req->st_id)->first();
        return view('student.details')
        ->with('st',$st);

        //$students = student :: where ('st_id', '=',$req->st_id )

        

    }
    public function list(){

        $students = Student::all();        
        return view('student.list')->with('students',$students);

    }


    function create(){
        return view('student.create');
    }

    function createSubmit(Request $req){
        $this->validate($req,
            [
                "name"=>"required|max:50|min:3|regex:^[a-zA-Z\s\.\-]+$^",
                "st_id"=>"required|regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1})+$/i",
                "dob"=>"required|date|before:2002-04-15",
                "email"=>"required|regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1})@student\.aiub\.edu+$/i",
                "phone"=>"required|regex:/^\+[8]{2}[0-9]{11}+$/i",
               
               
            ],
        
            [
                
                "name.required"=>"Please provide your name",
                "name.max"=>"Name should not exceed 50 characters",
                "dob.required"=>"Please provide dob",
              
            ]);
            $students = Student::all();
            $st = new Student();
            $st->name = $req->name;
            $st->st_id =$req->st_id;
            $st->dob =$req->dob;
            $st->email =$req->email;
            $st->phone =$req->phone;
            $st->save();
            return view('student.list')->with('students',$students);
        
    }
}
