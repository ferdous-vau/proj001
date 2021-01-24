<?php

namespace App\Http\Controllers\Admin;
use App\Proposal;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Final_Year_propoalController extends Controller
{
    public function final_project(){
        $proposals = Proposal::where('coursecode','CSE-4800')->get();
        return view ('admin.final-year-project',compact('proposals')); 
    }
    
    public function view_project($id){
        $proposal = Proposal::find($id);
        $supervisors = User::where('userType','Supervisor')->get();
        return view('admin.project-view',compact('proposal','supervisors'));
    }
}
