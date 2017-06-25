<div class="infoBoxHome">
    <div class="overlayBox">
        <div class="container">
            <div class="col-md-6 col-xs-12">
                <div class="quickContactHome">
                    <h2>Quick Contact</h2>
                    <form id="contact-form" method="POST" action="{{ route('contact-us.post') }}">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter Your Full Name" required />
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email ID" required />
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control" placeholder="Enter Your Contact No." required />
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Enter Your Address" required />
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="detail" placeholder="Enter Your Message Here" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <button type="submit" class="btn" id="contact-form-submit-btn"><i class="fa fa-send"></i> Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @if(isset($data['testimonial']))
            <div class="col-lg-5 col-lg-offset-1 col-md-6 col-xs-12">
                <div class="testimonialsHome">
                    <h2>What our customers say about us?</h2>
                    <div class="userHome clearfix">
                        <div class="userPic">

                            @if( $data['testimonial']->customer_image)
                                <img src="{{ asset('images/customer_testimonials/'. $data['testimonial']->customer_image) }}"
                                     alt="{{$data['testimonial']->customer_name}}" />
                            @else
                                <img src="{{ asset('images/user-demo.jpg') }}"
                                     alt="{{$data['testimonial']->customer_name}}" />
                            @endif

                        </div>

                        <div class="userInfo">
                            <h3>{{ $data['testimonial']->customer_name }}</h3>
                            <h4>{{ $data['testimonial']->customer_address }}</h4>
                        </div>
                    </div>
                    <p>{{ $data['testimonial']->customer_comment}}</p>
                    <p><a href="{{route('testimonials')}}" class="btn"><i class="fa fa-send"></i> View All</a></p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>