<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact() 
    {
        return view('contact-us');
    }

    public function sendEmail(Request $req)
    {
        $details = [
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'msg' => $req->msg
        ];
        Mail::to('rahamanashikur63@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent' , 'Message Hass been sent');
    }
}
