@extends('admin.layout.master')
@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Edit {{ $title }}</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="">{{ $title }}</a></li>
                <li class="active">Edit</li>
            </ol>
        </section>
            <!-- Custom Tabs -->
        <section class="content">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
            @if (session()->has('message'))
                {!! session()->get('message') !!}
            @endif
            {!! Form::model($data['service_appointment'],[ 'route' => [ 'appointment-layout.update',$data['service_appointment']->id],
            'method' => 'patch', 'enctype' => 'multipart/form-data' ]) !!}

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

                                  {!! Form::select('service_name[]',$data['services'], isset($data['service_appointment'])?$data['service_appointment']->services->pluck('id'):null, [
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
