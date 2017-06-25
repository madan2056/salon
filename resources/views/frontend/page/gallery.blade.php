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
                                    <li class="col-lg-4 col-md-6 col-xs-12">
                                        <div class="galleryImgBox"><img src="gallery/1.jpg" alt="Salon and Day Spa" />
                                            <div class="overlayBox"><a href="gallery/1.jpg" rel="galleryPics" class="fancybox" title="Salon and Day Spa"> <span><span><i class="fa fa-plus-circle"></i></span></span> </a></div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-6 col-xs-12">
                                        <div class="galleryImgBox"><img src="gallery/2.jpg" alt="Salon and Day Spa" />
                                            <div class="overlayBox"><a href="gallery/2.jpg" rel="galleryPics" class="fancybox" title="Salon and Day Spa"> <span><span><i class="fa fa-plus-circle"></i></span></span> </a></div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-6 col-xs-12">
                                        <div class="galleryImgBox"><img src="gallery/3.jpg" alt="Salon and Day Spa" />
                                            <div class="overlayBox"><a href="gallery/3.jpg" rel="galleryPics" class="fancybox" title="Salon and Day Spa"> <span><span><i class="fa fa-plus-circle"></i></span></span> </a></div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-6 col-xs-12">
                                        <div class="galleryImgBox"><img src="gallery/4.jpg" alt="Salon and Day Spa" />
                                            <div class="overlayBox"><a href="gallery/4.jpg" rel="galleryPics" class="fancybox" title="Salon and Day Spa"> <span><span><i class="fa fa-plus-circle"></i></span></span> </a></div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-6 col-xs-12">
                                        <div class="galleryImgBox"><img src="gallery/5.jpg" alt="Salon and Day Spa" />
                                            <div class="overlayBox"><a href="gallery/5.jpg" rel="galleryPics" class="fancybox" title="Salon and Day Spa"> <span><span><i class="fa fa-plus-circle"></i></span></span> </a></div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-6 col-xs-12">
                                        <div class="galleryImgBox"><img src="gallery/6.jpg" alt="Salon and Day Spa" />
                                            <div class="overlayBox"><a href="gallery/6.jpg" rel="galleryPics" class="fancybox" title="Salon and Day Spa"> <span><span><i class="fa fa-plus-circle"></i></span></span> </a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="customPagination">
                            <ul class="clearfix">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @include('frontend.includes.sidebar')
            </div>
        </div>
    </div>

@endsection
