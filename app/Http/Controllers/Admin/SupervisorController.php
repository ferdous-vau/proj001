<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class SupervisorController extends Controller
{
    public function add(){
        return view ('add-supervisor');
    }
   public function store (Request $request){
    $supervisor = new User();
    $supervisor->name = $request->name;
    $supervisor->email = $request->email;
    $supervisor->password = Hash::make($request->password);
    $supervisor->save();
    return redirect()->back();
}
}
