<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
    <div class="rightSide">
        <div class="block">
            <h2>Services We Provide</h2>
            <ul>
                @foreach($footer_service as $footer)
                    <li><a href="{{ route('service-detail', $footer->slug ) }}">{{ $footer->title }}</a></li>
                @endforeach
            </ul>
        </div>
        @if( isset($sidebar_video) )
            <div class="block">
                <h2>Happy Customers</h2>
                <div class="videoBox">
                    <iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/{{ $sidebar_video->video_url }}"
                            frameborder="0" allowfullscreen>
                    </iframe>
                </div>
                <p><a href="{{ route('happy_customers') }}"><i class="fa fa-list"></i> View All</a></p>
            </div>
        @endif

        <div class="block">
            <div class="pic"><a href="{{ route('testimonials') }}"><img src="{{ asset('images/testimonials.jpg') }}"
                                                                 alt="Testimonials" /></a></div>
        </div>
    </div>
</div>