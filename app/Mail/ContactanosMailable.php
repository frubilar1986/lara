<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


/* Las variable pueden ser accedidas en la vista dentro del metodo build() */

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    /* Descripccion que aparece en la cabecera del correo enviado */
    public $subject = "Laravel 8.0";

    public $contacto;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        $this->contacto = $contacto;
    }




    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contactanos');
    }
}
