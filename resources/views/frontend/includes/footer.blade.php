<div id="footer">
    <div class="footerTop">
        <div class="footerInnerTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <h2>Services</h2>
                        <div class="row">
                            <ul class="svcBot clearfix">
                                @foreach($footer_service as $footer)
                                    <li><a href="{{ route('service-detail', $footer->slug ) }}">{{ $footer->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <h2>Contact Us</h2>
                        <ul class="contactBottom">
                            @if(isset($config->address))
                                <li>{{ $config->address }}</li>
                            @endif
                            <li>{{ $config->phone }}</li>
                            @if(isset($config->email))
                                <li>{{ $config->email }}</li>
                            @endif
                            <li>www.salonanspa.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <h2>Opening Hours</h2>
                        <ul class="openingHrs">
                            <li>Sunday: 10:00 AM to 7:00 PM</li>
                            <li>Monday: 10:00 AM to 7:00 PM</li>
                            <li>Tuesday: 10:00 AM to 7:00 PM</li>
                            <li>Wednesday: 10:00 AM to 7:00 PM</li>
                            <li>Thursday: 10:00 AM to 7:00 PM</li>
                            <li>Friday: 10:00 AM to 8:00 PM</li>
                            <li>Saturday: 10:00 AM to 8:00 PM</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerInnerBottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        @if(isset($footer_about_page->short_description))
                        <h2>About Us</h2>
                        <p>{!! $footer_about_page->short_description !!}
                            <a href="{{ route('page', $footer_about_page->slug) }}">Read More</a></p>
                        @endif
                        <ul>
                            @if ($config->facebook_link)
                                <li class="fb"><a href="{{ $config->facebook_link }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
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
    </div>
    <div class="footerBottom">Copyright &copy; <a href="/">Salon and Day Spa</a> - 2016 : <?php echo Date('Y'); ?> | All Rights Reserved. Website By: <a href="https://broadwayinfosys.com/" target="_blank">Broadway Infosys</a></div>

</div>
</body>
</html>