<?php

namespace App\Http\Controllers\Admin;

use App\Model\SampleWork;
use App\Http\Requests\Admin\SampleWork\AddFormValidation;
use App\Http\Requests\Admin\SampleWork\UpdateFormValidation;
use AppHelper;

class SampleWorkController extends AdminBaseController
{
    /**
     * @var view location path
     */
    protected $view_path = 'admin.sample_work';
    protected $scope = 'sample_work';
    protected $title = 'Sample Work';
    protected $model;

    /**
     * Used by Update Action to store old image
     *
     * @var string
     */
    protected $existing_image = '';

    public function __construct()
    {
        parent::__construct();
        $this->image_thumb_dimensions = config('broadway.image-dimensions.'.$this->scope);
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
        $data['sample_work_last'] = SampleWork::orderBy('id', 'DESC')->first();
        $data['last_order'] = ($data['sample_work_last'])?$data['sample_work_last']->rank + 10:10;

        return view($this->loadDefaultVars($this->view_path.'.create'),compact('data'));
    }


    protected function getData()
    {
        $data = SampleWork::select( 'id', 'title', 'image', 'status','rank')->orderBy('id', 'asc')->get();
        return $data;
    }

    public function store(AddFormValidation $request)
    {
        SampleWork::create([
            'title'      => $request->get('title'),
            'image'      => $this->__checkFileAndUpload($request),
            'status'     => $request->get('status'),
            'rank'     => $request->get('rank'),
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
            'title'      => $request->get('title'),
            'image'      => $this->__checkFileAndUpload($request),
            'status'     => $request->get('status'),
            'rank'     => $request->get('rank'),
        ]);
        AppHelper::flash('success', 'Record has updated successfully');
        return redirect()->route($this->scope.'.index');
    }

    public function destroy($id)
    {
        if (!$this->idExist($id)) {
            return redirect()->route($this->scope.'index')->withErrors(['message' => 'Invalid Id']);
        }

        $result = SampleWork::destroy($id);
        if($result){
        $this->existing_image = $this->model->image;
            if (!empty($this->existing_image)) {
                $this->__unlinkFile($this->imagePath, $this->existing_image);
                $this->__unlinkFileThumbnails($this->image_thumb_dimensions, $this->imagePath, $this->existing_image);
            }
        }

        AppHelper::flash('success', 'Record has deleted successfully');
        return redirect()->route($this->scope.'.index')->withErrors(['message' => 'Record deleted successfully.']);
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
                    $this->__unlinkFileThumbnails($this->image_thumb_dimensions, $this->imagePath, $this->existing_image);
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
        $this->model = SampleWork::find($id);
        return $this->model;
    }
}
