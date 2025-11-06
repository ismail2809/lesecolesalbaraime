<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $contact = $this->contact;
        $address = config('mail.from.address');
        $name = "Les écoles AlBaraime";
        $subject = "Contact Les écoles AlBaraime";

        $message = $this->from($contact["email"],$name)        
                        ->markdown('contact.mail')    
                        ->subject($subject);

        return $this->from($contact["email"])
            ->view('contact.mail');
        
        
        /*return  $this->from($address,$name)
                        ->view('contact.mail');*/                        
    }
}
