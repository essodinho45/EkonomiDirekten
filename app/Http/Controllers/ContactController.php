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

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
            $message->from('info@ekonomidirekten.se');
            $message->to('info@ekonomidirekten.se', 'Mail from contact form');
            $message->subject($data['subject']);
        });
        Mail::send('emails.reply', [], function ($message) use ($data) {
            $message->from('info@ekonomidirekten.se');
            $message->to($data['email']);
            $message->subject($data['subject'] . ' - reply');
        });

        return response('OK', 200);

    }
}
