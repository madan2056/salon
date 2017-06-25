<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('appointment', [ 'as' => 'appointment', 'uses' => 'Frontend\PageController@appointment']);
Route::get('gallery', [ 'as' => 'gallery', 'uses' => 'Frontend\PageController@gallery']);
Route::get('contact-us', [ 'as' => 'contact-us', 'uses' => 'Frontend\PageController@contactUs']);

/*---------------Sagar Routes-----------------*/

$this->get(config('broadway.route.admin-panel'), [ 'as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
$this->post(config('broadway.route.admin-panel'), 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout');

Route::get('/services',        [ 'as' => 'services',         'uses' => 'Frontend\ServiceController@index']);
Route::get('/services/{slug}', [ 'as' => 'service-detail',  'uses' => 'Frontend\ServiceController@detail']);

//Admin Routes
Route::group(['prefix' => 'admin', 'middleware'=> 'auth'], function () {

    //config route
    Route::get('profile_setting/edit',         [ 'as'=>'profile_setting.edit',    'uses' => 'Admin\ProfileSettingController@edit']);
    Route::post('profile_setting/update/{id}', [ 'as'=>'profile_setting.update',  'uses' => 'Admin\ProfileSettingController@store']);

    Route::get('appointment-layout/edit',         [ 'as'=>'appointment.edit',    'uses' => 'Admin\ServiceAppointmentLayoutController@edit']);
    Route::post('appointment-layout/update/{id}', [ 'as'=>'appointment.update',  'uses' => 'Admin\ServiceAppointmentLayoutController@store']);


    //inquiry form route route
    Route::get('inquiry_form',                 [ 'as'=>'inquiry_form.index',      'uses' => 'Admin\InquiryFormController@index']);
    Route::get('inquiry_form/show/{id}',       [ 'as'=>'inquiry_form.show',       'uses' => 'Admin\InquiryFormController@show']);
    Route::get('inquiry_form/destroy/{id}',    [ 'as'=>'inquiry_form.destroy',    'uses' => 'Admin\InquiryFormController@destroy']);

    //inquiry form route route
    Route::get('request_quotation',            [ 'as'=>'request_quotation.index',      'uses' => 'Admin\RequestQuotationController@index']);
    Route::get('request_quotation/show/{id}',  [ 'as'=>'request_quotation.show',       'uses' => 'Admin\RequestQuotationController@show']);
    Route::get('request_quotation/destroy/{id}',[ 'as'=>'request_quotation.destroy',    'uses' => 'Admin\RequestQuotationController@destroy']);

    //dashboard
    Route::get('dashboard',                     [ 'as' => 'admin_home',            'uses' => 'Admin\DashboardController@index']);

    //user route
    Route::resource('users',                 'Admin\UsersController');
    //site config
    Route::resource('site_config',           'Admin\SiteConfigController');

    //page
    Route::get('order-page',                 [ 'as' => 'order_page',             'uses' => 'Admin\PageController@orderingPage']);
    Route::post('page/order',                [ 'as' => 'update_order_page',      'uses' => 'Admin\PageController@updateOrderPage']);
    Route::get('page/deleteimg/{id}',        [ 'as' => 'admin.page.deleteimg',   'uses' => 'Admin\PageController@destroyImg']);

    Route::post('page/load-title-as-page-type',
        [ 'as' => 'admin.page.load-title-as-page-type',   'uses' => 'Admin\PageController@loadAsTitlePageType']);

    Route::resource('page',                  'Admin\PageController');

    //our service
    Route::get('our_service/deleteimg/{id}',     [ 'as' => 'admin.our_service.deleteimg',   'uses' => 'Admin\OurServiceController@destroyImg']);
    Route::resource('our_service',           'Admin\OurServiceController');
    //banner
    Route::get('banner/deleteimg/{id}',     [ 'as' => 'admin.banner.deleteimg',   'uses' => 'Admin\BannerController@destroyImg']);
    Route::resource('banner',                'Admin\BannerController');
    //sample work
    Route::get('sample_work/deleteimg/{id}',     [ 'as' => 'admin.sample_work.deleteimg',   'uses' => 'Admin\SampleWorkController@destroyImg']);
    Route::resource('sample_work',           'Admin\SampleWorkController');

   //our feature
    Route::get('our_feature/deleteimg/{id}', [ 'as' => 'admin.our_feature.deleteimg',   'uses' => 'Admin\OurFeatureController@destroyImg']);
    Route::resource('our_feature',           'Admin\OurFeatureController');

    //Customer and Testimonials
    Route::resource('customer_testimonials', 'Admin\CustomerTestimonialsController');

});

//Frontend Routes
Route::get('/',                         [ 'as' => 'home',                        'uses' => 'Frontend\HomeController@index']);
Route::get('/page/{url}',               [ 'as' => 'page',                        'uses' => 'Frontend\PageController@detail']);

//Service Route
Route::get('/service',                  [ 'as' => 'our_service',                 'uses' => 'Frontend\ServiceController@ourService']);
Route::get('/service/{url}',            [ 'as' => 'service_detail',              'uses' => 'Frontend\ServiceController@serviceDetail']);

//Request Quotation Route
Route::get('/request_quotation',        [ 'as' => 'request_quotation',             'uses' => 'Frontend\FormController@requestQuotation']);
Route::post('/request_quotation/store', [ 'as' => 'request_quotation.store',       'uses' => 'Frontend\FormController@requestQuotationStore']);

//Inquiry Form Route
Route::get('/inquiry-form',             [ 'as' => 'inquiry_form',                  'uses' => 'Frontend\FormController@inquiryForm']);
Route::post('/inquiry-form/store',      [ 'as' => 'inquiry-form.store',            'uses' => 'Frontend\FormController@inquiryFormStore']);

//Happy Customers
Route::get('/happy-customers',          ['as'=>'happy_customers',                   'uses'=>'Frontend\HappyCustomerTestimonialsController@happyCustomer']);

//Testimonails
Route::get('/testimonials',          ['as'=>'testimonials',                         'uses'=>'Frontend\HappyCustomerTestimonialsController@testimonials']);

Route::get('/contact-us',            ['as'=>'contact-us',                           'uses'=>'Frontend\FormController@contactUs']);
Route::post('/contact-us',           ['as'=>'contact-us.post',                      'uses'=>'Frontend\FormController@contactSendEmail']);
