<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content=" " />
    <meta name="keywords" content=" " />
    <!-- Meta Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link href="favicon.ico" rel="shortcut icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i|Roboto+Slab:400,700" rel="stylesheet">
    <!-- JS File -->
    <script src="{{asset(AppHelper::getAssetsPathFrontend('js').'jquery-3.2.0.min.js')}}"></script>
    <!-- Bootstrap File -->
    <script src="{{asset(AppHelper::getAssetsPathFrontend('js').'bootstrap.js')}}"></script>
    <link href="{{asset(AppHelper::getAssetsPathFrontend('css').'bootstrap.min.css')}}" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="{{asset(AppHelper::getAssetsPathFrontend('css').'font-awesome.min.css')}}" rel="stylesheet" />
    <!-- Animation CSS File -->
    <link href="{{asset(AppHelper::getAssetsPathFrontend('css').'animate.css')}}" rel="stylesheet" />
    <!-- CSS File -->
    <link href="{{asset(AppHelper::getAssetsPathFrontend('css').'style.css')}}" rel="stylesheet" />

    <!-- Full Slider -->
    <link href="{{asset(AppHelper::getAssetsPathFrontend('css').'slider.css')}}" rel="stylesheet" />
    <script src="{{asset(AppHelper::getAssetsPathFrontend('js').'slider.js')}}"></script>
    <link href="{{asset(AppHelper::getAssetsPathFrontend('css').'preset1.css')}}" rel="stylesheet" />
    <!-- Fancybox -->
    <script src="{{asset(AppHelper::getAssetsPathFrontend('js').'jquery.fancybox.pack.js')}}"></script>
    <link href="{{asset(AppHelper::getAssetsPathFrontend('css').'jquery.fancybox.css')}}" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect	: 'none',
                closeEffect	: 'none'
            });
        });
    </script>
</head>