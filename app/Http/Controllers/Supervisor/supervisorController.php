<?php

namespace App\Http\Controllers\Supervisor;
use Auth;
use App\User;
use App\Proposal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class supervisorController extends Controller
{
    public function final_project(){
        $proposals = Proposal::where('coursecode','CSE-4800')->where('supervisor',Auth::user()->id)->get();
        return view ('supervisor.final-year-project',compact('proposals')); 
    }
    
    public function view_project($id){
        $proposal = Proposal::find($id);
        $supervisors = User::where('userType','Supervisor')->get();
        return view('supervisor.project-view',compact('proposal','supervisors'));
    }
    public function third_project(){
        $proposals = Proposal::where('coursecode','CSE-3300')->where('supervisor',Auth::user()->id)->get();
        return view ('supervisor.third-year-project',compact('proposals'));
    }
}
