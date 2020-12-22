<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view ('welcome');
    }

    public function add(){
        return view ('add-supervisor');
    }

    public function third_project(){

        return view ('third-year-project');
    }

    public function final_project(){
        return view ('final-year-project');
    }

    public function third_student(){
        return view ('third-year-students');
    }

    public function final_student(){
        return view ('third-year-students');
    }
    public function third_schedule(){
        return view ('third-year-schedule');
    }
    public function final_schedule(){
        return view ('final-year-schedule');
    }
    
    
    
}