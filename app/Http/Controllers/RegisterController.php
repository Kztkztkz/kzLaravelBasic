<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Carbon\Carbon;
use File;

class RegisterController extends Controller
{
    function check(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            // thanks >> https://techvblogs.com/blog/password-and-confirm-password-validation-in-laravel#:~:text=On%20the%20backend%20validation%2C%20you,user%20must%20be%20named%20password_confirmation.
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
            'fileupload'=>'required'
        ]);

        $register= new Register;
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = $request->password;
        $register->confirm_password = $request->password_confirmation;
        if($request->file()){
            $fileName=time().'_'.$request->file('fileupload')->getClientOriginalName();
            $request->file('fileupload')->storeAs('uploads',$fileName,'public');
            $register->file_upload = $fileName;
        }
        $register->save();
        return redirect('home');
    }

    function show(){
        // $mruser = Register::MrUser();
        // dd($mruser);
        $current = Carbon::now();
        $list =  Register::all();
        foreach($list as $calcdate){
            $start = $calcdate['created_at'];
            $twodatediff = $start->diffInMinutes($current) . " minutes ago";
            $calcdate->past = $twodatediff;      
        }
        
        return view('showuser', ['registerusers'=>$list]);
        
    }

    function showbyid($id){
            $specific = Register::where('id', $id)->get();
            return view('showuserbyid', compact('specific'));
        // return "something";
    }

    function delete($id){
        $del = Register::find($id);
        // unlink('uploads\uploads/'.$del->file_upload);
        File::delete(public_path('storage\uploads/'. $del->file_upload));
        return redirect('home');
    }
}
