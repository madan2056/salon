<?php

namespace App\Http\Controllers\Admin;

use App\Model\OurService;
use App\Model\ProfileSetting;
use App\Model\ServiceAppointmentLayout;
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
    protected $route = 'appointment-layout';

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

    protected function getData()
    {

        $data = ServiceAppointmentLayout::orderBy('id', 'asc')->get();
        return $data;
    }

    public function create()
    {
        $data = [];
        $data['services'] = OurService::where('status', 1)->pluck('title', 'id');

        return view(parent::loadDefaultVars($this->view_path.'.create'), compact('data'));
    }

    public function store(Request $request)
    {
       $data = ServiceAppointmentLayout::create([
            'title'  => $request->get('title'),
        ]);

        $data->services()->sync($request->has('service_name')?$request->get('service_name'):[]);

        AppHelper::flash('success', 'Record has been updated Successfully');
        return redirect()->route('appointment-layout.index');

    }

    public function update(Request $request, $id)
    {
        if (!$this->idExist($id)) {
            return redirect()->route('appointment-layout.index')->withErrors(['message' => 'Invalid Id']);
        }

        $data = $this->model;
        $data->update([
            'title'  => $request->get('title'),
        ]);

        $data->services()->sync($request->has('service_name')?$request->get('service_name'):[]);

        AppHelper::flash('success', 'Record has been updated Successfully');


        return redirect()->route('appointment-layout.index');
    }

    public function edit($id)
    {
        $data = [];
        $data['services'] = OurService::where('status', 1)->pluck('title', 'id');
        $data['service_appointment'] = ServiceAppointmentLayout::find($id);
        $data['service_first'] = $data['service_appointment']->services->pluck('id')->all();

        return view(parent::loadDefaultVars($this->view_path.'.edit'), compact('data'));
    }

    public function destroy($id)
    {
        if (!$this->idExist($id)) {
            return redirect()->route('appointment-layout.index')->withErrors(['message' => 'Invalid Id']);
        }

        $data = $this->model;
        $data->services()->sync([]);
        $result = ServiceAppointmentLayout::destroy($id);


        AppHelper::flash('success', 'Record has deleted successfully');
        return redirect()->route('appointment-layout.index');
    }

    /**
     * Helper Methods
     */
    public function idExist($id)
    {
        $this->model = ServiceAppointmentLayout::find($id);

        return $this->model;
    }

}
