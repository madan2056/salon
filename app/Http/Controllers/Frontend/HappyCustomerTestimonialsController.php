<?php

namespace App\Http\Controllers\Frontend;

use App\Model\CustomerTestimonials;
use AppHelper;

class HappyCustomerTestimonialsController extends FrontendBaseController
{
    public function happyCustomer()
    {
        $data             = [];
        $data['happy_customer'] =$this->getTestimonialsOrCustomers('happy_customer', 2);
        $this->active_page = 'home';

        return view(parent::loadDefaultVars('frontend.customers.happy_customers'), compact('data'));
    }

    public function testimonials()
    {
        $data                 = [];
        $data['testimonials'] = $this->getTestimonialsOrCustomers('testimonials', 2);
        $this->active_page = 'home';

        return view(parent::loadDefaultVars('frontend.customers.testimonials'), compact('data'));
    }

    public function getTestimonialsOrCustomers($type, $pagination_number)
    {
        return $data = CustomerTestimonials::where('type',$type)
            ->where('status',1)->orderBy('rank','ASC')->paginate($pagination_number);
    }

}
