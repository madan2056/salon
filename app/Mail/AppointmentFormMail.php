<?php

namespace App\Mail;

use App\Model\Appointment;
use App\Model\ServiceAppointment;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppointmentFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    public $appointment;

    /**
     * Create a new message instance.
     *
     * @return void
     * $request var
     * $appointment var
     */
    public function __construct(Request $request, Appointment $appointment)
    {
        $this->request = $request;
        $this->appointment = $this->getValue($appointment);

    }

    protected function getValue($appointment) {

        $data                  = [];
        $data['appointment']   = $appointment;
        $data['service-price'] = ServiceAppointment::where('appointment_id', $data['appointment']->id)->get();

        $data['rows'] = [];
        if ($data['service-price']->count() > 0) {
            foreach ($data['service-price'] as $key => $item) {
                $data['rows'][$item->service_id]['service'] = $item->service_title;
                $data['rows'][$item->service_id]['price_data'][$key]['id'] = $item->service_pricing_title;
                $data['rows'][$item->service_id]['price_data'][$key]['price_title'] = $item->service_pricing_title;
                $data['rows'][$item->service_id]['price_data'][$key]['price'] = $item->service_pricing_cost;
            }
        }

        return $data;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // ['request' => $this->request, 'appointment' => $this->appointment]
        return $this->subject('Appointment Mail')->view('email.appointment_email');
    }
}
