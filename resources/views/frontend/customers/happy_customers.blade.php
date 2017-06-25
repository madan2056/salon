@extends('frontend.layout.master')

@push('css')

@endpush

@section('content')
    <div class="titleArea">
        <div class="overlayBox">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Happy Customers</h1>
                        <div class="breadCrumbTop"><a href="/">Home</a> &raquo; Happy Customers</div>
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
                        <div class="HappyCustomersInner">
                            <div class="row">
                                <ul class="clearfix">
                                    @if(isset($data['happy_customer']))
                                        @foreach($data['happy_customer'] as $happy)
                                        <li class="col-lg-6 col-xs-12">
                                            <div class="videoBox">
                                                <iframe width="100%" height="315"
                                                        src="https://www.youtube.com/embed/{{ $happy->video_url }}"
                                                        frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        {{ $data['happy_customer']->links('frontend.includes.custom_pagination') }}
                    </div>
                </div>

                @include('frontend.includes.sidebar')

            </div>
        </div>
    </div>

@endsection