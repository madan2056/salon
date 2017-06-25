@extends('frontend.layout.master')
@push('css')

@endpush

@section('content')


@include('frontend.home.partials.slide_show')

@include('frontend.home.partials.why_us')

@include('frontend.home.partials.about_us')

@include('frontend.home.partials.service_home')

@include('frontend.home.partials.info_box')

@include('frontend.home.partials.info_area')

@include('frontend.home.partials.photo_gallery')

@include('frontend.home.partials.contact_bottom')

@endsection

@section('extra-js')

    @endsection
