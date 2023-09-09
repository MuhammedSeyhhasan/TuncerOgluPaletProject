<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;   

class ContactController extends Controller
{
    public function contact()
    {
        return view('iletisim');
    }

    public function sendEmail(Request $request)
    {

         $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);


        $details = [
            'name' =>$request->name,
            'email' =>$request->email,
            'message' =>$request->message
        ];
        Mail::to('tunceroglupalet@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Messaginiz başarıyla gönderildi!');
    }
}
