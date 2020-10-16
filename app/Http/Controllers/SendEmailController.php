<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
  // Send method for email form
  function send(Request $request)
  {

    // Require to validate all contact form fields
    $this->validate($request, [
      'firstname'   =>  'required',
      'lastname'    =>  'required',
      'email'       =>  'required|email',
      'message'     =>  'required',
      'checkbot'    =>  'required'
    ]);

    // Data array for form fields
    $data = array(
      'firstname' => $request->firstname,
      'lastname'  => $request->lastname,
      'email'     => $request->email,
      'message'   => $request->message
    );

    // Create new contact form message with all fields from $data & mail to email address
    Mail::to('codeblock.life@gmail.com')->send(new SendMail($data));

    //  Display Success message to user
    return back()->with('success', 'Thank you for contacting me! I will get back to you shortly');

  }
}
