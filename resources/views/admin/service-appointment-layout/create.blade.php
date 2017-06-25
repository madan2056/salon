@extends('admin.layout.master')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
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
            {!! Form::open([ 'route' => 'appointment-layout.store', 'method' => 'post' ]) !!}
            @if (session()->has('message'))
                {!! session()->get('message') !!}
            @endif
            <div class="nav-tabs-custom">

                <div class="tab-content" id="render-html">
                    <button class="btn btn-primary pull-right"> <i class="fa fa-plus"></i>  Add More Service List  </button> <br />
                    <hr />

                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-group">
                                {!! Form::label('title', 'Title' ) !!}

                                {!! Form::text('title', null, [
                                'placeholder' => 'Title' , 'class' => 'form-control' ]) !!}
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <button class="btn btn-danger"> <i class="fa fa-remove"></i> </button>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                {!! Form::label('service_name', 'Choose Service' ) !!}

                                {!! Form::select('service_name[]',$data['services'], null, [
                                'class' => 'form-control multi-service-name' , 'multiple' => 'multiple']) !!}
                            </div>
                        </div>

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
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script>
        $(".multi-service-name").select2();
    </script>
@endsection
