<?php

namespace App\Http\Controllers\Admin;
use App\SwitchBtn;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SwitchController extends Controller
{
    public function switch(){
        return view('admin.switch');
    }

    public function on($id)
    {
        $table = SwitchBtn::find($id);
        $table->formSwitch = 'ON';
        $table->save();
        return back();
    }
    public function off($id)
    {
        $table = SwitchBtn::find($id);
        $table->formSwitch = 'OFF';
        $table->save();
        return back();
    }
}
