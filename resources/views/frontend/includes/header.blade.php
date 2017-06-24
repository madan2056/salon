<div class="headerTopBar">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 clearfix">
                <ul class="contactlTop clearfix">
                    <li>Call Us: 202-374-8366</li>
                    @if(isset($config->email))
                    <li>Email Us: {{ $config->email }}</li>
                    @endif
                    @if(isset($config->address))
                        <li>Locate Us: {{ $config->address }}</li>
                    @endif
                </ul>
                <ul class="socialTop clearfix">
                    <li class="fb"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="ye"><a href="https://www.yelp.com/biz/salon-and-day-spa-manassas" target="_blank"><i class="fa fa-yelp"></i></a></li>
                    <li class="gp"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li class="in"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li class="yt"><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
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
                                                    @else

                                                        <a href="#">{{ $sub_menu->title1 }}</a>
                                                    @endif

                                                </li>

                                                @endforeach
                                            </ul>
                                        </li>
                                     @else
                                        <li>

                                            @if($menu->page_type == 'page')

                                                <a href="{{ route('page', $menu->slug) }}">{{ $menu->title1 }}</a>

                                            @else

                                                <a href="/">{{ $menu->title1 }}</a>
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
