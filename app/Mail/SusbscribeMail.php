<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscribeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subscribeData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subscribeData)
    {
        $this->subscribeData = $subscribeData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      // Return subscribe email view template with user data
      return
        $this->from('info@codeblockapps.com')->subject('New Subscription')->view('email/subscribe-email-template')->with('subscribeData', $this->subscribeData);
    }
}
