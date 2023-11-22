<?php

namespace App\Mail;

use Faker\Provider\ar_EG\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address as MailablesAddress;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CambioContraseñaMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $codigo;

    public function __construct($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new MailablesAddress('heraldox102@gmail.com'),
            subject: 'Cambio de Contraseña Mailable',
        );
    }

    /**
     * Get the message content definition.
     */

    //FUNCION PARA MANDAR LA VISTA AL CORREO
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'auth.cambio_contrasena',
    //     );
    // }
    public function build()
    {
        return $this->view('auth.cambio_contrasena')
                    ->with('codigo', $this->codigo);
    }
    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
