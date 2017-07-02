<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Salon & Day Spa | CMS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href={{ asset(AppHelper::getConfigPath('css').'bootstrap.min.css') }}>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset(AppHelper::getConfigPath('css').'AdminLTE.min.css') }}">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset(AppHelper::getConfigPath('css').'_all-skins.min.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset(AppHelper::getConfigPath('css').'morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset(AppHelper::getConfigPath('css').'jquery-jvectormap-1.2.2.css') }}">

    <link rel="stylesheet" href="{{ asset(AppHelper::getConfigPath('css').'bootstrap3-wysihtml5.min.css') }}">
    <link rel="stylesheet" href="{{ asset(AppHelper::getConfigPath('css').'jquery.dataTables.min.css') }}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


@yield('extra-css')
    <style>
        .content-wrapper, .right-side {
            min-height: 537px !important;

        }
    </style>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

@include('admin.partials.header')

<!-- =============================================== -->

    <div class="clearfix">
        <!-- Left side column. contains the sidebar -->
    @include('admin.partials.sidebar')

    <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->
    </div>

    <footer class="main-footer">
        <strong>Copyright &copy; {{ date('Y') }} <a href="{{ route('home') }}" target="_blank">Salon & Day Spa</a>.</strong>
        All
        rights reserved.
    </footer>
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<script src="{{ asset(AppHelper::getConfigPath('js').'jquery-2.2.3.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script src="{{ asset(AppHelper::getConfigPath('js').'jquery.dataTables.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- AdminLTE App -->
{{--<script src="{{ asset(AppHelper::getConfigPath('js').'app.min.js') }}"></script>--}}

<!-- Bootstrap 3.3.6 -->
<script src="{{ asset(AppHelper::getConfigPath('js').'bootbox.min.js') }}"></script>
<script src="{{ asset(AppHelper::getConfigPath('js').'bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset(AppHelper::getConfigPath('js').'jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset(AppHelper::getConfigPath('js').'fastclick.js') }}"></script>


<!-- AdminLTE for demo purposes -->
<script src="{{ asset(AppHelper::getConfigPath('js').'demo.js') }}"></script>


@yield('extra-js')
<script>

    $(document).ready(function () {

        $(".bootbox-confirm").on('click', function () {
            var action = false;
            var id = $(this).attr('data-attr');
            bootbox.confirm("Are you sure?", function (result) {
                if (result) {
                    $('#delete-current-list-'+id).submit();
                }
            });
            return action;
        });

        $(".delete-image-confirm").on('click', function () {
            var node = $(this);
            var action = false;
            bootbox.confirm("Are You Sure ?? You want to delete this image !!", function (result) {
                if (result) {
                    location.href = node.attr('href');
                }
            });
            return action;
        });

    });
</script>


</body>
</html>
