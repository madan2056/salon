<div class="headerTopBar">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 clearfix">
                <ul class="contactlTop clearfix">
                    <li>Call Us: {{ $config->phone }}</li>
                    @if(isset($config->email))
                    <li>Email Us: {{ $config->email }}</li>
                    @endif
                    @if(isset($config->address))
                        <li>Locate Us: {{ $config->address }}</li>
                    @endif
                </ul>
                <ul class="socialTop clearfix">
                    @if ($config->facebook_link)
                        <li class="fb"><a href="{{ $config->facebook_link }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    @endif
                    @if (isset($config->ye_link))
                        <li class="ye"><a href="{{ $config->ye_link }}" target="_blank"><i class="fa fa fa-yelp"></i></a></li>
                    @endif
                    @if ($config->google_plus)
                        <li class="gp"><a href="{{ $config->google_plus }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    @endif
                    @if ($config->instagram)
                        <li class="in"><a href="{{ $config->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    @endif
                    @if ($config->youtube)
                        <li class="yt"><a href="{{ $config->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="midHeader">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="logo animated fadeIn">
                    @if(isset($config->logo))
                        <a href="{{ route('home') }}"><img src="{{ asset('images/profile_setting/'.$config->logo) }}" alt="Salon &amp; Day Spa" /></a>
                    @endif
                </div>
                <div class="menuTop">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <a class="navbar-brand">Navigation <i class="fa fa-angle-double-right"></i></a> </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">

                                @foreach($menus as $key => $menu)


                                    @if($menu->pages->count() > 0)

                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                               aria-haspopup="true" aria-expanded="false">{{ $menu->title1 }}
                                                <span class="caret"></span></a>

                                            <ul class="dropdown-menu">

                                                @foreach($menu->pages as $sub_menu)

                                                <li>
                                                    @if($sub_menu->page_type == 'page')

                                                        <a href="{{ route('page', $sub_menu->slug) }}">{{ $sub_menu->title1 }}</a>

                                                    @elseif($sub_menu->page_type == 'service')

                                                        <a href="{{ route('service-detail', $sub_menu->slug) }}">{{ ucfirst($sub_menu->title1) }}</a>

                                                    @else

                                                        <a href="{{ route($sub_menu->page_type) }}">{{ $sub_menu->title1 }}</a>
                                                    @endif

                                                </li>

                                                @endforeach
                                            </ul>
                                        </li>

                                     @else
                                        <li>

                                            @if($menu->page_type == 'page')
                                                <a href="{{ route('page', $menu->slug) }}">{{ $menu->title1 }}</a>

                                            @elseif($menu->page_type == 'service')
                                                @php
                                                   $our_service = \App\Model\OurService::where('slug', $menu->title1)->first();
                                                @endphp

                                                <a href="{{ route('service-detail', $menu->slug) }}">{{ ucfirst($our_service->title) }}</a>

                                            @else

                                            <a href="{{ route($menu->page_type) }}">{{ $menu->title1 }}</a>

                                            @endif

                                        </li>
                                    @endif

                                @endforeach
                            </ul>
                        </div>
                        <!--/.nav-collapse --> <!--/.container-fluid -->
                    </nav>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
