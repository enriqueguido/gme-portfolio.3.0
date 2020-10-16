<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class IndexMail extends Mailable
{
    use Queueable, SerializesModels;

    public $indexData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($indexData)
    {
      $this->indexData = $indexData;
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
        $this->from('info@codeblockapps.com')->subject('New Homepage Customer Inquiry')->view('email/index-email-template')->with('indexData', $this->indexData);
    }
}
