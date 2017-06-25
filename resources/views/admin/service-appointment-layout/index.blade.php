@extends('admin.layout.master')

@section('extra-css')

@endsection
@section('content')

    <div class="content-wrapper">
          <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> {{ $title }}</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin_home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="">{{ $title }}</a></li>
                <li class="active">List</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ $title }} List </h3>
                    <a class="btn btn-default btn-sm" href="{{ route('appointment-layout.create') }}" title="Create new user">
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
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                     <tbody>
                    @foreach($row as $data)
                        <tr>
                            <td></td>
                            <td>{{ $data->title }}</td>
                            <td>
                                <a href="{{ route('appointment-layout.edit',['id' => $data->id]) }}" class="pull-left" title="Click To Edit">
                                    <button class="btn btn-xs btn-info"><i class="glyphicon glyphicon-pencil"></i></button>    &nbsp;&nbsp;
                                </a>
                                <a>
                                    {{ Form::open(array('url' => 'admin/appointment-layout/' . $data->id ,'id'=>'delete-current-list')) }}{{ Form::hidden('_method', 'DELETE') }}
                                    <button title="Click To Delete" type="submit" class="btn btn-xs btn-danger bootbox-confirm">
                                        <i class="glyphicon glyphicon-trash"></i></button>
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
