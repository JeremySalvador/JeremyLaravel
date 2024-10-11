<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
       $data = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'age'=>'required'

        ]);
        $newStudent = Student::create($data);
        return redirect(route('students.index'));
    }

    public function index(){
        $students =Student::all();
        return view('students.index',['students'=>$students]);
    }
}
