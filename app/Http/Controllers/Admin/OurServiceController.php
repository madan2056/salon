<?php

namespace App\Http\Controllers\Admin;

use App\Model\OurService;

use App\Http\Requests\Admin\OurService\AddFormValidation;
use App\Http\Requests\Admin\OurService\UpdateFormValidation;
use App\Http\Controllers\Controller;
use App\Model\ServiceFeature;
use App\Model\ServicePricing;
use AppHelper;

class OurServiceController extends AdminBaseController
{
    /**
     * @var view location path
     */
    protected $view_path = 'admin.our_service';
    protected $scope = 'our_service';
    protected $title = 'OurService';
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
        $data['our_service_last'] = OurService::orderBy('id', 'DESC')->first();
        $data['last_order'] = ($data['our_service_last'])?$data['our_service_last']->rank + 10:10;

        return view($this->loadDefaultVars($this->view_path.'.create'),compact('data'));
    }

    protected function getData()
    {

        $data = OurService::select('id', 'title','slug','image', 'description', 'status','rank')->orderBy('id', 'asc')->get();
        return $data;
    }

    public function store(AddFormValidation $request)
    {

        try {

            $service = OurService::create([
                'title'               => $request->get('title'),
                'slug'                => str_slug($request->get('title')),
                'description'         => $request->get('description'),
                'image'               => $this->__checkFileAndUpload($request),
                'status'              => $request->get('status'),
                'rank'                => $request->get('rank'),
            ]);

            if($request->get('feature_title')) {

                foreach ($request->get('feature_title') as $key =>  $feature_title) {
                    ServiceFeature::create([
                        'title'      => $feature_title,
                        'rank'       => $key,
                        'service_id' => $service->id
                    ]);
                }

            }

            if($request->get('pricing_title')) {

                foreach ($request->get('pricing_title') as $key =>  $pricing_title) {
                    ServicePricing::create([
                        'title'      => $pricing_title,
                        'rank'       => $key,
                        'cost'       => $request->get('price')[$key],
                        'service_id' => $service->id
                    ]);
                }

            }

        } catch (\Exception $e) {

            dd($e);

        }



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

        $data['service_features'] = ServiceFeature::where('service_id', $id)->orderBy('rank', 'ASC')->get();
        $data['service_pricing'] = ServicePricing::where('service_id', $id)->orderBy('rank', 'ASC')->get();

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
            'slug'                => str_slug($request->get('title')),
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

        $result = OurService::destroy($id);
            if($result){
                $this->existing_image = $this->model->image;
                
                if (!empty($this->existing_image)) {
                    $this->__unlinkFile($this->imagePath, $this->existing_image);
                    $this->__unlinkFileThumbnails($this->image_thumb_dimensions, $this->imagePath, $this->existing_image);
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
        $this->model = OurService::find($id);
        return $this->model;
    }
}
