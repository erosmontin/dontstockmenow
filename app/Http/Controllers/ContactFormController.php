<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    //
    public function create(){

        $user=auth()->user();
        if(is_null($user)){
            $user=new User;
        }
        return view('contact.create',compact('user'));
    }


    public function store(){
//        $user=auth()->user();


        $data= request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);



        Mail::to('test@test.com')->send(new ContactFormMail($data));
        return back()->with('message','Thanks for your message we\' be uin touch');
    }
}
