@extends('admin.layout.master')

@section('extra-css')

@endsection
@section('content')

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>{{ $title }}</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin_home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ route($scope.'.index') }}">User</a></li>
                <li class="active">List</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Users List</h3>
                    <a class="btn btn-default btn-sm" href="{{ route($scope.'.create') }}"
                       title="Create new {{ $title }}">
                        <i class="glyphicon glyphicon-plus-sign"></i> Create New {{ $title }}
                    </a>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    @include('common.flash_message')

                    <table id="table" class="table table-bordered">
                        <thead style="color: #fff; background-color: #2795e9;border-color: rgba(0,0,0,0.2);">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($row as $data)
                            <tr>
                                <td></td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>
                                    <a href="{{ route($scope.'.edit',['id'=> $data->id]) }}" title="Create New User">
                                        <button class="btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i>
                                        </button>
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
