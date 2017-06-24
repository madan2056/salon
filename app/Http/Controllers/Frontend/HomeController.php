<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Banner;
use App\Model\OurFeature;
use App\Model\OurService;
use App\Model\Page;
use App\Model\SampleWork;
use AppHelper;

class HomeController extends FrontendBaseController
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*  $data = [];
        $data['services']    = OurService::where('status', 1)->orderBy('rank', 'asc')->take(5)->get();
        $data['feature']     = OurFeature::where('status', 1)->orderBy('rank', 'asc')->take(4)->get();
        $data['sample_work'] = SampleWork::where('status', 1)->orderBy('rank', 'asc')->take(8)->get();
        $data['banner']      = Banner::where('status', 1)->orderBy('rank', 'asc')->take(10)->get();*/

      $data     = [];
      $data['services']  = OurService::where('status', 1)->get();
      $data['about_page'] = Page::find(7);
      $data['why_page'] = Page::find(8);
      $data['banner']= Banner::where('status', 1)->orderBy('rank','ASC')->get();

//      $data['gallery']=

     return view(parent::loadDefaultVars('frontend.home.index'), compact('data'));

//        return view(parent::loadDefaultVars('frontend.index', $this->getMetaDataForHomePage()),compact('data'));
    }

  /*  protected function getMetaDataForHomePage()
    {
        $tmp = [];
        $tmp['title'] = AppHelper::getConfigValue('SEO_TITLE');
        $tmp['description'] = AppHelper::getConfigValue('SEO_DESCRIPTION');
        $tmp['image'] = AppHelper::getConfigValue('SITE_IMAGE') !== ''?asset(AppHelper::getConfigValue('SITE_IMAGE')):'';

        return parent::getMetaData($tmp);
    }*/

}
