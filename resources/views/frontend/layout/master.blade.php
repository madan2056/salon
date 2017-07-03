@include('frontend.includes.head')

<body>
<div id="header">
  @include('frontend.includes.header')
</div>

@yield('content')

<!-- JS File -->
<script src="{{asset(AppHelper::getAssetsPathFrontend('js').'jquery-3.2.0.min.js')}}"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

<script src="{{asset(AppHelper::getAssetsPathFrontend('js').'bootstrap.js')}}"></script>
<script src="{{asset(AppHelper::getAssetsPathFrontend('js').'slider.js')}}"></script>
<!-- Fancybox -->
<script src="{{asset(AppHelper::getAssetsPathFrontend('js').'jquery.fancybox.pack.js')}}"></script>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect	: 'none',
            closeEffect	: 'none'
        });
    });
</script>
@stack('scripts')
@include('frontend.includes.footer')
