@extends('admin.layout.master')

@section('extra-css')

@endsection
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>{{ $title}}</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin_home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">{{ $title }}</a></li>
                <li class="active">Update</li>
            </ol>
        </section>
        <!-- Custom Tabs -->
        <section class="content">
            {!! Form::model($config,[ 'route' => [ $scope.'.update', $config->id], 'method' => 'post', 'enctype' => 'multipart/form-data' ]) !!}
            @if (session()->has('message'))
                {!! session()->get('message') !!}
            @endif
            <div class="nav-tabs-custom">

                <div class="tab-content">
                    <div class="form-group">
                        {!! Form::label('company_name', 'Company Name' ) !!}

                        {!! Form::text('company_name', null, [ 'id' => 'company_name', 'placeholder' => 'Company Name' , 'class' => 'form-control' ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email' ) !!}
                        {!! Form::text('email', null, [ 'id' => 'email', 'placeholder' => 'Email' , 'class' => 'form-control' ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('sending_email', 'Sending Email' ) !!}
                        {!! Form::email('sending_email', null, [ 'id' => 'sending_email', 'placeholder' => 'Sending Email' , 'class' => 'form-control' ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('phone', 'Phone' ) !!}
                        {!! Form::text('phone', null, [ 'id' => 'phone', 'placeholder' => 'Phone' , 'class' => 'form-control' ]) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::label('address', 'Address' ) !!}
                        {!! Form::text('address', null, [ 'id' => 'address', 'placeholder' => 'Address' , 'class' => 'form-control' ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('logo', 'Logo' ) !!}
                        {!! Form::file('logo', [ 'id' => 'logo', 'class' => 'form-control' ]) !!}
                        @if(isset($config->logo))
                            @if($config->logo)
                                <img src="{{ asset('images/profile_setting/'.$config->logo) }}"
                                     alt="{{ $config->logo }}" style="max-width:200px; max-height:100px;">
                            @else
                                <p>No Image</p>
                            @endif
                        @endif
                    </div>

                    <div class="form-group">
                        {!! Form::label('facebook_link', 'Facebook Link' ) !!}
                        {!! Form::text('facebook_link', null, [ 'id' => 'facebook_link', 'placeholder' => 'Facebook Link' , 'class' => 'form-control' ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('google_plus', 'Google Link' ) !!}
                        {!! Form::text('google_plus', null, [ 'id' => 'google_plus', 'placeholder' => 'Google Link' , 'class' => 'form-control' ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('instagram', 'Instagram Link' ) !!}
                        {!! Form::text('instagram', null, [ 'id' => 'instagram', 'placeholder' => 'Instagram Link' , 'class' => 'form-control' ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('youtube', 'Youtube Link' ) !!}
                        {!! Form::text('youtube', null, [ 'id' => 'youtube', 'placeholder' => 'Youtube Link' , 'class' => 'form-control' ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('google_map', 'Google Map Code' ) !!}
                        {!! Form::textarea('google_map', null, [ 'id' => 'google_map', 'placeholder' => 'Google Map Code' , 'class' => 'form-control' ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('ye_link', 'Ye link' ) !!}
                        {!! Form::textarea('ye_link', null, [ 'id' => 'ye_link', 'placeholder' => 'Ye Link' , 'class' => 'form-control' ]) !!}
                    </div>

                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}
        </section>
    </div>
@endsection


@section('extra-js')

    <script type="text/javascript">
        $('#browse_file').on('click', function (e) {
            $('#photo').click();
        })
        $('#photo').on('change', function (e) {
            var fileInput = this;
            if (fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img').attr('src', e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        })
    </script>

@endsection
