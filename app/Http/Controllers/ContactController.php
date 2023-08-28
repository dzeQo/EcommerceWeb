<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function sendMail(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $data =[
           'name'=>$request->name,
           'email'=>$request->email,
           'message'=>$request->message
       ];
       Mail::to('tqedaleya@gmail.com')->send(new OrderShipped($data));        
       return redirect('/contact-us');

    }

}
