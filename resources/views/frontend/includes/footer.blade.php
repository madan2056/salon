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
                            <li>202-374-8366</li>
                            @if(isset($config->email))
                                <li>{{ $config->email }}</li>
                            @endif
                            <li>www.salonanspa.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <h2>Opening Hours</h2>
                        <ul class="openingHrs">
                            <li>Monday: 8:00 AM to 18:00 PM</li>
                            <li>Tuesday: 8:00 AM to 18:00 PM</li>
                            <li>Wednesday: 8:00 AM to 18:00 PM</li>
                            <li>Thursday: 8:00 AM to 18:00 PM</li>
                            <li>Friday: 8:00 AM to 18:00 PM</li>
                            <li>Saturday and Sunday: Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerInnerBottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>About Us</h2>
                        <p>Salon and Day Spa justifies the essence of its name. Conveniently located in the Portsmouth Rd, in Manassas, Virginia, Salon and Day Spa has been fulfilling its purpose of providing best beauty service at best price. The customers’ satisfaction has always been our utmost priority and we are proud to state that we have always maintained our motto of service since establishment. Though established and operated for two years, Salon and Day Spa has the expertise of the certified beauty experts with more than 10 years’ experience in related field. <a href="aboutus.php">Read More</a></p>
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.yelp.com/biz/salon-and-day-spa-manassas" target="_blank"><i class="fa fa-yelp"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
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