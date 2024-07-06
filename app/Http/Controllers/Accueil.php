<?php

namespace App\Http\Controllers;

use App\Mail\HelloMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;


class Accueil extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function mail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message1 = $request->input('message');

        View::share('name', $name);
        View::share('email', $email);
        view::share('message1', $message1);
        
        Mail::to($email)->send(new HelloMail($name, $email, $message1));
        // Mail::send('mail.hello', ['name' => $name, 'email' => $email,'message' => $message], function ($message) {
        return view('mail.contact');/*->with('name',$name)->with('email',$email)->with('message1',$message1)*/
    }
}

