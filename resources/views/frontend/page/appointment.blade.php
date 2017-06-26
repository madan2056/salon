@extends('frontend.layout.master')
@push('css')

@endpush

@section('content')

    <div class="titleArea">
        <div class="overlayBox">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Appointment</h1>
                        <div class="breadCrumbTop"><a href="/">Home</a> &raquo; Appointment</div>
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
                        <p>Please select the appropriate service you want to take appointment for.</p>
                        <div class="appointmentFormPackage">
                            <div class="errorMessage">
                                <ul>
                                    <li>Please enter a valid E-mail Id.</li>
                                    <li>Please enter your contact number.</li>
                                    <li>Please choose a appropriate service.</li>
                                </ul>
                            </div>
                            <div class="successMessage"> Thank you for choosing our service. We will get back to you shortly! </div>
                            <div class="clear"></div>
                            <form>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                    @foreach($service_appointment as $key => $service_appointment)

                                        <div class="panel panel-default">

                                            <div class="panel-heading" role="tab" id="heading2">

                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                                       href="#{{ $key }}" aria-expanded="false" aria-controls="collapse2">{{ $service_appointment->title }}</a>
                                                </h4>

                                            </div>

                                            <div id="{{ $key }}" class="panel-collapse collapse {{ $key == 0?'in':'' }} " role="tabpanel" aria-labelledby="heading2">
                                                <div class="panel-body">

                                                        @php $count = $service_appointment->services->count(); @endphp

                                                        @foreach($service_appointment->services as $service)

                                                            @if ($count > 1)

                                                                <h3>{{ $service->title }}</h3>

                                                                @endif

                                                            <ul class="clearfix">

                                                                @foreach($service->servicesPricing as $service_appointment)

                                                                    <li>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox">
                                                                                {{ $service_appointment->title }}
                                                                                <span>({{ $service_appointment->cost }})</span>
                                                                            </label>
                                                                        </div>
                                                                    </li>

                                                               @endforeach
                                                            </ul>
                                                        @endforeach

                                                </div>
                                            </div>

                                        </div>

                                    @endforeach

                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading3">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">Facials</a> </h4>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body">
                                                <h3>Facial (Dermalogica)</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Anti-aging facial <span>($60)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Acne treatment <span>($45)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Skin brightening facial <span>($55)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Hyper pigmentation treatment <span>($60)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Teenage cleanup facial <span>($45)</span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h3>Facial (Asin product)</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Gold facial <span>($50)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Papaya facial <span>($50)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Organic fresh fruits facial with vitamin C <span>($70)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Deep pore cleansing facial <span>($55)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Skin brightening facial with bleach <span>($70)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Oily skin treatment <span>($60)</span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="appointForm">
                                    <h2>Booking Details</h2>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" placeholder="Full Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Email Id</label>
                                                <input type="email" class="form-control" placeholder="Email Id" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Contact No.</label>
                                                <input type="tel" class="form-control" placeholder="Contact No." />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Address" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Prefered Date</label>
                                                <input type="text" class="form-control" placeholder="Prefered Date" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Prefered Time</label>
                                                <input type="text" class="form-control" placeholder="Prefered Time" />
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn"><i class="fa fa-send"></i> <strong>SUBMIT NOW</strong></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @include('frontend.includes.sidebar')
            </div>
        </div>
    </div>

@endsection
