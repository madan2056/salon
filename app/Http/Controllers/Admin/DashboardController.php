<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends AdminBaseController
{
    /**
     * @var view location path
     */
    protected $view_path = 'admin.dashboard';



    public function index()
    {
        return view($this->loadDefaultVars($this->view_path.'.home'));
    }
}
