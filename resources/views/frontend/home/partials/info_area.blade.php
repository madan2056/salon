@if(isset($data['why_page']))
<div class="infoAreaSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-xs-12">
                <div class="whatisCT">
                    <h2>{{ $data['why_page']->title1 }}</h2>
                    <p>
                        <img src="{{ asset('images/page/'. $data['why_page']->image) }}" alt="{{ $data['why_page']->title1 }}" />
                        {!! $data['why_page']->short_description !!}
                     </p>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-xs-12">
                <div class="happyCustomers">
                    <h2>Happy Customers Speaks About Us</h2>
                    <div class="videoBoxHome">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/EX17SKS3lE0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <p><a href="{{route('happy_customers')}}"><i class="fa fa-list"></i> View All</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif