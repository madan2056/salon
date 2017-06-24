@extends('admin.layout.master')

@section('extra-css')

@endsection
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Edit {{ $title }}</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">{{ $title }}</a></li>
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
            {!! Form::model($data['row'],[ 'route' => [ $scope.'.update',$data['row']->id], 'method' => 'patch', 'enctype' => 'multipart/form-data' ]) !!}
              <div class="nav-tabs-custom">
                <div class="tab-content">
                        @include($view_path.'.partials._form')
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

    <script>
        function imagePreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#uploadForm + img').remove();
                    $('#uploadForm').after('<img src="' + e.target.result + '" class="image" width="200" height="150" />');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('#file').change(function () {
            imagePreview(this);
        })
    </script>


@endsection
