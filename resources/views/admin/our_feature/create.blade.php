@extends('admin.layout.master')

@section('extra-css')

@endsection

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>{{ $title }}</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin_home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
                <li><a href="{{ route('page.index') }}">{{ $title }}</a></li>
                <li class="active">List</li>
            </ol>
        </section>
            <!-- Custom Tabs -->
        <section class="content">

            @include('common.error_message')

            {!! Form::open([ 'route' => $scope.'.store','method' => 'post', 'enctype' => 'multipart/form-data' ]) !!}
              <div class="nav-tabs-custom">

                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">

                        @include($view_path.'.partials._form')

                    </div>
                </div>
                  <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
               </div>
            {!! Form::close() !!}
        </section>


    </div>

    <!-- /.content -->
@endsection


@section('extra-js')

    @include('admin.partials.ckeditor_script')


@endsection