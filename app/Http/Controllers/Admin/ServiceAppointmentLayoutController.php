<?php

namespace App\Http\Controllers\Admin;

use App\Model\ProfileSetting;
use Illuminate\Http\Request;

use App\Http\Requests;
use AppHelper;
use App\Http\Controllers\Controller;

class ServiceAppointmentLayoutController extends AdminBaseController
{
    /**
     * @var view location path
     */
    protected $view_path = 'admin.service-appointment-layout';
    protected $scope = 'service-appointment-layout';
    protected $title = 'Service Appointment Layout';

    /**
     * Used by Update Action to store old image
     *
     * @var string
     */
   protected $existing_image = '';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     *  Used while uploading image
     */
    protected $file_input_field = 'logo';

    public function edit()
    {
        $config = ProfileSetting::first();

        return view(parent::loadDefaultVars($this->view_path.'.edit'), compact('config'));
    }

   public function store(Request $request, $id)
    {
            $ProfileSetting= ProfileSetting:: findOrFail($id);

        /*    $this->existing_image = $ProfileSetting->logo;*/

            /*$ProfileSetting->update([
                'company_name'  => $request->get('company_name'),
                'email'         => $request->get('email'),
                'address'       => $request->get('address'),
                'facebook_link' => $request->get('facebook_link'),
                'logo'          => $this->__checkFileAndUpload($request),
            ]);*/

            if($ProfileSetting){
                AppHelper::flash('success', 'Record has been updated Successfully');
                return redirect()->route('service-appointment-layout.edit');
            }else{
                AppHelper::flash('danger', 'Record could not be created');
                return redirect()->route('service-appointment-layout.edit');
            }
    }

}
