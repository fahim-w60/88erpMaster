<?php

namespace Innovation\EightHrm\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $message; 
    public $name; 

    public function __construct($message,$name)
    {
        $this->message = $message;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('farhadali0507@gmail.com', 'ok Boss')
                    ->subject('Welcome to Our Application')
                    ->view('eight_hrm::contacts.email')->with(['message'=>$this->message,'name'=>$this->name]);

       // return $this->markdown('contact::contacts.email')->with(['message'=>$this->message,'name'=>$this->name]);
    }
}
