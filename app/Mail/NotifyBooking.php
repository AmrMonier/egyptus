<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyBooking extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = env('MAIL_FROM_ADDRESS');
        $subject = 'New Trip have been booked 😊';
        $name = env('MAIL_FROM_NAME');

        return $this->view('mails.notify-booking')
                    ->from($address, $name)
                    ->with([
                        'client' => $this->data['client'],
                        'trip' => $this->data['trip'],
                        'order' => $this->data['order']
                    ]);
        return $this->view('view.name');
    }
}
