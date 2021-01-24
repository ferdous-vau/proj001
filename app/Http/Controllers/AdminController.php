<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Proposal;
class AdminController extends Controller
{
    public function dashboard(){
        if (Auth::user()->userType == 'Admin') {
            return view ('admin.dashboard');
        }
        elseif(Auth::user()->userType == 'Supervisor'){
            return view ('supervisor.super-dashboard');
        }else{
            $check = Proposal::where('studentID',Auth::user()->id)->first();
            return view ('welcome',compact('check'));
        }
        
    }
    public function after_submit()
    {
        return view ('student.submitted');
    }
    public function view_proposal(){
        $proposal = Proposal::where('studentID',Auth::user()->id)->first();
        return view('student.proposal-view',compact('proposal'));
    }
    public function add(){
        return view ('admin.add-supervisor');
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