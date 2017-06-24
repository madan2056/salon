<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Model\Album;
use App\Model\Gallery;
use App\Model\OurService;
use App\Model\ServiceFeature;
use App\Model\ServicePricing;
use AppHelper;
use App\Http\Requests\ContactUsValidateRequest;
use Symfony\Component\EventDispatcher\Tests\Service;

class ServiceController extends FrontendBaseController
{
    public function index() {
       /* $data['row']         = AppHelper::getDataByPage('our_service');*/
      /*  $data['our_service'] = AppHelper::getListingData('OurService', 6);*/

        return view(parent::loadDefaultVars('frontend.service.index'), compact('data'));
        //return view(parent::loadDefaultVars('frontend.service.index', $this->getServiceListMetaData($data)), compact('data'));
    }

    public function detail($slug) {

        $data = [];
        $data['service-detail'] = AppHelper::getPageDataFromSlug('OurService', $slug);
        $data['service-feature'] = ServiceFeature::where('service_id', $data['service-detail']->id)->orderBy('rank', 'ASC')->get();
        $data['service-pricing'] = ServicePricing::where('service_id', $data['service-detail']->id)->orderBy('rank', 'ASC')->get();
        $data['service-related'] = OurService::where('status', 1)->where('id', '!=' ,$data['service-detail']->id)->inRandomOrder()->get();

        return view(parent::loadDefaultVars('frontend.services.detail'), compact('data'));

    }

    public function ourService()
    {
        die;
        $data['row']         = AppHelper::getDataByPage('our_service');
        $data['our_service'] = AppHelper::getListingData('OurService', 6);

        return view(parent::loadDefaultVars('frontend.service.index', $this->getServiceListMetaData($data)), compact('data'));
    }

  /*

    protected function getServiceDetailMetaData(array $data)
    {
        $tmp = [];
        $tmp['title'] = $data['row']->title;
        $tmp['description'] = AppHelper::decreaseTextWithCharCheck($data['row']->description, 0, 300);
        $tmp['image'] = asset('images/our_service/'. $data['row']->image);

        return parent::getMetaData($tmp);
    }

    protected function getServiceListMetaData(array $data) {

        $tmp = [];
        $tmp['title'] = $data['row']->title1;
        $tmp['description'] = AppHelper::decreaseTextWithCharCheck($data['row']->description, 0, 300);
        $tmp['image'] = asset('images/page/'. $data['row']->image);

        return parent::getMetaData($tmp);
    }*/


}
