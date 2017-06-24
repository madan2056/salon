@extends('admin.layout.master')

@section('extra-css')

@endsection
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>{{ $title.' Manage' }}</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
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
            {!! Form::model($data['row'],[ 'route' => [ $scope.'.update',$data['row']->id], 'method' => 'patch', 'enctype' => 'multipart/form-data' ]) !!}

                {!! Form::hidden('id', $data['row']->id) !!}

                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">General</a></li>
                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Features</a></li>
                        <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="true">Pricing</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            @include($view_path.'.partials._form')
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            @include($view_path.'.partials._feature')
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                            @include($view_path.'.partials._pricing')
                        </div>
                        <!-- /.tab-pane -->
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->

            {!! Form::close() !!}
        </section>

    </div>

    <!-- /.content -->
@endsection

@section('extra-js')

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('js/our_service.js') }}"></script>
    @include('admin.partials.ckeditor_script')


@endsection