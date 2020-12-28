<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view ('welcome');
    }

    public function dashboard(){
        return view ('admin.dashboard');
    }

    public function super_dashboard(){
        return view ('supervisor.super-dashboard');
    }

    public function add(){
        return view ('admin.add-supervisor');
    }

    public function third_project(){

        return view ('admin.third-year-project');
    }

    public function final_project(){
        return view ('admin.final-year-project');
    }

    

   
    public function third_schedule(){
        
        return view ('admin.third-year-schedule');
    }
    public function final_schedule(){
        return view ('admin.final-year-schedule');
    }
    
    public function error(){
        return view ('error');
    }
    
    
}