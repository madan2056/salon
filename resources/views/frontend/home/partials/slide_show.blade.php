<div class="slideshow">
    <header id="home">
        <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                @if(isset($data['banner']))
                    @foreach($data['banner'] as $banner)
                        <div class="item @if($loop->first) active @endif"
                             style="background-image: url({{asset('images/banner/'.$banner->image)}});">
                            <div class="caption">
                                <h1 class="animated fadeInLeftBig">{{ $banner->title }}</h1>
                                <p class="animated fadeInRightBig">{{ $banner->title2 }}</p>
                                <p class="animated fadeInDown"><a href="{{ $banner->link?$banner->link:'#' }}">{{ $banner->link_button_text }}</a></p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a> </div>
        <!--/#home-slider-->
    </header>
</div>
