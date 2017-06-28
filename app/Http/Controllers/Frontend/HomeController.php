<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Banner;
use App\Model\CustomerTestimonials;
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

      $data     = [];
      $data['services']  = OurService::where('status', 1)->limit(6)->get();
      $data['features']  = OurFeature::where('status', 1)->get();
      $data['about_page'] = Page::where('slug', 'about-us')->first();
      $data['testimonial'] = CustomerTestimonials::where('type', 'testimonials')->orderBy('id', 'DESC')->take(1)->first();
      $data['why_page'] = Page::where('slug', 'what-is-and-why-cosmetic-tattoo')->first();
      $data['banner']= Banner::where('status', 1)->orderBy('rank','ASC')->get();
      $data['gallery'] = SampleWork::select('title', 'image')
          ->where('status', 1)
          ->orderBy('rank')
          ->limit(6)
          ->get();
      $this->active_page = 'home';

     return view(parent::loadDefaultVars('frontend.home.index'), compact('data'));
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
