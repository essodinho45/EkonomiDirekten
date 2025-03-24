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
                'mobile' => 'string',
            ]
        );
        Log::info(json_encode($request));
        $data = array(
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message'],
            'mobile' => key_exists('mobile', $request) ? $request['mobile'] : '',
        );

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
            $message->to('no-reply@ekonomidirekten.se');
            $message->replyTo($data['email']);
            $message->subject($data['subject']);
        });
        // Mail::send('emails.reply', [], function ($message) use ($data) {
        //     $message->from('no-reply@ekonomidirekten.se');
        //     $message->to($data['email']);
        //     $message->subject($data['subject'] . ' - reply');
        // });

        return response('OK', 200);

    }
}
