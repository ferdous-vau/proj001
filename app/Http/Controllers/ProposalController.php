<?php

namespace App\Http\Controllers;
use Auth;
use App\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'mobileno' => 'required',
            'studenName' => 'required',
            'studentID' => 'required',
            'projectTitle' => 'required',
            'coursecode' => 'required',
            'file' => 'required',
        ]);
    //dd($request->all());
        $members = [];
        $studentIDs = $request->studentID;
        foreach ($request->studenName as $key => $name){
            $members[] = [
                'name' => $name,
                'stdID' => $studentIDs[$key],
            ];
        }
        $proposal = new Proposal();
        $proposal->emailaddress = $request->email;
        $proposal->mobileno = $request->mobileno;
        $proposal->members = json_encode($members);
        $proposal->projectTitle = $request->projectTitle;
        $proposal->coursecode = $request->coursecode;
        $proposal->studentID = Auth::user()->id;
        $proposal->year = 'Final Year';
        if($request->hasFile('file')){
            $extension = $request->file->extension();
            $fileName = str_slug($request->projectTitle,'_');
            $fileName = $fileName.'.'.$extension;
            $proposal->file = $fileName;
            $request->file->move('public/uploads/proposals',$fileName);
        }
        $proposal->supervisor = $request->supervisor;
        $proposal->schedule = $request->schedule;
        $proposal->save();
        return redirect()->to('submitted');
    }
    


    
}
