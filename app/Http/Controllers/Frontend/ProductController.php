<?php

namespace App\Http\Controllers\Frontend;

use AppHelper;

class ProductController extends FrontendBaseController
{
    public function ProductList()
    {
        $data             = [];
        $data['category'] = AppHelper::getListingData('Category', 6);
        $data['page']     = AppHelper::getDataByPage('product_list');

        return view(parent::loadDefaultVars('frontend.product.index', $this->getProductListMetaData($data)), compact('data'));
    }

    public function category($slug)
    {
        $data             = [];
        $data['category'] = AppHelper::getPageDataFromSlug('Category', $slug);
        $data['products'] = AppHelper::getListingData('Product', 6, $data['category']->id);

        return view(parent::loadDefaultVars('frontend.product.category', $this->getCategoryListMetaData($data)), compact('data'));
    }

    public function productDetail($slug)
    {
        $data             = [];
        $data['product']  = AppHelper::getPageDataFromSlug('Product', $slug);

        return view(parent::loadDefaultVars('frontend.product.detail', $this->getProductDetailMetaData($data)), compact('data'));
    }

    protected function getProductListMetaData(array $data)
    {
        $tmp = [];
        $tmp['title'] = $data['page']->title1;
        $tmp['description'] = AppHelper::decreaseTextWithCharCheck($data['page']->description, 0, 300);
        $tmp['image'] = asset('images/page/'. $data['page']->image);

        return parent::getMetaData($tmp);
    }

    protected function getCategoryListMetaData(array $data)
    {
        $tmp = [];
        $tmp['title'] = $data['category']->title;
        $tmp['description'] = AppHelper::decreaseTextWithCharCheck($data['category']->description, 0, 300);
        $tmp['image'] = asset('images/category/'. $data['category']->image);

        return parent::getMetaData($tmp);
    }

    protected function getProductDetailMetaData(array $data)
    {
        $tmp = [];
        $tmp['title'] = $data['product']->title;
        $tmp['description'] = AppHelper::decreaseTextWithCharCheck($data['product']->description, 0, 300);
        $tmp['image'] = asset('images/product/'. $data['product']->image);

        return parent::getMetaData($tmp);
    }

}
