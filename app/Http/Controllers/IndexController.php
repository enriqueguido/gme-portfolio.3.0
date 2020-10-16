<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\IndexMail;

use Illuminate\Http\Request;

class IndexController extends Controller
{
  // Render Home page

  public function index()
  {
    return view('home/index');
  }

  // Send method for Subscription
  function send(Request $request)
  {

    $this->validate($request, [
      'email' =>  'required|email'
    ]);

    // Data array for form fields
    $indexData = array(
      'email'     => $request->email
    );


    // Create new contact form message with all fields from $data & mail to email address
    Mail::to('codeblock.life@gmail.com')->send(new IndexMail($indexData));

    //  Display Success message to user
    return back()->with('index', 'Thank you for contacting me! I will get back to you shortly');
    // return Redirect::back()->withInput(Input::all());


  }
}
