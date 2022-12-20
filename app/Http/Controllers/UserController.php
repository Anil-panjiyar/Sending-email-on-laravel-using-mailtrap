<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register (Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'g-recaptcha-response' => 'required|captcha',


        ]);
        //User::create($request-all());

        return view('home');

    }
}
