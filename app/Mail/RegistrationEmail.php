<?php

namespace App\Mail;

use App\Models\Registration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Registration $registration)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your 21 Pilots Submission Has Been Received',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mailing.mail',
            with: [
                'registration' => $this->registration,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
