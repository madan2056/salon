<?php

namespace App\Http\Controllers\Frontend;

use App\Model\CustomerTestimonials;
use AppHelper;

class HappyCustomerTestimonialsController extends FrontendBaseController
{
    public function happyCustomer()
    {
        $data             = [];
        $data['happy_customer'] =$this->getTestimonialsOrCustomers('happy_customers');
        return view(parent::loadDefaultVars('frontend.customers.happy_customers'), compact('data'));
    }

    public function testimonials()
    {
        $data             = [];
        $data['testimonials'] =$this->getTestimonialsOrCustomers('testimonials');
        return view(parent::loadDefaultVars('frontend.customers.testimonials'), compact('data'));
    }

//    public function category($slug)
//    {
//        $data             = [];
//        $data['category'] = AppHelper::getPageDataFromSlug('Category', $slug);
//        $data['products'] = AppHelper::getListingData('Product', 6, $data['category']->id);
//
//        return view(parent::loadDefaultVars('frontend.product.category', $this->getCategoryListMetaData($data)), compact('data'));
//    }
//
//    public function productDetail($slug)
//    {
//        $data             = [];
//        $data['product']  = AppHelper::getPageDataFromSlug('Product', $slug);
//
//        return view(parent::loadDefaultVars('frontend.product.detail', $this->getProductDetailMetaData($data)), compact('data'));
//    }
//
//    protected function getProductListMetaData(array $data)
//    {
//        $tmp = [];
//        $tmp['title'] = $data['page']->title1;
//        $tmp['description'] = AppHelper::decreaseTextWithCharCheck($data['page']->description, 0, 300);
//        $tmp['image'] = asset('images/page/'. $data['page']->image);
//
//        return parent::getMetaData($tmp);
//    }
//
//    protected function getCategoryListMetaData(array $data)
//    {
//        $tmp = [];
//        $tmp['title'] = $data['category']->title;
//        $tmp['description'] = AppHelper::decreaseTextWithCharCheck($data['category']->description, 0, 300);
//        $tmp['image'] = asset('images/category/'. $data['category']->image);
//
//        return parent::getMetaData($tmp);
//    }
//
//    protected function getProductDetailMetaData(array $data)
//    {
//        $tmp = [];
//        $tmp['title'] = $data['product']->title;
//        $tmp['description'] = AppHelper::decreaseTextWithCharCheck($data['product']->description, 0, 300);
//        $tmp['image'] = asset('images/product/'. $data['product']->image);
//
//        return parent::getMetaData($tmp);
//    }

    public function getTestimonialsOrCustomers($type)
    {
        return $data = CustomerTestimonials::where('type',$type)->where('status',1)->orderBy('rank','ASC')->get();
    }

}
