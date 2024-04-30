<?php

namespace App\Http\Controllers;

use App\Mail\GeneralMailNotifier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        $mail = new GeneralMailNotifier(config('app.name').' - Contact Form Submission', 'contact-mail', $data);

        // Send the email to the website's email address
        Mail::to('yourwebsiteemail@example.com')->send($mail);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
