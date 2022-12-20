<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Mail;

//  Route::get('/page', function (){
//      return view('try');
//  });

Route::get('/', function () {
    return view('welcome');
});

Route::get('send/email',[MailController::class,'sendEmail']);
//------------------------------------------------------//

Route::get('contact-us',[ContactController::class,'index']);
Route::post('contact-us',[ContactController::class,'store'])->name('contact-us');

//-----------------------------------//


Route::post('/register',[UserController::class,'register'])->name('register');


// --------------------------------postblog-----------------------------------------------//



Route::post('/insert',PostController::class,'index');


//------------------------------route for inheritance --------------------------/



