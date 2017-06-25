@if ($data['gallery']->count() > 0)
    <div class="photoGallery">
        <div class="container">
            <div class="row">
                <ul class="clearfix">
                    @foreach($data['gallery'] as $gallery)
                        <li class="col-md-4 col-sm-6 col-xs-12">
                            <div class="galleryImgBox"><img src="{{ asset('images/sample_work/'.$gallery->image) }}" alt="{{ $gallery->title }}" />
                                <div class="overlayBox"><a href="{{ asset('images/sample_work/'.$gallery->image) }}" rel="galleryPics" class="fancybox" title="{{ $gallery->title }}"> <span><span><i class="fa fa-plus-circle"></i></span></span> </a></div>
                            </div>
                        </li>
                        @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endif