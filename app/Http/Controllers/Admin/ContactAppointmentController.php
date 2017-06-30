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

    public function show($id)
    {

        $data = [];
        $data['appointment'] = Appointment::find($id);
        $data['service-price'] = ServiceAppointment::where('appointment_id', $data['appointment']->id)
            ->get();

        $data['rows'] = [];
        if ($data['service-price']->count() > 0) {
            foreach ($data['service-price'] as $key => $item) {
                $data['rows'][$item->service_id]['service'] = $item->service_title;
                $data['rows'][$item->service_id]['price_data'][$key]['id'] = $item->service_pricing_title;
                $data['rows'][$item->service_id]['price_data'][$key]['price_title'] = $item->service_pricing_title;
                $data['rows'][$item->service_id]['price_data'][$key]['price'] = $item->service_pricing_cost;
            }
        }

        return view(parent::loadDefaultVars($this->view_path.'.show'), compact('data'));
    }

    public function destroy($id) {
       $appointment =  Appointment::find($id);

       $appointment->delete();
        AppHelper::flash('success', 'Record has deleted successfully');
        return redirect()->route($this->scope.'.index')->withErrors(['message' => 'Record deleted successfully.']);
    }

}
