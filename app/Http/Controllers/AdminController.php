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

    public function list(){
        return view ('supervisor-list');
    }

    public function third(){
        return view ('third-proposal');
    }

    public function final(){
        return view ('final-proposal');
    }

    public function store (Request $request){
            $user = User::create([
            'name' =>  $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }
    
}