<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function sendContactEmail(Requests\ContactMeRequest $request)
    {
        $data = $request->only('name', 'email');
        $data['messageLine'] = explode("\n", $request->get('message'));

        Mail::send('email.contact', $data, function ($message) use ($data){
            $message->subject('Robin-Hood.net Contact Form: '.$data['name'])
                ->to(config('mail.contact_email'))
                ->replyTo($data['email']);
        });

        return back()
            ->withSuccess("The email has been sent successfully.");
    }
}
