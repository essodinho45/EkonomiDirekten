<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use Mail;
use Session;

class ContactController extends Controller
{
    public function PostContact(Request $request)
    {
        Log::info(json_encode($request->all()));
        $request = $this->validate(
            $request,
            [
                'email' => 'required|email',
                'subject' => 'string',
                'name' => 'string',
                'message' => 'string',
            ]
        );
        Log::info(json_encode($request));
        $data = array(
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message']
        );

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('info@ekonomidirekten.se');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your E-mail was sent! Allegedly.');
        Session::flash('alert-class', 'alert-success');

        return redirect('contact');

    }
}
