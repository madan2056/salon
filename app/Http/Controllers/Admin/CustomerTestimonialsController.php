<?php

namespace App\Http\Controllers\Admin;

use App\Model\CustomerTestimonials;
use App\Http\Requests\Admin\Banner\AddFormValidation;
use App\Http\Requests\Admin\Banner\UpdateFormValidation;
use AppHelper;
use Illuminate\Http\Request;
class CustomerTestimonialsController extends AdminBaseController
{
    /**
     * @var view location path
     */
    protected $view_path = 'admin.customer_testimonials';
    protected $scope = 'customer_testimonials';
    protected $title = 'Customer And Testimonials';
    protected $image_thumb_dimensions = '';
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
        $this->imagePath = 'images/' . $this->scope;
    }


    /**
     *  Used while uploading image
     */
    protected $file_input_field = 'image';


    /**
     * Used by Update Action to store old image
     *
     * @var string
     */

    /**
     * @return show views of create
     */
    public function create()
    {
        return view($this->loadDefaultVars($this->view_path.'.create'));
    }

    protected function getData()
    {
        $data = CustomerTestimonials::select( 'id', 'type', 'video_title','video_url','customer_name','customer_image','customer_comment','customer_address', 'rank')->orderBy('id', 'asc')->get();
        return $data;
    }

    public function store(Request $request)
    {
        CustomerTestimonials::create([
            'customer_image'       => $this->__checkFileAndUpload($request),
            'status'      => $request->get('status'),
            'rank'        => $request->get('rank'),
            'type'        => $request->get('type'),
            'video_title' => $request->get('video_title'),
            'video_url' => $request->get('video_url'),
            'customer_name' => $request->get('customer_name'),
            'customer_address' => $request->get('customer_address'),
            'customer_comment' => $request->get('customer_comment'),

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

    public function update(Request $request, $id)
    {
        if (!$this->idExist($id)) {
            return redirect()->route($this->scope.'.index')->withErrors(['message' => 'Invalid Id']);
        }
        $data = $this->model;
        $this->existing_image = $data->customer_image;

        $data->update([
            'status'      => $request->get('status'),
            'order'        => $request->get('rank'),
            'type'        => $request->get('type'),
            'video_title' => $request->get('video_title'),
            'video_url' => $request->get('video_url'),
            'customer_image' => $this->__checkFileAndUpload($request),
            'customer_name' => $request->get('customer_name'),
            'customer_address' => $request->get('customer_address'),
            'customer_comment' => $request->get('customer_comment'),
        ]);
        AppHelper::flash('success', 'Record has updated successfully');
        return redirect()->route($this->scope.'.index');
    }

    public function destroy($id)
    {
        if (!$this->idExist($id)) {
            return redirect()->route($this->scope.'index')->withErrors(['message' => 'Invalid Id']);
        }

        $result = CustomerTestimonials::destroy($id);
        if($result){
        $this->existing_image = $this->model->customer_image;
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
            if ($this->model->customer_image !== '' && $this->model->customer_image !== null) {
                $this->existing_image = $this->model->customer_image;
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
        $this->model = CustomerTestimonials::find($id);
        return $this->model;
    }
}
