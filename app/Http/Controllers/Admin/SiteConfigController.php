<?php

namespace App\Http\Controllers\Admin;

use App\Model\SiteConfig;
use App\Http\Requests\Admin\SiteConfig\AddFormValidation;
use App\Http\Requests\Admin\SiteConfig\UpdateFormValidation;
use App\Http\Controllers\Controller;
use AppHelper;

class SiteConfigController extends AdminBaseController
{
    /**
     * @var view location path
     */
    protected $view_path = 'admin.site_config';
    protected $scope = 'site_config';
    protected $title = 'SiteConfig';


    public function __construct()
    {
        parent::__construct();
    }


    protected function getData()
    {
        $data = SiteConfig::select('id', 'key', 'value')->orderBy('id', 'asc')->get();
        return $data;
    }

    public function store(AddFormValidation $request)
    {
        SiteConfig::create([
            'key'        => $request->get('key'),
            'value'      => $request->get('value'),
            'status'     => $request->get('status'),
        ]);
        AppHelper::flash('success', 'Record has been created Successfully');
        return redirect()->route($this->scope.'.index')->withErrors(['message' => 'Record deleted successfully.']);
    }

    /**
     * @return show views of edit
     */
    public function edit($id){
        if (!$this->idExist($id)) {
            return redirect()->route($this->scope.'.index')->withErrors(['message' => 'Invalid Id']);
        }
        $data = [];
        $data['row'] = $this->model;
        return view($this->loadDefaultVars($this->view_path.'.edit'),compact('data'));
    }

    public function update(UpdateFormValidation $request, $id)
    {
        if (!$this->idExist($id)) {
            return redirect()->route($this->scope.'.index')->withErrors(['message' => 'Invalid Id']);
        }
        $data = $this->model;
        $data->update([
            'key'        => $request->get('key'),
            'value'      => $request->get('value'),
            'status'     => $request->get('status'),
        ]);
        AppHelper::flash('success', 'Record has updated successfully');
        return redirect()->route($this->scope.'.index');
    }

    public function destroy($id)
    {
        if (!$this->idExist($id)) {
            return redirect()->route($this->scope.'index')->withErrors(['message' => 'Invalid Id']);
        }
        $result = SiteConfig::destroy($id);

        AppHelper::flash('success', 'Record has deleted successfully');
        return redirect()->route($this->scope.'.index')->withErrors(['message' => 'Record deleted successfully.']);
    }

    /**
     * Helper Methods
     */
    public function idExist($id)
    {
        $this->model = SiteConfig::find($id);
        return $this->model;
    }
}
