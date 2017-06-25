<?php

namespace App\Http\Controllers\Admin;

use App\Model\ProfileSetting;
use Illuminate\Http\Request;

use App\Http\Requests;
use AppHelper;
use App\Http\Controllers\Controller;

class ProfileSettingController extends AdminBaseController
{
    /**
     * @var view location path
     */
    protected $view_path = 'admin.profile_setting';
    protected $scope = 'profile_setting';
    protected $title = 'Profile Setting';
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

    /**
     *  Used while uploading image
     */
    protected $file_input_field = 'logo';

    public function edit()
    {
        $config = ProfileSetting::first();

        return view(parent::loadDefaultVars('admin.profile.edit'), compact('config'));
    }

   public function store(Request $request, $id)
    {
            $ProfileSetting= ProfileSetting:: findOrFail($id);

            $this->existing_image = $ProfileSetting->logo;

            $ProfileSetting->update([
                'company_name'  => $request->get('company_name'),
                'email'         => $request->get('email'),
                'phone'         => $request->get('phone'),
                'address'       => $request->get('address'),
                'logo'          => $this->__checkFileAndUpload($request),
                'facebook_link' => $request->get('facebook_link'),
                'google_plus' => $request->get('google_plus'),
                'instagram' => $request->get('instagram'),
                'youtube' => $request->get('youtube'),
                'google_map' => $request->get('google_map'),
            ]);

            if($ProfileSetting){
                AppHelper::flash('success', 'Record has been updated Successfully');
                return redirect()->route('profile_setting.edit');
            }else{
                AppHelper::flash('danger', 'Record could not be created');
                return redirect()->route('profile_setting.edit');
            }
    }

}
