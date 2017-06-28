<?php
/**
 * Stores our application based configurations
 */
return [
    /*
   |--------------------------------------------------------------------------
   | Routes Language Lines
   |--------------------------------------------------------------------------
   |
   | Here are the names for the routes
   |
   */
    'route' => [
        "admin-panel" => 'admin-panel',
        "dashboard" => [
            "list" => "dashboard",
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Asset Paths
    |--------------------------------------------------------------------------
    | All the assets path are to be used from here
    |
    */
    'asset_path' => [
        'admin' => [
            'css' => 'assets/backend/css/',
            'js' => 'assets/backend/js/',
            'iCheck' => 'assets/backend/iCheck/',
        ],
        'frontend' => [
            'images' => 'assets/themes/default/frontend/image/',
            'css' => 'assets/frontend/css/',
            'fonts' => 'assets/frontend/fonts/',
            'js' => 'assets/frontend/js/',
        ],
        'bower' => 'bower_components/',
        'theme' => 'assets/themes/default/',
        'build' => 'build/'
    ],

    /*
   |--------------------------------------------------------------------------
   | Image Dimention
   |--------------------------------------------------------------------------
   | All the image dimensions will be here
   |
   */
    'image-dimensions'   => [

        'our_service'    => [
            [
                'width'  => 204,
                'height' => 272
            ],
            [
                'width'  => 720,
                'height' => 480
            ]
        ],

        'product'        => [
            [
                'width'  => 360,
                'height' => 240
            ],
            [
                'width'  => 720,
                'height' => 480
            ]
        ],

        'sample_work'    => [
                'width'  => 263,
                'height' => 175
        ],

        'category'       => [
            'width'      => 360,
            'height'     => 240
        ],

        'banner'       => [
            'width'      => 1200,
            'height'     => 600
        ],
    ],

  /*
  |--------------------------------------------------------------------------
  | Contact sending email form path
  |--------------------------------------------------------------------------
  |
  | Here are the names for the path to send a contact
  | form through email
  |
  */
    'mail_path' => [
        "request_quotation_path" => 'email.request_quotation',
        "inquiry_form_path"      => 'email.inquiry_form',
    ],


    // prepare page meta data based on these configs
    'front-pages' => [
        'home' => [
            'config_key' => 'SEO_TITLE'
        ],
        'discussion' => [
            'config_key' => 'DISCUSSION_PAGE_TITLE'
        ],

        'error-page' => [
            'config_key' => 'Error'
        ],
    ],


    'site_configuration_keys' => [
        'COMPANY_NAME' => 'Salonanspa.com',
        'FB_LINK' => '',
        'FB_APP_ID' => '', // app id to track page visits by facebook insight

        'TWITTER_LINK' => '',
        'twitter:site' => '', // to publish on
        'twitter:creator' => '', // published by

        'LINKED_IN_LINK' => '',
        'GOOGLE_PLUS_LINK' => '',

        'SEO_TITLE' => 'Salon And Day Spa',
        'SEO_TITLE_APPEND' => ' :: salonanspa.com',
        'SEO_DESCRIPTION' => '',
        'SEO_KEYWORDS' => '',
        'SITE_IMAGE' => 'images/profile_setting/Creative-Logo.png',

        /* Default titles for pages */
        'DISCUSSION_PAGE_TITLE' => 'Discussion page',
        'NEWS_PAGE_TITLE' => 'News ',
        'EVENT_PAGE_TITLE' => 'Event ',
        'JOB_PAGE_TITLE' => 'Job ',
        'INSTITUTE_PAGE_TITLE' => 'Institute ',
        'LOCAL_BUSINESS_PAGE_TITLE' => 'Local business ',
        'CHITCHAT_PAGE_TITLE' => 'Chitchat ',
        'ABOUT_US_PAGE_TITLE' => 'About us ',
        'CONTACT_US_PAGE_TITLE' => 'Contact us ',
    ],

    'meta' => [

        'seo_title' => 'creativelinknepal.com',
        'seo_keywords' => 'creativelinknepal.com',
        'seo_description' => 'creativelinknepal.com',
        'twitter:card' => '123456789',
        'twitter:site' => '',
        'twitter:title' => 'creativelinknepal.com',
        'twitter:description' => 'creativelinknepal.com',
        'twitter:url' => 'creativelinknepal.com',
        'twitter:image' => 'http://creativelinknepal.com/assets/images/chit-chat-logo.png',
        'og:title' => 'creativelinknepal.com',
        'og:description' => 'creativelinknepal.com',
        'og:url' => 'creativelinknepal.com',
        'og:image' => 'http://creativelinknepal.com/assets/images/chit-chat-logo.png',

    ],

];