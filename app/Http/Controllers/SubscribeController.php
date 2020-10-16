<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscribeMail;

class SubscribeController extends Controller
{
  // Send method for Subscription
  function send(Request $request)
  {
    // Require to validate email
    $this->validate($request, [
      'email'       =>  'required|email',
    ]);

    // Get email after validation
    $subscribeData = array(
      'email' =>  $request->email,
    );

    // Create new subscription email from $subscribeData & mail it to email address
    Mail::to('codeblock.life@gmail.com')->send(new SubscribeMail($subscribeData));

    // Display success mesage to user
    return back()->with('success-subscribe', 'Thank you for subscribing! A new blog post will be coming soon.');

  }
}
