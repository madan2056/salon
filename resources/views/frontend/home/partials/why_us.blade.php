@if ($data['services']->count() > 0)
    <div class="whyUs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Why Us?</h2>
                </div>
                <ul class="clearfix">
                    @foreach($data['features'] as $feature)
                        <li>
                            <a href="{{ route('service_detail', $feature->id) }}" class="picBox">
                                <img src="{{ asset('images/our_feature/'.$feature->image) }}" alt="Quality Services"/>
                            </a>
                            <h3><a href="{{ route('service_detail', $feature->id) }}">{{ $feature->title }}</a></h3>
                            {!! $feature->short_desc !!}
                            <a href="{{ route('service_detail', ['url' => $feature->id]) }}">More</a>
                        </li>
                        @endforeach

                </ul>
            </div>
        </div>
    </div>
    @endif