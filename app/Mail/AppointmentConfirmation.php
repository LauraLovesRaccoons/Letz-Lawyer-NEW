<?php

// App/Mail/AppointmentConfirmation.php

namespace App\Mail;

use App\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;
    public $recipientName;
    public $isLawyer;

    public function __construct(Appointment $appointment, $recipientName, $isLawyer)
    {
        $this->appointment = $appointment;
        $this->recipientName = $recipientName;
        $this->isLawyer = $isLawyer;
    }

    public function build()
    {
        return $this->view('emails.appointment_confirmation')
                    ->subject('Appointment Confirmation');
    }
}

