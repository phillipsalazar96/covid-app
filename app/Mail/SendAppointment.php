<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Appointments;
class SendAppointment extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $firstname;
    public $lastname;
    public $day_app;
    public $time_app;
    public function __construct(Appointments $app)
    {
        //
        $this->firstname = $app->firstname;
        $this->lastname = $app->lastname;
        $this->day_app = $app->day_app ;
        $this->time_app = $app->time_app;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.appointment');
    }
}
