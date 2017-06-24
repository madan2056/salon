<?php

namespace App\Http\Controllers\Admin;

use App\Model\ContactForm;
use AppHelper;
use DB;

class InquiryFormController extends AdminBaseController
{
    /**
     * @var view location path
     */
    protected $view_path = 'admin.inquiry_form';
    protected $scope = 'inquiry_form';
    protected $title = 'Inqury Form';
    protected $code;
    protected $model;

    public function __construct()
    {
        parent::__construct();
    }

    protected function getData()
    {

        $data = ContactForm::select('id', 'viewed_by_admin', 'full_name', 'email','phone_number', 'address')->where('type', 'inquiry_form')->orderBy('id', 'DESC')->get();
        return $data;
    }

    /**
     * @return show views of edit
     */
    public function show($id)
    {

        if (!$this->idExist($id)) {
            return redirect()->route($this->scope . '.index')->withErrors(['message' => 'Invalid Id']);
        }
        $this->pageView();
        $data = [];
        $data['row'] = $this->model;

        return view($this->loadDefaultVars($this->view_path . '.show'), compact('data'));
    }

    public function destroy($id)
    {
        if (!$this->idExist($id)) {
            return redirect()->route($this->scope . 'index')->withErrors(['message' => 'Invalid Id']);
        }
         ContactForm::destroy($id);

        AppHelper::flash('success', 'Record has deleted successfully');
        return redirect()->route($this->scope . '.index');
    }



    /**
     * Helper Methods
     */
    public function idExist($id)
    {
        $this->model = ContactForm::find($id);
        return $this->model;
    }

    protected function pageView()
    {
        $this->model->viewed_by_admin = 1;
        $this->model->save();
    }
}
