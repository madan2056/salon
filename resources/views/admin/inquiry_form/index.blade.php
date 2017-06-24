@extends('admin.layout.master')

@section('extra-css')

@endsection
@section('content')

    <div class="content-wrapper">
          <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Inquiry Form</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Inquiry Form</a></li>
                <li class="active">List</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ $title }} List </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @if (session()->has('message'))
                        {!! session()->get('message') !!}
                    @endif
                    <table id="table" class="table table-bordered">
                      <thead style="color: #fff; background-color: #2795e9;border-color: rgba(0,0,0,0.2);">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                     <tbody>
                    @foreach($row as $data)
                        <tr {!! $data->viewed_by_admin == 1?'style="background-color: #ecf0f5"':"" !!}>
                            <td></td>
                            <td>{{ $data->full_name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone_number }}</td>
                            <td>{{ $data->address }}</td>
                            <td>
                                <a href="{{ route($scope.'.show',['id' => $data->id]) }}" class="pull-left" title="Click To Edit">
                                    <button class="btn btn-xs btn-info"><i class="glyphicon glyphicon-eye-open"></i></button>    &nbsp;&nbsp;
                                </a>
                                @if ($data->viewed_by_admin == 1)
                                    <a href="{{ route($scope.'.destroy',['id' => $data->id]) }}" class="delete-image-confirm">
                                        <button title="Click To Delete" type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                                    </a>
                                    @endif
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection


@section('extra-js')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endsection
