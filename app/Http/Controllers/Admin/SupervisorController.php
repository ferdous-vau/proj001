<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class SupervisorController extends Controller
{
    public function add(){
        return view ('admin.add-supervisor');
    }
    
    public function list(){
        $supervisors = User::where('userType','Supervisor')->get();
        return view ('admin.supervisor-list',compact('supervisors'));
    }
    
    // public function update_page(){
    //     return view ('update-supervisor');
    // }

    //store//
    public function store (Request $request){
    $request->validate([
        'name' => 'required',
        'email' => 'required|unique:users',
        'password' => 'required',
    ]);
        $supervisor = new User();
        $supervisor->name = $request->name;
        $supervisor->email = $request->email;
        $supervisor->password = Hash::make($request->password);
        $supervisor->userType = 'Supervisor';
        $supervisor->save();
        return redirect()->back();
    }
    //store//

//delete//
public function delete($id){
    $supervisor= User::find($id);
    $supervisor->delete();
    return redirect()->back();
}
//delete//

//edit//
public function edit($id){
    $supervisor=User::find($id);
    return view('admin.update-supervisor',compact('supervisor'));
}

//edit//


//update//
public function update(Request $request)
{
        $supervisor = User::find($request->id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $supervisor->name = $request->name;
        $supervisor->email = $request->email;
        $supervisor->save();

        return redirect()->to('supervisor-list');
}

//update//


public function super_dashboard()
{
    return view('supervisor.super-dashboard');
}






}
