<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $nam;
    public $mess;
    public function __construct($name,$message)
    {
        //
        $this->nam = $name;
        $this->mess = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_name = $this->nam;
        $e_message = $this->mess;
        return $this->view('front_end.thankyou', compact('e_message'))->subject($e_name);
    }
}
