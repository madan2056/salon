@include('frontend.includes.head')
@stack('css')

<body>
<div id="header">
  @include('frontend.includes.header')
</div>
<div class="slideshow">
    <header id="home">
        <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(slider/1.jpg);">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">Salon &amp; Day Spa</h1>
                        <p class="animated fadeInRightBig">Best Service, Best Price</p>
                        <p class="animated fadeInDown"><a href="contact.php">Contact Us Today</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url(slider/2.jpg)">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">Sample Main Title</h1>
                        <p class="animated fadeInRightBig">Sample Sub Title</p>
                        <p class="animated fadeInDown"><a href="contact.php">Contact Us Today</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url(slider/3.jpg)">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">Sample Main Title</h1>
                        <p class="animated fadeInRightBig">Sample Sub Title</p>
                        <p class="animated fadeInDown"><a href="contact.php">Contact Us Today</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url(slider/4.jpg)">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">Sample Main Title</h1>
                        <p class="animated fadeInRightBig">Sample Sub Title</p>
                        <p class="animated fadeInDown"><a href="contact.php">Contact Us Today</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url(slider/5.jpg)">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">Sample Main Title</h1>
                        <p class="animated fadeInRightBig">Sample Sub Title</p>
                        <p class="animated fadeInDown"><a href="contact.php">Contact Us Today</a></p>
                    </div>
                </div>
            </div>
            <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a> </div>
        <!--/#home-slider-->
    </header>
