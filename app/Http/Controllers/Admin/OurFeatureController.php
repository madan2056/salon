<?php

namespace App\Http\Controllers\Admin;

use App\Model\OurFeature;

use App\Http\Requests\Admin\OurFeature\AddFormValidation;
use App\Http\Requests\Admin\OurFeature\UpdateFormValidation;
use App\Http\Controllers\Controller;
use AppHelper;

class OurFeatureController extends AdminBaseController
{
    /**
     * @var view location path
     */
    protected $view_path = 'admin.our_feature';
    protected $scope = 'our_feature';
    protected $title = 'OurFeature';
    protected $image_thumb_dimensions = '';
    protected $code;
    protected $model;
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

    /**
     *  Used while uploading image
     */
    protected $file_input_field = 'image';

    /**
     * @return show views of create
     */
    public function create(){
        $data               = [];
        $data['our_feature_last'] = OurFeature::orderBy('id', 'DESC')->first();
        $data['last_order'] = ($data['our_feature_last'])?$data['our_feature_last']->rank + 10:10;

        return view($this->loadDefaultVars($this->view_path.'.create'),compact('data'));
    }

    protected function getData()
    {

        $data = OurFeature::select('id', 'title','image', 'description', 'status','rank')->orderBy('id', 'asc')->get();
        return $data;
    }

    public function store(AddFormValidation $request)
    {
        OurFeature::create([
            'title'               => $request->get('title'),
            'short_desc'         => $request->get('short_desc'),
            'description'         => $request->get('description'),
            'image'               => $this->__checkFileAndUpload($request),
            'status'              => $request->get('status'),
            'rank'                => $request->get('rank'),
        ]);

        AppHelper::flash('success', 'Record has been created Successfully');
        return redirect()->route($this->scope.'.index');
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
        $this->existing_image = $data->image;
        $data->update([
            'title'              => $request->get('title'),
            'short_desc'         => $request->get('short_desc'),
            'description'         => $request->get('description'),
            'image'               =>  $this->__checkFileAndUpload($request),
            'status'              => $request->get('status'),
            'rank'                => $request->get('rank'),
        ]);
        AppHelper::flash('success', 'Record has been updated Successfully');
        return redirect()->route($this->scope.'.index');
    }

    public function destroy($id)
    {
        if (!$this->idExist($id)) {
            return redirect()->route($this->scope.'index')->withErrors(['message' => 'Invalid Id']);
        }

        $result = OurFeature::destroy($id);
            if($result){
                $this->existing_image = $this->model->image;
                
                if (!empty($this->existing_image)) {
                    $this->__unlinkFile($this->imagePath, $this->existing_image);
                }
            }

        AppHelper::flash('success', 'Record has deleted successfully');
        return redirect()->route($this->scope.'.index');
    }

    public function destroyImg($id) {

        if (!$this->idExist($id)) {
            AppHelper::flash('info', 'Invalid Id');
            return redirect()->route($this->scope . '.index');
        }
        $data = $this->model;
        if ($data) {
            if ($this->model->image !== '' && $this->model->image !== null) {
                $this->existing_image = $this->model->image;
                if (!empty($this->existing_image)) {
                    $this->__unlinkFile($this->imagePath, $this->existing_image);
                }
            }

            $data->update([
                'image' => '',
            ]);
        }

        AppHelper::flash('success', 'Image Deleted Successfully');
        return redirect()->route($this->scope.'.edit', ['id' => $id]);
    }

    /**
     * Helper Methods
     */
    public function idExist($id)
    {
        $this->model = OurFeature::find($id);
        return $this->model;
    }
}
