<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public string $email;
    public string $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $message)
    {
        //
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->from($this->email, "prueba")
            ->subject("formulario de contacto")
            ->markdown("email.contact");
    }
}
