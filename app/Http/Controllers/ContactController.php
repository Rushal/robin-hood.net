<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ContactMeRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function sendContactEmail(Requests\ContactMeRequest $request)
    {
        $data = $request->only('name', 'email');
        $data['messageLines'] = explode("\n", $request->get('message'));

        Mail::queue('emails.contact', $data, function ($message) use ($data){
            $message->subject('Robin-Hood.net Contact Form: '.$data['name'])
                ->to(config('mail.contact_email'))
                ->replyTo($data['email']);
        });

        return back()
            ->withSuccess("The email has been sent successfully.");
    }
}
