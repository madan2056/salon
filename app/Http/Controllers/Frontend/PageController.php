<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Model\Album;
use App\Model\Gallery;
use App\Model\SampleWork;
use AppHelper;
use App\Http\Requests\ContactUsValidateRequest;

class PageController extends FrontendBaseController
{

    protected $view_path = 'frontend.page.';

    public function detail($slug)
    {
        $data = [];
        $data['row'] = AppHelper::getPageDataFromSlug('Page', $slug);

        return view(parent::loadDefaultVars($this->view_path.'detail', $this->getDetailPageMetaData($data)), compact('data'));
    }

    protected function getDetailPageMetaData(array $data)
    {
        $tmp = [];
        $tmp['title'] = $data['row']->title1;
        $tmp['description'] = AppHelper::decreaseTextWithCharCheck($data['row']->description, 0, 300);
        $tmp['image'] = asset('images/page/'. $data['row']->image);

        return parent::getMetaData($tmp);
    }

    public function gallery()
    {
        $data['gallery'] = SampleWork::select('title', 'image')
            ->where('status', 1)
            ->orderBy('rank')
            ->paginate(12);
        return view(parent::loadDefaultVars($this->view_path.'gallery'), compact('data'));
    }

}
