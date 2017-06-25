<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\AppBaseController;
use App\Model\Category;
use App\Model\OurService;
use App\Model\ProfileSetting;
use App\Model\SiteConfig;

use App\Model\Page;
use App\Http\Controllers\Controller;
use DaveJamesMiller\Breadcrumbs\Exception;
use View;
use DB;
use AppHelper;


class FrontendBaseController extends Controller
{
    protected $site_info = [];
    protected $menu;
    protected $service;
    protected $category;

    public function __construct()
    {

        $this->menu     = Page::select('id', 'slug','title1','page_type')
            ->where('show_in_menu', 1)
            ->where('status', 1)
            ->orderBy('rank', 'ASC')
            ->get();

       /*
       $this->service  = OurService::select('slug','title')->where('status', 1)->orderBy('id', 'DESC')->take(5)->get();
       $this->category = Category::select('slug','title')->where('status', 1)->orderBy('id', 'DESC')->take(5)->get();

        $site_infos = SiteConfig::get(['key', 'value'])->toArray();
        foreach ($site_infos as $value) {
            $this->site_info[$value['key']] = $value['value'];
        }*/
    }

    protected function loadDefaultVars($view_path, $data = [])
    {
        try{
            View::composer($view_path, function ($view) use ($view_path, $data)
            {
                $view->with('menus',      $this->menu);
                $view->with('config',     ProfileSetting::first());
                $view->with('footer_service', OurService::where('status', 1)->get());

               /*
                $view->with('services',   $this->service);
                $view->with('categories', $this->category);
                $view->with('site_info',  $this->site_info);



                list($title, $description, $keywords) = [
                    $this->getPageTitle($data),
                    $this->getPageDescription($data),
                    $this->getPageKeywords($data),
                ];

                $view->with('title', $title);
                $view->with('description', $description);
                $view->with('keywords', $keywords);

                // Social sharing data
                list($fb, $twitter, $google) = [
                    $this->getSocialData($data, 'fb'),
                    $this->getSocialData($data, 'twitter'),
                    $this->getSocialData($data, 'google'),
                ];

                $view->with('fb', $fb);
                $view->with('twitter', $twitter);
                $view->with('google', $google);*/
            });

            return $view_path;
        }
        catch(Exception $e)
        {
            dd($e);
        }

    }


    protected function getMetaData($data)
    {
        return [
            'page_title' => $data['title'],
            'fb' => [
                'og:title' => $data['title'],
                'og:url' => request()->fullUrl(),
                'og:image' => $data['image'],
                'og:description' => $data['description'],
            ],
            'twitter' => [
                'twitter:card' => $data['title'],
                'twitter:title' => $data['title'],
                'twitter:description' => $data['description'],
                'twitter:image:src' => $data['image'],
            ],
            'google' => [
                'name' => $data['title'],
                'description' => $data['description'],
                'image' => $data['image'],
            ],
        ];
    }

/*
    protected function getPageTitle($params)
    {
        if (request()->is('error/*')) {
            return 'Error';
        }

        if (array_key_exists('page_title', $params))
            return $params['page_title'].AppHelper::getConfigValue('SEO_TITLE_APPEND');
        else
            foreach (AppHelper::getFrontPages() as $key => $page) {
                if ($key == $this->page) {

                    $default_title = AppHelper::getConfigValue($page['config_key']);
                    return $default_title . AppHelper::getConfigValue('SEO_TITLE_APPEND');

                }
            }

        return AppHelper::getConfigValue('SEO_TITLE') . AppHelper::getConfigValue('SEO_TITLE_APPEND');
    }*/

   /* protected function getPageDescription()
    {
        return AppHelper::getConfigValue('SEO_DESCRIPTION');
    }

    protected function getPageKeywords()
    {
        return AppHelper::getConfigValue('SEO_KEYWORDS');
    }*/

   /* protected function getSocialData($params, $sm_type)
    {
        switch ($sm_type) {

            case 'fb':
                return $this->getFbMeta($params);
                break;
            case 'twitter':
                return $this->getTwitterMeta($params);
                break;
            case 'google':
                return $this->getGoogleMeta($params);
                break;
        }

    }*/

    /**
     * Returns fb meta data
     *
     * @param $params
     * @return array
     *
     * REF: https://moz.com/blog/meta-data-templates-123
     */
   /* protected function getFbMeta($params)
    {
        $data= [];
        $data['property'] = [
            'og:title', 'og:url', 'og:image', 'og:description',
            'og:site_name', 'fb:app_id'
        ];
        $data['fb'] = array_fill_keys($data['property'], '');

        foreach ($data['fb'] as $key => $param) {

            switch ($key) {

                case 'og:site_name':
                    $data['fb'][$key] = AppHelper::getConfigValue('COMPANY_NAME');
                    break;
                case 'fb:app_id':
                    $data['fb'][$key] = AppHelper::getConfigValue('FB_APP_ID');
                    break;
                default:
                    if (array_key_exists('fb', $params)) {
                        $data['fb'][$key] = isset($params['fb'][$key])?$params['fb'][$key]:'';
                    }
            }

        }

        return $data['fb'];
    }*/

   /* protected function getTwitterMeta($params)
    {
        $data= [];
        $data['name'] = [
            'twitter:card', 'twitter:title', 'twitter:description', 'twitter:image:src',
            'twitter:site', 'twitter:creator'
        ];
        $data['twitter'] = array_fill_keys($data['name'], '');

        foreach ($data['twitter'] as $key => $param) {

            switch ($key) {

                case 'twitter:site':
                    $data['twitter'][$key] = AppHelper::getConfigValue('twitter:site');
                    break;
                case 'twitter:creator':
                    $data['twitter'][$key] = AppHelper::getConfigValue('twitter:creator');
                    break;
                default:
                    if (array_key_exists('twitter', $params)) {
                        $data['twitter'][$key] = isset($params['twitter'][$key])?$params['twitter'][$key]:'';
                    }
            }

        }

        return $data['twitter'];
    }*/

   /* protected function getGoogleMeta($params)
    {
        $data= [];
        $data['itemprop'] = [
            'name', 'description', 'image',
        ];
        $data['google'] = array_fill_keys($data['itemprop'], '');

        foreach ($data['google'] as $key => $param) {

            switch ($key) {

                default:
                    if (array_key_exists('google', $params)) {
                        $data['google'][$key] = isset($params['google'][$key])?$params['google'][$key]:'';
                    }
            }

        }

        return $data['google'];
    }*/

}