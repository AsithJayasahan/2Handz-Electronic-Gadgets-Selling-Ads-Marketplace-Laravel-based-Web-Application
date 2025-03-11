<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function About(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function SendMessage(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phoneNumber'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);

        $sendMessage=new Contact();
        $sendMessage->name=$request->name;
        $sendMessage->email=$request->email;
        $sendMessage->phoneNumber=$request->phoneNumber;
        $sendMessage->subject=$request->subject;
        $sendMessage->message=$request->message;

        $res = $sendMessage->save();

        // Redirect based on the result of the insertion operation
        if ($res) {
            return  redirect('contact')->with('success', 'Insert Successfully');
        } else {
            return redirect('contact')->with('fail', 'Insert Unsuccessfully');
        }

    }

}
