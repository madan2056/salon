<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Front\FormValidation;
use App\Http\Requests\InquiryFormValidateRequest;
use App\Http\Requests\RequestQuotationValidateRequest;
use App\Mail\ContactFormMail;
use App\Model\ContactForm;
use App\Model\OurService;
use App\Model\ProfileSetting;
use AppHelper, Mail;

class FormController extends FrontendBaseController
{

    /**
     * Show the request quotation form.
     */
    public function requestQuotation()
    {
        $data             = [];
        $data['row']      = AppHelper::getDataByPage('request_quotation');
        $data['services'] = OurService::where('status', 1)->pluck('title','id');

        return view(parent::loadDefaultVars('frontend.form.request_quotation', ['page_title' => 'Contact Us']), compact('data'));
    }

    /**
     * Store the data from request quotation.
     */
    public  function requestQuotationStore(RequestQuotationValidateRequest $request){

        $form_submit = ContactForm::create([
            'full_name'     => $request->get('full_name'),
            'email'         => $request->get('email'),
            'phone_number'  => $request->get('phone_number'),
            'address'       => $request->get('address'),
            'service_id'    => $request->get('service_id'),
            'quantity'      => $request->get('quantity'),
            'detail'        => $request->get('detail'),
            'type'          => 'request_quotation',
        ]);

        $service_title = OurService::where('id',$form_submit->service_id)->first()->title;

        $email = ProfileSetting::first()->email;

        if(isset($email)){
            $data         = [];
            $data['name'] = 'Request Quotation';
            $data['email'] = $email;
            Mail::send(config('broadway.mail_path.request_quotation_path'),
                ['data' => $request->all(),'service'=>$service_title ], function ($m) use ($data) {
                    $m->to($data['email'], $data['name'])->subject('Request Quotation Form.');
                });
        }

        AppHelper::flash('success', 'Request Quotation Has Been Sent Successfully');
        return redirect()->route('request_quotation');
    }

    /**
     * Show the inquiry form.
     */
    public function inquiryForm()
    {
        $data             = [];
        $data['row']      = AppHelper::getDataByPage('inquiry_form');

        return view(parent::loadDefaultVars('frontend.form.inquiry_form', $this->getDetailPageMetaData($data)),compact('data'));
    }

    /**
     * Store the data from inquiry form.
     */
    public function inquiryFormStore(InquiryFormValidateRequest $request)
    {
        ContactForm::create([
            'full_name'     => $request->get('full_name'),
            'email'         => $request->get('email'),
            'phone_number'  => $request->get('phone_number'),
            'address'       => $request->get('address'),
            'detail'        => $request->get('detail'),
            'type'          => 'inquiry_form',
        ]);
        $email = ProfileSetting::first()->email;

        if(isset($email)){
            $data         = [];
            $data['name'] = 'Inqury Form';
            $data['email'] = $email;
            Mail::send(config('broadway.mail_path.inquiry_form_path'),
                ['data' => $request->all() ], function ($m) use ($data) {
                    $m->to($data['email'], $data['name'])->subject('Inquiry Form.');
                });
        }

        AppHelper::flash('success', 'Inquiry Form Has Been Sent Successfully');
        return redirect()->route('inquiry_form');
    }

    protected function getDetailPageMetaData(array $data)
    {
        $tmp = [];
        $tmp['title'] = $data['row']->title1;
        $tmp['description'] = AppHelper::decreaseTextWithCharCheck($data['row']->description, 0, 300);
        $tmp['image'] = asset('images/page/'. $data['row']->image);

        return parent::getMetaData($tmp);
    }


    public function contactUs()
    {
        $data = [];
        $this->page = 'contact-us';
        return view(parent::loadDefaultVars('frontend.home.contact', ['page_title' => 'Contact Us']), compact('data'));
    }

    public function contactSendEmail(FormValidation $request)
    {
        $profile = ProfileSetting::first();
        Mail::to($profile->sending_email)
            ->send(new ContactFormMail($request));

        $message  = 'Thank you, we have received your message.';
        $message .= '<br> If you did not get the email, please, check your spam folder.';

        $request->session()->flash('curd_message', $message);
        return redirect()->route('contact-us');
    }
}
