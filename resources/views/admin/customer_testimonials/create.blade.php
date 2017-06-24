@extends('admin.layout.master')

@section('extra-css')

@endsection

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Add {{ $title }}</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin_home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
                <li><a href="{{ route($scope.'.index') }}">{{ $title }}</a></li>
                <li class="active">Add</li>
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

            {!! Form::open([ 'route' => $scope.'.store','method' => 'post', 'enctype' => 'multipart/form-data' ]) !!}

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
        (function(){
            $(".customerPart").hide();
            $(".testimonialsPart").hide();
            $(".customer").click(function () {
               $(".customerPart").show();
                $(".testimonialsPart").hide();

            });

            $(".testimonials").click(function () {
                $(".testimonialsPart").show();
                $(".customerPart").hide();
            });
        })();
    </script>


    
@endsection
