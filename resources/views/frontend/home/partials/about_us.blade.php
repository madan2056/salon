@if(isset($data['about_page']))
    <div class="aboutUsHome">
        <div class="overlayBox">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                        <img src="{{  asset('images/page/'.$data['about_page']->image)  }}" alt="{{  $data['about_page']->title1 }}" />
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12">
                        <h1>{{  $data['about_page']->title1 }}</h1>
                        <p>{!! $data['about_page']->description !!}</p>
                        <p class="more"><a href="{{ route('page', $data['about_page']->slug) }}">Continue Reading
                                <i class="fa fa-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif