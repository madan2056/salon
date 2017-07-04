@extends('frontend.layout.master')
@push('css')

@endpush

@section('content')

    <div class="titleArea">
        <div class="overlayBox">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>{{ $data['service-detail']->title }}</h1>
                        <div class="breadCrumbTop"><a href="{{ route('home') }}">Home</a> &raquo; <a href="services-list.php">Services We Provide</a> &raquo; {{ $data['service-detail']->title }}</div>
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
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-xs-12">
                                <div class="servicesLeft">
                                    <div class="pic"> <img src="{{ asset('images/our_service/'.$data['service-detail']->image ) }}"
                                                           alt="{{ $data['service-detail']->title }}" /> </div>
                                    <h2>Features of {{ $data['service-detail']->title }}</h2>
                                    <ul>
                                        @foreach($data['service-feature'] as $service_feature)
                                            <li>{{ $service_feature->title }}</li>
                                        @endforeach
                                    </ul>
                                    <div class="more"> <a href="{{ route('appointment') }}">Make An Appointment</a> </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-xs-12">
                                <p>{!! $data['service-detail']->description !!}</p>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="pricingBoxDetails">
                            <h2>Pricing</h2>
                            <ul class="clearfix">
                                @foreach($data['service-pricing'] as $service_pricing)
                                    <li>{{  $service_pricing->title . ' '. $service_pricing->cost }}</li>
                                @endforeach
                            </ul>
                            <div class="more"> <a href="#">Make An Appointment</a> </div>
                        </div>
                        <div class="innerSerivcesOptions">
                            <h2>You May Also Like This</h2>
                            <div class="row">
                                <ul class="clearfix">
                                    @foreach($data['service-related'] as $service_related)
                                        <li class="col-lg-4 col-md-6 col-xs-12">
                                            <div class="pic"> <a href="{{ route('service-detail', $service_related->slug) }}"><img src="{{ asset('images/our_service/'.$service_related->image) }}" alt="{{ $service_related->title }}" /></a> </div>
                                            <h3><a href="{{ route('service-detail', $service_related->slug) }}">{{ $service_related->title }}</a></h3>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @include('frontend.includes.sidebar')
            </div>
        </div>
    </div>


@endsection
