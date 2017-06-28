<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Model\Album;
use App\Model\Gallery;
use App\Model\OurFeature;
use App\Model\Feature;
use App\Model\FeaturePricing;
use AppHelper;
use App\Http\Requests\ContactUsValidateRequest;

class FeatureController extends FrontendBaseController
{

    public function detail($slug) {

        $data = [];
        $data['feature-detail']  = AppHelper::getPageDataFromSlug('OurFeature', $slug);

        return view(parent::loadDefaultVars('frontend.feature.detail', ['page_title' => $data['feature-detail']->title]), compact('data'));

    }
  /*

    protected function getFeatureDetailMetaData(array $data)
    {
        $tmp = [];
        $tmp['title'] = $data['row']->title;
        $tmp['description'] = AppHelper::decreaseTextWithCharCheck($data['row']->description, 0, 300);
        $tmp['image'] = asset('images/our_service/'. $data['row']->image);

        return parent::getMetaData($tmp);
    }

    protected function getFeatureListMetaData(array $data) {

        $tmp = [];
        $tmp['title'] = $data['row']->title1;
        $tmp['description'] = AppHelper::decreaseTextWithCharCheck($data['row']->description, 0, 300);
        $tmp['image'] = asset('images/page/'. $data['row']->image);

        return parent::getMetaData($tmp);
    }*/


}
