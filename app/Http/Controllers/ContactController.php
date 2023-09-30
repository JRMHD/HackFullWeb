<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\MyTestEmail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Data from the form
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];
        // $name=$request->name;
        // Send the email using Laravel Mailre
        // Mail::to('reaganmukabana@gmail.com')->send(new MyTestEmail($data));
        Mail::to('recipient@example.com')->send(new MyTestEmail($data));
        // $data = ['Item 1', 'Item 2', 'Item 3'];
        // $recipientEmail = 'recipient@example.com';
    
        // Mail::to($recipientEmail)->send(new MyTestEmail($request));
        // Redirect back with a success message
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
