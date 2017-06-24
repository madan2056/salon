<div class="servicesHome">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Services We Provide</h2>
            </div>
            <ul class="clearfix">
                @foreach($data['services'] as $service)
                    <li class="col-lg-6 col-xs-12 clearfix">
                        <div class="pic"> <img src="{{ asset('images/our_service/'.$service->image) }}"
                                               alt="{{ $service->title }}" /> </div>
                        <div class="infoBox">
                            <h3><a href="{{ route('service-detail', $service->slug ) }}">{{ $service->title }}</a></h3>
                            <p>{!! $service->short_description  !!} <a href="{{ route('service-detail', $service->slug ) }}">Read More</a></p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>