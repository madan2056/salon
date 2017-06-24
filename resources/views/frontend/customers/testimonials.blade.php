@extends('frontend.layout.master')

@push('css')

@endpush

@section('content')
    <div class="titleArea">
        <div class="overlayBox">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Testimonials</h1>
                        <div class="breadCrumbTop"><a href="/">Home</a> &raquo; Testimonials</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="PageArea">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <div class="leftSide">
                        @if(isset($data['testimonials']))
                            @foreach($data['testimonials'] as $testimonial)
                                <div class="testimonialsInnerBox">
                                    <div class="userInfo">
                                        <div class="pic"><img src="Testimonials/user-demo.jpg" alt="{{$testimonial->customer_name}}" /></div>
                                        <div class="clientDetails">{{$testimonial->customer_name}}<span>{{$testimonial->customer_address}}</span> </div>
                                    </div>
                                    <p>{{$testimonial->customer_comment}}</p>
                                </div>
                            @endforeach
                        @endif
                        {{--<div class="testimonialsInnerBox">--}}
                            {{--<div class="userInfo">--}}
                                {{--<div class="pic"><img src="Testimonials/user-demo.jpg" alt="Ms. Blue" /></div>--}}
                                {{--<div class="clientDetails">Ms. Blue <span>Washington, DC</span> </div>--}}
                            {{--</div>--}}
                            {{--<p>I have done eyebrow threading here , and its pretty good, I hope this isn't one of those spots that closes after some time, as it's convenient having a eyebrow person close, my usual spot is in Fairfax. so I will be back, great prices as well.</p>--}}
                        {{--</div>--}}
                        {{--<div class="testimonialsInnerBox">--}}
                            {{--<div class="userInfo">--}}
                                {{--<div class="pic"><img src="Testimonials/user-demo.jpg" alt="Cynthia R" /></div>--}}
                                {{--<div class="clientDetails">Cynthia R <span>Manassas, VA</span> </div>--}}
                            {{--</div>--}}
                            {{--<p>This is a charming new spot run by 2 lovely ladies. Absolutely no wait. Which is Awesome. My daughter got her eyebrows done quickly and expertly. I love they had a template up to chose your eyebrow style. I always wonder if the beautician knows what my idea of thin is and I have been disappointed in the past but the template really is a great way to communicate what you want. My daughter says the experience felt pleasant "it was like I was getting my face massaged" the prices are reasonable too.</p>--}}
                        {{--</div>--}}
                        {{--<div class="testimonialsInnerBox">--}}
                            {{--<div class="userInfo">--}}
                                {{--<div class="pic"><img src="Testimonials/user-demo.jpg" alt="Camille D" /></div>--}}
                                {{--<div class="clientDetails">Camille D <span>NA</span> </div>--}}
                            {{--</div>--}}
                            {{--<p>I'm not sure where to start but my experience with Goma at the Salon and Day Spa was exceptional! I received professional service from the moment I arrived. I was receiving eyebrow micro blading and Goma took the time to explain the entire process and advise me on appropriate color and shape for my hair color and face shape. It is day 4 and I'm very pleased with my results so far. Thanks Goma!</p>--}}
                        {{--</div>--}}
                        <div class="customPagination">
                            <ul class="clearfix">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                @include('frontend.includes.sidebar')

            </div>
        </div>
    </div>

@endsection