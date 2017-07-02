@extends('admin.layout.master')

@section('extra-css')

@endsection
@section('content')

    <div class="content-wrapper">
          <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> {{$title}}</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin_home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ route($scope.'.index') }}">Customer Testimonials</a></li>
                <li class="active">List</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ $title }} List </h3>
                    <a class="btn btn-default btn-sm" href="{{ route($scope.'.create') }}" title="Create new user">
                        <i class="glyphicon glyphicon-plus-sign"></i> Create New {{ $title }}
                    </a>
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
                            <th>Type</th>
                            <th>Video Title</th>
                            <th>Video Url</th>
                            <th>Customer Name</th>
                            <th>Status</th>
                            <th>Order</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                     <tbody>
                    @foreach($row as $data)
                        <tr>
                            <td></td>
                            <td>{{ $data->type }}</td>
                            <td>{{ $data->video_title }}</td>
                            <td>{{ $data->video_url }}</td>
                            <td>{{ $data->customer_name }}</td>

                             <td>
                                @if($data->status == 1)
                                    <button type="button" class="btn  btn-success btn-xs">Active</button>
                                @else
                                    <button type="button" class="btn  btn-warning btn-xs">InActive</button>
                                @endif
                            </td>
                            <td>{{ $data->rank }}</td>
                            <td>
                                <a href="{{ route($scope.'.edit',['id' => $data->id]) }}" class="pull-left" title="Click To Edit">
                                    <button class="btn btn-xs btn-info"><i class="glyphicon glyphicon-pencil"></i></button>    &nbsp;&nbsp;
                                </a>
                                <a>
                                    {{ Form::open(array('url' => 'admin/'.$scope.'/' . $data->id, 'id'=>'delete-current-list-'.$data->id.'')) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    <button title="Click To Delete" type="submit" data-attr="{{ $data->id }}" class="btn btn-xs btn-danger bootbox-confirm"><i class="glyphicon glyphicon-trash"></i></button>
                                    {{ Form::close() }}
                                </a>
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
