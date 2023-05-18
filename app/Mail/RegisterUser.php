<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
// thanks > https://medium.com/@vncdigitalservices/how-to-send-welcome-emails-after-user-registration-in-laravel-77ce3063f7c6
// thanks > https://mailtrap.io/blog/laravel-mail-queue/
// finally send mail thanks -> https://stackoverflow.com/questions/60239532/laravel-6-expected-response-code-220-but-got-an-empty-response-using-on-digital

class RegisterUser extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Congrat you are now our Team member")
        ->markdown('emails.registers');
    }
}
