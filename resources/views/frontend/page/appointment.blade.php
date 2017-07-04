@extends('frontend.layout.master')
@push('css')
<link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet" />
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
                            @if (count($errors) > 0)
                            <div class="errorMessage">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>

                            @endif

                            @if (session()->has('message'))
                                <div class="successMessage">
                                {!! session()->get('message') !!}
                                </div>
                            @endif
                            <div class="clear"></div>
                            <form action="{{ route('appointment') }}" id="form" method="post">
                                {!! csrf_field() !!}
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
                                                                                <input type="checkbox" name="service_price[]" value="{{ AppHelper::getValueForService($service_appointment->id, $service->id)  }}">
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

                                </div>
                                <div class="appointForm">
                                    <h2>Booking Details</h2>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Full Name <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" name="full_name" placeholder="Full Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Email Id <span style="color: red;">*</span></label>
                                                <input type="email" class="form-control" name="email" placeholder="Email Id" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Contact No. </label>
                                                <input type="tel" class="form-control" name="contact_number" placeholder="Contact No." />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address" placeholder="Address" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group datepicker">
                                                <label>Prefered Date <span style="color: red;">*</span></label>
                                                <input type="text" id="date-picker" class="form-control" name="prefered_date" placeholder="Prefered Date" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Prefered Time</label>
                                                <input type="text" class="form-control" name="prefered_time" placeholder="Prefered Time" />
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label>Message <span style="color: red;">*</span></label>
                                                <textarea class="form-control" name="message"></textarea>
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

@push('scripts')

<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script>

<script type="text/javascript">

    $('#date-picker').datepicker();


    $( document ).ready( function () {
        $( "#form" ).validate( {
            rules: {
                full_name: "required",
                email: {
                    required: true,
                    email: true
                },
                prefered_date: "required",
                message: "required",
            },
            messages: {
                full_name: "Please enter your full name",
                email: "Please enter a valid email address",
                message: "Message field is required",
            },
            errorElement: "em",
            errorPlacement: function ( error, element ) {
                // Add the `help-block` class to the error element
                error.addClass( "help-block" );

                if ( element.prop( "type" ) == "radio" ) {
                    error.insertAfter( element.parents( ".error-wrapper" ) );
                } else {
                    error.insertAfter( element );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
            }
        } );
    } );
</script>


@endpush
