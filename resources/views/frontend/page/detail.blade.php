@extends('frontend.layout.master')
@push('css')

@endpush

@section('content')

    <div class="titleArea">
        <div class="overlayBox">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>{{ $data['row']->title1 }}</h1>
                        <div class="breadCrumbTop"><a href="{{ route('home') }}">Home</a> &raquo; {{ $data['row']->title1 }}</div>
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
                            <img src="{{ asset('images/page/'.$data['row']->image) }}" alt="{{ $data['row']->title1 }}" />
                          {!! $data['row']->description !!}
                        </p>
                    </div>
                </div>

                @include('frontend.includes.sidebar')

            </div>
        </div>
    </div>

@endsection
