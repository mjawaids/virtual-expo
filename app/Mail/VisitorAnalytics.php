<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VisitorAnalytics extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $visitors;
    public $stand;
    public $event;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $visitors, $stand, $event)
    {
        $this->email = $email;
        $this->visitors = $visitors;
        $this->stand = $stand;
        $this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.visitorAnalytics');
    }
}
