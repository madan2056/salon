<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Model\Album;
use App\Model\Gallery;
use AppHelper;
use App\Http\Requests\ContactUsValidateRequest;

class PageController extends FrontendBaseController
{
    public function detail($slug)
    {
        $data = [];
        $data['row'] = AppHelper::getPageDataFromSlug('Page', $slug);


        return view(parent::loadDefaultVars('frontend.page.detail', $this->getDetailPageMetaData($data)), compact('data'));
    }

    protected function getDetailPageMetaData(array $data)
    {
        $tmp = [];
        $tmp['title'] = $data['row']->title1;
        $tmp['description'] = AppHelper::decreaseTextWithCharCheck($data['row']->description, 0, 300);
        $tmp['image'] = asset('images/page/'. $data['row']->image);

        return parent::getMetaData($tmp);
    }

}
