<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Model\Album;
use App\Model\Appointment;
use App\Model\Gallery;
use App\Model\OurService;
use App\Model\ServiceAppointment;
use App\Model\ServiceAppointmentLayout;
use App\Model\ServiceFeature;
use App\Model\ServicePricing;
use AppHelper;
use App\Http\Requests\AppointmentFormValidateRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\EventDispatcher\Tests\Service;

class ServiceController extends FrontendBaseController
{

    public function detail($slug) {

        $data = [];
        $data['service-detail']  = AppHelper::getPageDataFromSlug('OurService', $slug);
        $data['service-feature'] = ServiceFeature::where('service_id', $data['service-detail']->id)->orderBy('rank', 'ASC')->get();
        $data['service-pricing'] = ServicePricing::where('service_id', $data['service-detail']->id)->orderBy('rank', 'ASC')->get();
        $data['service-related'] = OurService::where('status', 1)->where('id', '!=' ,$data['service-detail']->id)->inRandomOrder()->take(3)->get();

        return view(parent::loadDefaultVars('frontend.services.detail', ['page_title' =>  $data['service-detail']->title]), compact('data'));

    }

    public function appointment()
    {
        $service_appointment = ServiceAppointmentLayout::orderBy('rank','ASC')->get();

        return view(parent::loadDefaultVars('frontend.page.appointment', ['page_title' => 'Appointment']), compact('service_appointment'));
    }

    public function appointmentSubmit( AppointmentFormValidateRequest $requests)
    {
        $appointment = Appointment::create([
            'full_name'      => $requests->get('full_name'),
            'email'          => $requests->get('email'),
            'contact_number' => $requests->get('contact_number'),
            'address'        => $requests->get('address'),
            'prefered_date'  => \AppHelper::formatDate('Y-m-d', $requests->get('prefered_date')),
            'prefered_time'  => $requests->get('prefered_time'),
            'submitted_at'   => Carbon::now(),
            'message'        => $requests->get('message'),
        ]);

        $service_data = [];

        if($requests->get('service_price')) {
            foreach ($requests->get('service_price') as $key => $service_price) {

                $service_data[$key]                         =  explode(',', $service_price);

                if(!isset($service_data[$key][0]) && !isset($service_data[$key][1]))
                    return redirect()->route('home')->send();


                $service_price_table = ServicePricing::find($service_data[$key][0]);
                $our_service = OurService::find($service_data[$key][1]);

                $service_appointment                        = new ServiceAppointment();
                $service_appointment->service_id            = $our_service->id;
                $service_appointment->appointment_id        = $appointment->id;
                $service_appointment->service_title         = $our_service->title;
                $service_appointment->service_pricing_title = $service_price_table->title;
                $service_appointment->service_pricing_cost  = $service_price_table->cost;
                $service_appointment->save();
            }
        }

        $requests->session()->flash('message', 'Appointment has been sent Successfully');

        return redirect()->back();
    }

  /*

    protected function getServiceDetailMetaData(array $data)
    {
        $tmp = [];
        $tmp['title'] = $data['row']->title;
        $tmp['description'] = AppHelper::decreaseTextWithCharCheck($data['row']->description, 0, 300);
        $tmp['image'] = asset('images/our_service/'. $data['row']->image);

        return parent::getMetaData($tmp);
    }

    protected function getServiceListMetaData(array $data) {

        $tmp = [];
        $tmp['title'] = $data['row']->title1;
        $tmp['description'] = AppHelper::decreaseTextWithCharCheck($data['row']->description, 0, 300);
        $tmp['image'] = asset('images/page/'. $data['row']->image);

        return parent::getMetaData($tmp);
    }*/


}
