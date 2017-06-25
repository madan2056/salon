@extends('frontend.layout.master')
@push('css')

@endpush

@section('content')

    <div class="titleArea">
        <div class="overlayBox">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Photo Gallery</h1>
                        <div class="breadCrumbTop"><a href="/">Home</a> &raquo; Photo Gallery</div>
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
                        <div class="photoGallery inner">
                            <div class="row">
                                <ul class="clearfix">

                                    @foreach($data['gallery'] as $gallery)
                                        <li class="col-lg-4 col-md-6 col-xs-12">
                                            <div class="galleryImgBox"><img src="{{ asset('images/sample_work/'.$gallery->image) }}" alt="{{ $gallery->title }}" />
                                                <div class="overlayBox"><a href="{{ asset('images/sample_work/'.$gallery->image) }}" rel="galleryPics"
                                                                           class="fancybox" title="{{ $gallery->title }}">
                                                        <span><span><i class="fa fa-plus-circle"></i></span></span>
                                                    </a></div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        {{ $data['gallery']->links('frontend.includes.custom_pagination') }}
                    </div>
                </div>
                @include('frontend.includes.sidebar')
            </div>
        </div>
    </div>

@endsection
