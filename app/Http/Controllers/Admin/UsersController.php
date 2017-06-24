<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\User\AddFormValidation;
use App\Http\Requests\Admin\User\UpdateFormValidation;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use AppHelper;

class UsersController extends AdminBaseController
{
    /**
     * @var view location path
     */
    protected $view_path = 'admin.user';
    protected $scope = 'users';
    protected $title = 'Users';

    /**
     * @var string final image
     */
    protected $imagePath = '';

    protected  $model;

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

    protected function getData()
    {
        $data = User::orderBy('id', 'asc')->get();
        return $data;
    }

    public function store(AddFormValidation $request)
    {
        User::create([
            'name'     => $request->get('name'),
            'email'    => $request->get('email'),
            'image'    => $this->__checkFileAndUpload($request),
            'status'   => $request->get('status'),
            'password' => $request->get('password'),
        ]);

        AppHelper::flash('success', 'Record has added successfully');
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
            return redirect()->route($this->view_path)->withErrors(['message' => 'Invalid Request']);
        }

        $this->existing_image = $this->model->image;
        $this->model->update([
            'name'     => $request->get('name'),
            'email'    => $request->get('email'),
            'image'    => $this->__checkFileAndUpload($request),
            'status'   => $request->get('status'),
        ]);

            if($request->get('password'))
                $this->model->password = $request->get('password');

         $this->model->save();


        AppHelper::flash('success', 'Record has updated successfully');
        return redirect()->route('users.index')->withErrors(['message' => 'Record deleted successfully.']);

    }

    /**
     * Helper Methods
     */
    public function idExist($id)
    {
        $this->model = User::find($id);
        return $this->model;
    }
}
