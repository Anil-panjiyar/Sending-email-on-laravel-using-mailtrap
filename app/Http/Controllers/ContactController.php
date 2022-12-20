<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index(){
        return view('contactForm');

    }
    public function userData(Request $request){
        // $sug =Sug::find(1);
        // dd($sug);

    }

    public function store(Request $request){
              $request->validate([
                'name'=>'required',
                 'email'=>'required|email',
                  'phone'=>'required|digits:10|numeric',
                  'subject'=>'required',
                 'message'=>'required',

             ]);

             Contact::create([
                'name'=>$request->name,
                'email'=>$request->email,
                 'phone'=>$request->phone,
                 'subject'=>$request->subject,
                 'message'=>$request->message,

             ]);




        //    Contact::create($request->all());
        //notify()->success('Welcome to Laravel Notify ');
          return redirect()->back()->with('success','thank you ');
       // return back()->with('success','sucessfully added ');

    }
}


