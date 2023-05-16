<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\admin;

class AdminController extends Controller
{
    function registeradmin(request $request){
        $request->validate([
            'adminname'=>'required',
            'adminemail'=>'required',
            'adminpassword'=>'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);
    }

    public function create(array $data){
        return admin::create([
            'name' => $data['adminname'],
            'email' => $data['adminemail'],
            'password' => Hash::make($data['adminpassword'])
        ]);
    }

    function login(request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (auth()->guard('admin')->attempt($credentials)){
                return redirect("home");
            }
            return redirect("login")->withSuccess('Login details are not valid');
    }

    function logout(request $request){
        Session::flush();
        return redirect("login");
    }

    
}
