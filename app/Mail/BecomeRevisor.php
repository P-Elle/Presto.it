<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BecomeRevisor extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    //creo una proprietà user che ci permetterà di ottenere l'oggetto utente 
    //ovvero l'intero row del db relativo all'user in questione che poi 
    //passeremo alla vista mail.become_revisor.
    public $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    //  /**
    //  * Build the message.
    //  *
    //  * @return $this
    //  */
    // public function build() {
    //     //presto.it@noreply.com (creata su mail trap) corrisponde all'email dell'emittente
    //     //ovvero quella standard della piattaforma
    //     return $this->from('presto.it@noreply.com')->view('mail.become_revisor');
    // }


    /**
     * Get the message envelope. EMITTENTE
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('presto.it@noreply.com', 'Presto.it'),
            subject: 'Become Revisor',
        );
    }

    /**
     * Get the message content definition. CONTENUTO
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.become_revisor',
        );
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
