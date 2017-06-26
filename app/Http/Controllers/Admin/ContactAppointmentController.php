<?php

namespace App\Http\Controllers\Admin;

use App\Model\Appointment;
use App\Model\ProfileSetting;
use App\Model\ServiceAppointment;
use Illuminate\Http\Request;

use App\Http\Requests;
use AppHelper;
use App\Http\Controllers\Controller;

class ContactAppointmentController extends AdminBaseController
{
    /**
     * @var view location path
     */
    protected $view_path = 'admin.contact-appointment';
    protected $scope = 'contact-appointment';
    protected $title = 'Appointment';
    protected $image_thumb_dimensions = '';
    /**
     * @var string final image
     */
    protected $imagePath = '';

    /**
     * Used by Update Action to store old image
     *
     * @var string
     */
   protected $existing_image = '';

    public function __construct()
    {
        parent::__construct();
        $this->imagePath = 'images/'. $this->scope;
    }


    public function index()
    {
        $data = [];
        $data['appointment'] = Appointment::orderBy('id', 'DESC')->get();
        $data['service-price'] = ServiceAppointment::get();

        return view(parent::loadDefaultVars($this->view_path.'.index'), compact('data'));
    }

    public function show($id) {
        $data = [];
        $data['appointment'] = Appointment::find($id);
        $data['service-price'] = ServiceAppointment::where('appointment_id', $data['appointment']->id)
            ->get();

        return view(parent::loadDefaultVars($this->view_path.'.show'), compact('data'));
    }

}
