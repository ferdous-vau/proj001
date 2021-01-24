<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function third_student(){
        $students = User::where('userType','Student')->where('year','Third Year')->get();
        return view ('admin.third-year-students',compact('students'));
    }

    public function final_student(){
        $students = User::where('userType','Student')->where('year','Final Year')->get();
        return view ('admin.final-year-students',compact('students'));
    }
    //delete//
    public function delete($id)
    {
        $students = User::find($id);
        $students->delete();
        return redirect()->back();
    }
    //delete//

    public function student()
    {
        return view('student.student-form');
    }
}