</div>
<div class="whyUs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Why Us?</h2>
            </div>
            <ul class="clearfix">
                <li> <a href="aboutus.php" class="picBox"> <img src="images/icons/thumbs.png" alt="Quality Services"/> </a>
                    <h3><a href="aboutus.php">Quality Services</a></h3>
                    <p>At Salon and Day Spa, our customers leave happily satisfied with our quality services. You will enter into a... <a href="aboutus.php">More</a></p>
                </li>
                <li> <a href="aboutus.php" class="picBox"> <img src="images/icons/prices.png" alt="Affordable Prices"/> </a>
                    <h3><a href="aboutus.php">Affordable Prices</a></h3>
                    <p>Salon and Day Spa has been widely known as providing best service at best price. From threading... <a href="aboutus.php">More</a></p>
                </li>
                <li> <a href="aboutus.php" class="picBox"> <img src="images/icons/users.png" alt="Exp. &amp; Skilled Staffs"/> </a>
                    <h3><a href="aboutus.php">Exp. &amp; Skilled Staffs</a></h3>
                    <p>Skill and expertise along with practical exposure plays significant role in beauty sector. Winning a... <a href="aboutus.php">More</a></p>
                </li>
                <li> <a href="aboutus.php" class="picBox"> <img src="images/icons/appointment.png" alt="Online Appointment"/> </a>
                    <h3><a href="aboutus.php">Online Appointment</a></h3>
                    <p>We believe in providing ultimate convenient service to our customers. All you need to do is make an online... <a href="aboutus.php">More</a></p>
                </li>
                <li> <a href="aboutus.php" class="picBox"> <img src="images/icons/wifi.png" alt="Free Wifi"/> </a>
                    <h3><a href="aboutus.php">Free Wifi</a></h3>
                    <p>Need to wait for few minutes for your turn? Well, internet connectivity and free Wi-Fi makes it easy... <a href="aboutus.php">More</a></p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="aboutUsHome">
    <div class="overlayBox">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12"><img src="images/home-about.jpg" alt="Salon and Day Spa" /></div>
                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12">
                    <h1>About Salon and Day Spa</h1>
                    <p><strong>Salon and Day Spa</strong> justifies the essence of its name. Conveniently located in the Portsmouth Rd, in Manassas, Virginia, Salon and Day Spa has been fulfilling its purpose of providing best beauty service at best price. The customers’ satisfaction has always been our utmost priority and we are proud to state that we have always maintained our motto of service since establishment. Though established and operated for two years, Salon and Day Spa has the expertise of the certified beauty experts with more than 10 years’ experience in related field.</p>
                    <p class="more"><a href="aboutus.php">Continue Reading <i class="fa fa-arrow-right"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="servicesHome">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Services We Provide</h2>
            </div>
            <ul class="clearfix">
                <li class="col-lg-6 col-xs-12 clearfix">
                    <div class="pic"> <img src="ServicesImg/threading.jpg" alt="Threading" /> </div>
                    <div class="infoBox">
                        <h3><a href="services-details.php">Threading</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type... <a href="services-details.php">Read More</a></p>
                    </div>
                </li>
                <li class="col-lg-6 col-xs-12 clearfix">
                    <div class="pic"> <img src="ServicesImg/waxing.jpg" alt="Waxing" /> </div>
                    <div class="infoBox">
                        <h3><a href="services-details.php">Waxing</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type... <a href="services-details.php">Read More</a></p>
                    </div>
                </li>
                <li class="col-lg-6 col-xs-12 clearfix">
                    <div class="pic"> <img src="ServicesImg/cosmetic-tattoo.jpg" alt="Cosmetic Tattoo" /> </div>
                    <div class="infoBox">
                        <h3><a href="services-details.php">Cosmetic Tattoo</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type... <a href="services-details.php">Read More</a></p>
                    </div>
                </li>
                <li class="col-lg-6 col-xs-12 clearfix">
                    <div class="pic"> <img src="ServicesImg/eyelashes.jpg" alt="Eyelashes Ext/Tinting" /> </div>
                    <div class="infoBox">
                        <h3><a href="services-details.php">Eyelashes Ext/Tinting</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type... <a href="services-details.php">Read More</a></p>
                    </div>
                </li>
                <li class="col-lg-6 col-xs-12 clearfix">
                    <div class="pic"> <img src="ServicesImg/skin-care.jpg" alt="Skin Care (Dermalogical)" /> </div>
                    <div class="infoBox">
                        <h3><a href="services-details.php">Skin Care (Dermalogical)</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type... <a href="services-details.php">Read More</a></p>
                    </div>
                </li>
                <li class="col-lg-6 col-xs-12 clearfix">
                    <div class="pic"> <img src="ServicesImg/body-massage.jpg" alt="Body Massage" /> </div>
                    <div class="infoBox">
                        <h3><a href="services-details.php">Body Massage</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type... <a href="services-details.php">Read More</a></p>
                    </div>
                </li>
                <li class="col-lg-6 col-xs-12 clearfix">
                    <div class="pic"> <img src="ServicesImg/hair-package.jpg" alt="Hair" /> </div>
                    <div class="infoBox">
                        <h3><a href="services-details.php">Hair Package</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type... <a href="services-details.php">Read More</a></p>
                    </div>
                </li>
                <li class="col-lg-6 col-xs-12 clearfix">
                    <div class="pic"> <img src="ServicesImg/eye-brow.jpg" alt="Eye brow microblading" /> </div>
                    <div class="infoBox">
                        <h3><a href="services-details.php">Eye brow microblading</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type... <a href="services-details.php">Read More</a></p>
                    </div>
                </li>
                <li class="col-lg-6 col-xs-12 clearfix">
                    <div class="pic"> <img src="ServicesImg/skin-care-asin.jpg" alt="Skin Care (Asin Bridal)" /> </div>
                    <div class="infoBox">
                        <h3><a href="services-details.php">Skin Care (Asin Bridal)</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type... <a href="services-details.php">Read More</a></p>
                    </div>
                </li>
                <li class="col-lg-6 col-xs-12 clearfix">
                    <div class="pic"> <img src="ServicesImg/bridal.jpg" alt="Bridal" /> </div>
                    <div class="infoBox">
                        <h3><a href="services-details.php">Bridal</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type... <a href="services-details.php">Read More</a></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="infoBoxHome">
    <div class="overlayBox">
        <div class="container">
            <div class="col-md-6 col-xs-12">
                <div class="quickContactHome">
                    <h2>Quick Contact</h2>
                    <form>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Full Name" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Email ID" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Contact No." />
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Address" />
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Enter Your Message Here"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <button type="submit" class="btn"><i class="fa fa-send"></i> Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-lg-offset-1 col-md-6 col-xs-12">
                <div class="testimonialsHome">
                    <h2>What our customers say about us?</h2>
                    <div class="userHome clearfix">
                        <div class="userPic"><img src="Testimonials/user-demo.jpg" alt="User Name" /></div>
                        <div class="userInfo">
                            <h3>Ms. Blue</h3>
                            <h4>Washington, DC</h4>
                        </div>
                    </div>
                    <p>I have done eyebrow threading here, and its pretty good, I hope this isn't one of those spots that closes after some time, as it's convenient having a eyebrow person close, my usual spot is in Fairfax. so I will be back, great prices as well.</p>
                    <p><a href="testimonialspage.php" class="btn"><i class="fa fa-send"></i> View All</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="infoAreaSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-xs-12">
                <div class="whatisCT">
                    <h2>What is and Why - COSMETIC TATTOO?</h2>
                    <p><img src="images/cosmetic-tattoo.jpg" alt="Cosmetic Tattoo" /> Cosmetic tattoo, also known as permanent makeup, is a popular method to enhance the beauty of your eyebrows, eyeliners and lips. <br />
                        <strong>Preparation:</strong> The entire procedure can take from 1 hour to 90 minutes depending on the treatment you want to have. <br />
                        <strong>Process:</strong> The process involves inserting small quantities of color pigments progressively into the skin using a small pen like tool. <br />
                        <strong>Treatment:</strong> Cosmetic tattoo, also known as permanent makeup, is a popular method to enhance the beauty of your eyebrows, eyeliners and lips. <br />
                        <strong>Rejuvenation:</strong> Based on my experience as tattoo artist tattooing hundreds of customers, you experience a bit of discomfort than the pain during the procedure.We try our best to make the experience as less painful or even pain-free as possible by numbing the area effectively before the procedure.</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-xs-12">
                <div class="happyCustomers">
                    <h2>Happy Customers Speaks About Us</h2>
                    <div class="videoBoxHome">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/EX17SKS3lE0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <p><a href="happy-customers.php"><i class="fa fa-list"></i> View All</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="photoGallery">
    <div class="container">
        <div class="row">
            <ul class="clearfix">
                <li class="col-md-4 col-sm-6 col-xs-12">
                    <div class="galleryImgBox"><img src="gallery/1.jpg" alt="Salon and Day Spa" />
                        <div class="overlayBox"><a href="gallery/1.jpg" rel="galleryPics" class="fancybox" title="Salon and Day Spa"> <span><span><i class="fa fa-plus-circle"></i></span></span> </a></div>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6 col-xs-12">
                    <div class="galleryImgBox"><img src="gallery/2.jpg" alt="Salon and Day Spa" />
                        <div class="overlayBox"><a href="gallery/2.jpg" rel="galleryPics" class="fancybox" title="Salon and Day Spa"> <span><span><i class="fa fa-plus-circle"></i></span></span> </a></div>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6 col-xs-12">
                    <div class="galleryImgBox"><img src="gallery/3.jpg" alt="Salon and Day Spa" />
                        <div class="overlayBox"><a href="gallery/3.jpg" rel="galleryPics" class="fancybox" title="Salon and Day Spa"> <span><span><i class="fa fa-plus-circle"></i></span></span> </a></div>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6 col-xs-12">
                    <div class="galleryImgBox"><img src="gallery/4.jpg" alt="Salon and Day Spa" />
                        <div class="overlayBox"><a href="gallery/4.jpg" rel="galleryPics" class="fancybox" title="Salon and Day Spa"> <span><span><i class="fa fa-plus-circle"></i></span></span> </a></div>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6 col-xs-12">
                    <div class="galleryImgBox"><img src="gallery/5.jpg" alt="Salon and Day Spa" />
                        <div class="overlayBox"><a href="gallery/5.jpg" rel="galleryPics" class="fancybox" title="Salon and Day Spa"> <span><span><i class="fa fa-plus-circle"></i></span></span> </a></div>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6 col-xs-12">
                    <div class="galleryImgBox"><img src="gallery/6.jpg" alt="Salon and Day Spa" />
                        <div class="overlayBox"><a href="gallery/6.jpg" rel="galleryPics" class="fancybox" title="Salon and Day Spa"> <span><span><i class="fa fa-plus-circle"></i></span></span> </a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="contactBottomBox">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="mapBox">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2113994.268910583!2d-96.78870119577127!3d29.517144677932077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640b8b4488d8501%3A0xca0d02def365053b!2sHouston%2C+TX%2C+USA!5e0!3m2!1sen!2snp!4v1497077000576" width="100%" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="contactArea">
                        <h2>Contact Us</h2>
                        <ul>
                            <li>10350 Portsmouth Rd, Manassas,
                                VA 20109</li>
                            <li>202-374-8366</li>
                            <li>info@salonanspa.com, gomanepal1@yahoo.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush

@stack('scripts')
@include('frontend.includes.footer')
