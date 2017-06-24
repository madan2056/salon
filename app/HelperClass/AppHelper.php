<?php
namespace App\HelperClass;


use App\Model\Page;
use App\Model\SiteConfig;

class AppHelper
{
    protected $site_configs = null;

    // TODO: Load system error Page
    public function systemError()
    {
        dd('system error...');
    }

    /**
     * Generates html according to message_type and stores in
     * session flash storage
     *
     * @param $message_type bootstrap alert message type
     * @param $message html message
     */
    public function flash($message_type, $message)
    {
        $message_type = $this->checkBootstrapAlertClass($message_type);

        $message = "<div class=\"alert alert-" . $message_type . "\">
                        <button data-dismiss=\"alert\" class=\"close\" type=\"button\">
                            <i class=\"icon-remove\"></i>
                        </button>
                        " . $message . "
                        <br>
					</div>";

        request()->session()->flash('message', $message);
    }

    protected function checkBootstrapAlertClass($message_type)
    {
        $classes = ['info', 'success', 'warning', 'danger'];
        if (!in_array($message_type, $classes)) {
            return 'info';
        }

        return $message_type;
    }

    public function getPageDataFromSlug($model, $slug)
    {
        $model = self::getModelPath($model);
        $page = $model::where('slug', $slug)->first();

        return $page;
    }

    /**
     * get the title for page
     * @param $page get the data
     */
    public function getPageTitle($page)
    {
        if (empty($page->title2))
            $title = $page->title1;
        else
            $title = $page->title2;

        return $title;
    }

    /**
     * Get listing data as param model
     * @param $model get the Model
     * @param $pagination_limit get the pagination number
     * @param $id get the listing according to related id.
     */
    public function getListingData($model, $pagination_limit = null, $id = null)
    {
        $model = self::getModelPath($model);
        if ($id === null)
        {
            $data = $model::where('status', 1)->orderBy('rank', 'asc')->paginate($pagination_limit);
        }

        else
        {
            $data = $model::where('status', 1)->where('category_id', $id)->orderBy('rank', 'asc')->paginate($pagination_limit);
        }

        return $data;
    }

    /**
     * Get page type related data
     * @param $page_type page type .
     */
    public function getDataByPage($page_type)
    {
        $pageDetail = Page::where('page_type', $page_type)->where('status',1)->first();

        return $pageDetail;
    }

    /**
     * Generates model path
     * It generate full path to use
     */
    public function getModelPath($model)
    {
        $modelPath = 'App\\Model\\' . $model;
        return $modelPath;
    }

    /** * generate random string for testing in act tab
     *
     * @param int $length
     * @return string
     */
    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function getConfigPath($path)
    {
      return config('broadway.asset_path.admin.'.$path);
    }

    public function getAssetsPathFrontend($path)
    {
        return config('broadway.asset_path.frontend.'.$path);
    }


    /**
     * Search for config value in database
     * if not exists search in config value
     * else returns false
     *
     * @param string $key
     * @return bool
     */
    public function getConfigValue($key = null)
    {
        if (!$key || $key == '')
            return false;

        if (!$this->site_configs)
            $this->setSiteConfigValues();

        if (!is_null($this->site_configs) && array_key_exists($key, $this->site_configs))
            return $this->site_configs[$key];

        if (array_key_exists($key, config('broadway.site_configuration_keys')))
            return config('broadway.site_configuration_keys')[$key];

        self::systemError();
    }

    /**
     * Set site configuration value as array to
     * class property
     */
    private function setSiteConfigValues()
    {
        $site_info = SiteConfig::select('key', 'value')->where('status', 1)->get()->toArray();
        foreach ($site_info as $value) {
            $this->site_configs[$value['key']] = $value['value'];
        }
    }

    public function getFrontPages()
    {
        if (config('broadway.front-pages'))
            return config('broadway.front-pages');

        $this->systemError();
    }

    public function decreaseTextWithCharCheck($text, $start, $length_ascii, $length_unicode = 100, $terminate = false) {
        if ($terminate)
            dd(mb_detect_encoding($text));
        if (mb_detect_encoding($text) !== 'UTF-8')
            $temp = substr(strip_tags($text), $start, $length_ascii);
        else
            $temp = substr(strip_tags($text), $start, $length_unicode);
        $detailArray = explode(' ', $temp);
        array_pop($detailArray);
        $detailFinal = implode($detailArray, ' ');

        if (mb_detect_encoding($text) !== 'UTF-8') {
            if (strlen(strip_tags($text)) > $length_ascii)
                $detailFinal .= '&nbsp;...';
        } else {
            if (strlen(strip_tags($text)) > $length_unicode)
                $detailFinal .= '&nbsp;...';
        }

        return $detailFinal;
    }

}