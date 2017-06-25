<?php

namespace App\Http\Controllers\Admin;

use App\Model\OurService;
use App\Model\Page;

use App\Http\Requests\Admin\Page\AddFormValidation;
use App\Http\Requests\Admin\Page\UpdateFormValidation;
use AppHelper;
use Illuminate\Http\Request;
use DB;
use Symfony\Component\EventDispatcher\Tests\Service;

class PageController extends AdminBaseController
{
    /**
     * @var view location path
     */
    protected $view_path = 'admin.page';
    protected $scope = 'page';
    protected $title = 'Page';
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
        $this->imagePath = 'images/' . $this->scope;
    }


    /**
     *  Used while uploading image
     */
    protected $file_input_field = 'image';

    protected function getData()
    {

        $data = Page::select('id', 'title1', 'slug', 'image', 'description', 'page_type', 'status', 'show_in_menu')
            ->orderBy('id', 'asc')
            ->get();
        return $data;
    }

    /**
     * @return show views of create
     */
    public function create()
    {

        $data = [];
        $data['page_type'] = array(
            'page' => 'Page',
            'product_list' => 'Product',
            'service'=> 'Service',
            'request_quotation' => 'Request Quotation',
            'inquiry_form' => 'Inquiry Form',
            'home' => 'Home'
        );
        $response = [];
        $response['service'] = OurService::where('status', 1)->pluck('title', 'slug');
        $data['page'] = Page::where('parent_id', 0)->pluck('title1', 'id');

        return view($this->loadDefaultVars($this->view_path . '.create'), compact('data'));
    }

    public function store(AddFormValidation $request)
    {
        $last_rank = Page::max('rank')?Page::max('rank'):1;

        Page::create([
            'title1' => $request->get('title1'),
            'parent_id' => $request->get('parent_id'),
            'slug' => str_slug($request->get('title1')),
            'short_description' => $request->get('short_description'),
            'description' => $request->get('description'),
            'page_type' => $request->get('page_type'),
            'image' => $this->__checkFileAndUpload($request),
            'status' => $request->get('status'),
            'show_in_menu' => $request->get('show_in_menu'),
            'rank' => $last_rank + 1,
        ]);

        AppHelper::flash('success', 'Record has been created Successfully');
        return redirect()->route($this->scope . '.index');
    }

    /**
     * @return show views of edit
     */
    public function edit($id)
    {
        if (!$this->idExist($id)) {
            return redirect()->route($this->scope . '.index')->withErrors(['message' => 'Invalid Id']);
        }
        $data = [];
        $data['row'] = $this->model;
        $data['page_type'] = array(
            'page' => 'Page', 'product_list' => 'Product','service'=> 'Service',
            'request_quotation' => 'Request Quotation', 'inquiry_form' => 'Inquiry Form',
            'home' => 'Home'
            );
        $response = [];
        $response['service'] = OurService::where('status', 1)->pluck('title', 'slug');
        $data['page'] = Page::where('parent_id', 0)->pluck('title1', 'id');

        return view($this->loadDefaultVars($this->view_path . '.edit'), compact('data', 'response'));
    }

    public function update(UpdateFormValidation $request, $id)
    {
        if (!$this->idExist($id)) {
            return redirect()->route($this->scope . '.index')->withErrors(['message' => 'Invalid Id']);
        }
        $data = $this->model;
        $this->existing_image = $data->image;
        $data->update([
            'title1' => $request->get('title1'),
            'parent_id' => $request->get('parent_id')?$request->get('parent_id'):0,
            'slug' => str_slug($request->get('title1')),
            'short_description' => $request->get('short_description'),
            'description' => $request->get('description'),
            'page_type' => $request->get('page_type'),
            'image' => $this->__checkFileAndUpload($request),
            'status' => $request->get('status'),
            'show_in_menu' => $request->get('show_in_menu'),
        ]);
        AppHelper::flash('success', 'Record has been updated Successfully');
        return redirect()->route($this->scope . '.index');
    }

    public function destroy($id)
    {
        if (!$this->idExist($id)) {
            return redirect()->route($this->scope . 'index')->withErrors(['message' => 'Invalid Id']);
        }

        $result = Page::destroy($id);
        if ($result) {
            $this->existing_image = $this->model->image;

            if (!empty($this->existing_image)) {
                $this->__unlinkFile($this->imagePath, $this->existing_image);
            }
        }

        AppHelper::flash('success', 'Record has deleted successfully');
        return redirect()->route($this->scope . '.index');
    }

    public function orderingPage()
    {
        $page = Page::where('status', 1)->orderBy('rank', 'ASC')->get();;

        return view($this->loadDefaultVars($this->view_path . '.order_page'), compact('page'));
    }

    public function updateOrderPage()
    {
        $menu      = Page::orderBy('rank', 'ASC')->get();
        $itemID    = request('itemID');
        $itemIndex = request('itemIndex');

        foreach ($menu as $item){
            return Page::where('id', '=', $itemID)->update( array( 'rank' => $itemIndex ) );
        }
    }

    public function destroyImg($id) {

        if (!$this->idExist($id)) {
            AppHelper::flash('info', 'Invalid Id');
            return redirect()->route($this->scope . '.index')->withErrors(['message' => 'Invalid Id']);
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
        return redirect()->route('page.edit', ['id' => $id]);
    }

    /**
     * Helper Methods
     */
    public function idExist($id)
    {
        $this->model = Page::find($id);
        return $this->model;
    }

    public function loadAsTitlePageType()
    {

        $response = [];
        $response['error'] = false;
        $response['page_type'] = request('page_type');

        if($response['page_type'] == 'service' ) {

            $response['service'] = OurService::where('status', 1)->pluck('title', 'slug');

            $response['html']    = view($this->view_path.'.partials._service',compact('response'))->render();
        } else {

            $response['html']    = view($this->view_path.'.partials._title',compact('response'))->render();
        }

        return response()->json(json_encode($response));


    }
}
