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
        
        $(document).ready( function () {
           $('#page_type').change(function () {
               var page_type = $('#page_type').val();

               if(page_type) {

                   var v_token = "{{ csrf_token() }}";
                   var params  = {_token: v_token, page_type:page_type };
                   $.ajax({
                       method:'POST',
                       url : '{{ route('admin.page.load-title-as-page-type') }}',
                       data: params,
                       success: function(response){
                           var data = $.parseJSON(response);
                           $('#title').html('').append(data.html).show();
                       }
                   });

               }
               return false;
           }) 
            
        });
        
    </script>

    @include('admin.partials.ckeditor_script')


@endsection