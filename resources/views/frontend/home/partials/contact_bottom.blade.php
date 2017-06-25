<div class="contactBottomBox">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="mapBox">
                        {!! $config->google_map !!}
                    </div>
                    <div class="contactArea">
                        <h2>Contact Us</h2>
                        <ul>
                            <li>{!! $config->address !!}</li>
                            <li>{{ $config->phone }}</li>
                            <li>{{ $config->email }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>