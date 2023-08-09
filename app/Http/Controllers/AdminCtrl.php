<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Admin;
class AdminCtrl extends Controller
{
    //
    //login view 
    public function login(){
        return view('admin.login');
    }

    // submit login 

    public function submit_login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $uCheck=Admin::where(['username'=>$request->username , 'password'=>$request->password])->count();
        if($uCheck>0){
            $adminData = Admin::where(['username'=>$request->username , 'password'=>$request->password])->first();
            session(['admindata'=>$adminData]);
                return redirect('admin/dashboard');
        }else{
            return redirect('admin/login')->with('error' , 'Invalid username or password !!');
        }
    }

    //return dashboard
    public function dashboard(){
        return view('admin.dashboard');
    }

    //logout
    public function logout(){
        session()->forget(['admindata']);
        return redirect('admin/login');
    }
}
