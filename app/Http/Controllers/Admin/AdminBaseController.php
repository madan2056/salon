<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;

use File;

use Config;
use Intervention\Image\ImageManager;

class AdminBaseController extends Controller
{
    protected $pagination_limit = 5;
    protected $scope;
    protected $title;
    protected $view_path;

    /**
     * @var string file
     */
    protected $file = '';

    /**
     * @var string image name
     */
    protected $image = '';



    /**
     * @var string image thumb_dimensions
     */
    protected $image_thumb_dimensions = '';


    public function __construct()
    {
        $this->scope = $this->setVars($this->scope);
        $this->title = $this->setVars($this->title);
        $this->view_path = $this->setVars($this->view_path);
    }

    /**
     * Assign variables to passed view and
     * return passed view path
     *
     * @param $view_path View to which value is to be assigned
     * @return View Path
     */
    protected function loadDefaultVars($view_path)
    {
        View::composer($view_path, function ($view) use ($view_path) {
            $view->with('scope', $this->scope);
            $view->with('title', $this->title);
            $view->with('view_path', $this->view_path);
        });

        return $view_path;

    }

    /**
     * @return list of current model
     */
    public function index()
    {
        $row = $this->getData();
        return view($this->loadDefaultVars($this->view_path.'.index'),compact('row'));
    }

    /**
     * @return show views of create
     */
    public function create(){
        return view($this->loadDefaultVars($this->view_path.'.create'));
    }




    /**
     * Desc: Takes request, folder name and returns a complete file name
     * @param $request
     * @param string $folder_name
     * @return bool|string
     */
    protected function __checkFileAndUpload($request, $folder_name = null)
    {
        if (is_null($folder_name)) {
            if (empty($this->scope))
                return '';

            $folder_name = $this->scope;
        }

        $this->file = '';

        if ($request->hasFile($this->file_input_field)) {

            $this->file = $request->file($this->file_input_field);

            // image name
            $this->image = $this->file->getClientOriginalName();

            $final_image = $this->__getRandomNumbers() . $this->image;

            $this->createImageDirectories($folder_name);

            //save file to the folder
            $this->file->move(public_path(). '/' . $this->imagePath, $final_image);


            $this->createThumbnails(public_path(). '/' . $this->imagePath, $final_image);

            // Condition for Removing existing image
            // if request is coming from update Action
            if (!empty($this->existing_image)) {
                $this->__unlinkFile($this->imagePath, $this->existing_image);
                $this->__unlinkFileThumbnails($this->image_thumb_dimensions, $this->imagePath, $this->existing_image);
            }

            // set to empty once image work is finished
            $this->thumbnail_dimensions = '';
            return $final_image;
        }

        // returns old image name if request is form Update Action
        // and new image is not uploaded
        if (!empty($this->existing_image)){
            return $this->existing_image;
        }

        return '';
    }

    /**
     * Desc: Returns a random 4 character string
     * @return string
     */
    protected function __getRandomNumbers()
    {
        return rand(5555, 9876) . '_';
    }

    /**
     * Create a folder inside images dir
     * Create images dir if not exist
     *
     * @param $folder_name
     */
    protected function createImageDirectories($folder_name)
    {
        if (!File::exists(public_path().'/images')) {
            File::makeDirectory(public_path().'/images');
        }

        //check whether folder exist
        if (!File::exists(public_path().'/images/'. $folder_name)) {
            File::makeDirectory(public_path().'/images/'. $folder_name);
        }
    }

    /**
     * Creates Thumbnail images
     *
     * @param $file_dir_path
     * @param $file_name
     */
    protected function createThumbnails($file_dir_path, $file_name)
    {
        if ($this->image_thumb_dimensions == '' || !is_array($this->image_thumb_dimensions))
                return;

        // create an image manager instance with favored driver
        $imageManager = new ImageManager(Config::get('image'));
        $muti_array = $this->is_multi_array($this->image_thumb_dimensions);
        if($muti_array == false) {
            $imageManager->make($file_dir_path.'/'.$file_name)->resize($this->image_thumb_dimensions['width'],$this->image_thumb_dimensions['height'])->save($file_dir_path.'/'.$this->image_thumb_dimensions['width'].'-'.$this->image_thumb_dimensions['height'].'-'.$file_name);
        }else{
            foreach ($this->image_thumb_dimensions as $dimension) {
                $imageManager->make($file_dir_path . '/' . $file_name)->resize($dimension['width'], $dimension['height'])->save($file_dir_path . '/' . $dimension['width'] . '-' . $dimension['height'] . '-' . $file_name);
            }
        }

    }

    /**
     * Desc: Unlink files. Takes file path after public folder and additional file name
     * @param string $file_path
     * @param null $file_name
     * @return bool
     */
    protected function __unlinkFile($file_path = 'images/', $file_name = null)
    {
        if($file_name && File::exists(public_path() . '/' . $file_path .'/'. $file_name)){
            @unlink(public_path() . '/' . $file_path .'/'. $file_name);
            return true;
        }

        return false;
    }

    /**
     * Remove Thumbnail images
     *
     * @param $thumbnail_dimensions
     * @param string $file_path
     * @param null $file_name
     * @return bool
     */
    protected function __unlinkFileThumbnails($thumbnail_dimensions, $file_path = 'images/', $file_name = null)
    {
      if(!empty($thumbnail_dimensions)) {
          if ($file_name) {
              $muti_array = $this->is_multi_array($thumbnail_dimensions);

              if ($muti_array == true) {
                  // If Image have thumbnails remove it
                  foreach ($thumbnail_dimensions as $dimension) {
                      if (File::exists(public_path() . '/' . $file_path . '/' . $dimension['width'] . '-' . $dimension['height'] . '-' . $file_name))
                          @unlink(public_path() . '/' . $file_path . '/' . $dimension['width'] . '-' . $dimension['height'] . '-' . $file_name);
                  }
                  return true;
              } else {
                  @unlink(public_path() . '/' . $file_path . '/' . $thumbnail_dimensions['width'] . '-' . $thumbnail_dimensions['height'] . '-' . $file_name);
              }
          }
      }
          return false;
    }


    protected  function is_multi_array( $arr ) {
        rsort( $arr );
        return isset( $arr[0] ) && is_array( $arr[0] );
    }

    protected function setVars($data){
        isset($data)?$data:null;
        return $data;
    }

    protected function getArrayForDropdown($datas, $option_value, $option_text)
    {
        $tmp = [];
        foreach ($datas as $key => $data) {
            $tmp[$data->$option_value] = $data->$option_text;
        }

        return $tmp;
    }







}
