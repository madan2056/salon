@extends('frontend.layout.master')
@push('css')

@endpush

@section('content')

    <div class="titleArea">
        <div class="overlayBox">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Contact Us</h1>
                        <div class="breadCrumbTop"><a href="/">Home</a> &raquo; Contact Us</div>
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
                        <h2>Contact Form</h2>
                        <div class="contactForm">
                            @if (request()->session()->has('curd_message'))
                                <div class="successMessage"> {{ request()->session()->get('curd_message') }} </div>
                            @endif
                            <div class="row">
                                <form method="post" action="{{ route('contact-us.post') }}">
                                    {!! csrf_field() !!}
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" name="full_name" class="form-control" placeholder="Full Name" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email ID" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Contact No.</label>
                                            <input type="text" name="phone_number" class="form-control" placeholder="Contact" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" class="form-control" placeholder="Address" />
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Message / Comments</label>
                                            <textarea class="form-control" name="detail" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn"><i class="fa fa-send"></i> <strong>SUBMIT NOW</strong></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="contactBottomBox">
                            <div class="box">
                                <div class="mapBox">
                                    {!! $config->google_map !!}
                                </div>
                                <div class="contactArea">
                                    <h2>Contact Us</h2>
                                    <ul>
                                        <li>{!! $config->address !!}</li>
                                        <li>202-374-8366</li>
                                        <li>info@salonanspa.com, gomanepal1@yahoo.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('frontend.includes.sidebar')

            </div>
        </div>
    </div>

@endsection

@section('extra-js')

    @endsection
