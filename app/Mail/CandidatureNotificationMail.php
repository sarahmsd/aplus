<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CandidatureNotificationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $candidature;
    public $candidat;
    public $employeur;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($candidature, $candidat, $employeur)
    {
        $this->candidature = $candidature;
        $this->candidat = $candidat;
        $this->employeur = $employeur;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('home');
    }
}
