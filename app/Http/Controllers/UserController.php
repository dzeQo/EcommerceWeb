<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function LogIn(Request $req){
       $user = User::where(['email' => $req->email])->first();
       if ( !$user || !Hash::check($req->password , $user->password)){

            return "Username or password is unmatched!";
       }else {
        $req->session()->put('user' , $user);
        return redirect('/');
       }
    }

    function SignIn( Request $req){
        $user = new User;
        $user->name =$req->name;
        $user->email =$req->email;
        $user->password =Hash::make($req->password);
        if ($req->cpass !== $req->password){
            echo "Password unmatched!";
        }elseif ($req->cpass == $req->password){
            $user->save();
            return redirect('/login');
        }
    }
}
