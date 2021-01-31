<?php

namespace App\Http\Controllers\Profile;
use App\User;
use App\Proposal;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function profile()
    {
        $members = Proposal::where('studentID',Auth::user()->id)->first();
        return view ('profile',compact('members'));
    }
    public function profile_update(Request $request)
    {
        //dd($request->all());
        $auth = User::find($request->id);
        if ($auth->userType == 'Student') {
            $auth->semester = $request->semester;
            $auth->year = $request->year;
         
        }else{
            $auth->designation = $request->designation;
        }
        $auth->contactNO = $request->contactNO;
        if($request->hasFile('image')){
            $extension = $request->image->extension();
            $imageName = str_slug($request->name,'_').'_'.md5(date('Y-m-d h:i:s'));
            $imageName = $imageName.'.'.$extension;
            $auth->image = $imageName;
            $request->image->move('public/uploads/image',$imageName);
        }
        $auth->save();
        return redirect()->back();

    }

    
}