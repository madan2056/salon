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
                                        <div class="pic">
                                            @if( $testimonial->customer_image)

                                                <img src="{{ asset('images/customer_testimonials/'. $testimonial->customer_image) }}"
                                                     alt="{{$testimonial->customer_name}}" />
                                            @else
                                                <img src="{{ asset('images/user-demo.jpg') }}"
                                                     alt="{{$testimonial->customer_name}}" />
                                            @endif
                                        </div>
                                        <div class="clientDetails">{{$testimonial->customer_name}}<span>{{$testimonial->customer_address}}</span> </div>
                                    </div>
                                    <p>{{$testimonial->customer_comment}}</p>
                                </div>
                            @endforeach
                        @endif

                            {{ $data['testimonials']->links('frontend.includes.custom_pagination') }}

                    </div>
                </div>

                @include('frontend.includes.sidebar')

            </div>
        </div>
    </div>

@endsection