@extends('frontend.layout.master')
@push('css')

@endpush

@section('content')

    <div class="titleArea">
        <div class="overlayBox">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>{{ $data['feature-detail']->title }}</h1>
                        <div class="breadCrumbTop"><a href="{{ route('home') }}">Home</a> &raquo; {{ $data['feature-detail']->title }}</div>
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
                        <p>
                            @if($data['feature-detail']->image)
                                <img src="{{ asset('images/our_feature/'.$data['feature-detail']->image) }}"
                                     alt="{{ $data['feature-detail']->title }}" />
                            @endif
                          {!! $data['feature-detail']->description !!}
                        </p>
                    </div>
                </div>

                @include('frontend.includes.sidebar')

            </div>
        </div>
    </div>

@endsection
