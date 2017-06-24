@extends('admin.layout.master')

@section('extra-css')

@endsection
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>View {{ $title }}</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">{{ $title }}</a></li>
                <li class="active">View</li>
            </ol>
        </section>
            <!-- Custom Tabs -->
        <section class="content">

            {!! Form::model($data['row']) !!}
              <div class="nav-tabs-custom">
                <div class="tab-content">
                        @include($view_path.'.partials._form')
                </div>
               </div>
            {!! Form::close() !!}
        </section>
    </div>
@endsection

@section('extra-js')




@endsection
