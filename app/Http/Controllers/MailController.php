<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\EmailDemo;
use Symfony\Component\HttpFoundation\Response;

class MailController extends Controller
{
    public function sendEmail(){
        $email ='np03cs4s210141@heraldcollege.edu.np';
        $mailData =[
            'title'=>'try email',
            'url'=>'https://www.positronx.io'
        ];
        Mail::to($email)->send(new EmailDemo($mailData));
        return response()->json([
            'message'=>'Okay the message has been sent'
        ],Response::HTTP_OK);

    }

}
