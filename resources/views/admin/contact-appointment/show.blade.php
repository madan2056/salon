@extends('admin.layout.master')

@section('extra-css')

@endsection
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>{{ $title.' Manage' }}</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin_home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ route($scope.'.index') }}">{{ $title }}</a></li>
                <li class="active">Edit</li>
            </ol>
        </section>
        <!-- Custom Tabs -->
        <section class="content">

            <div class="nav-tabs-custom">
                <div class="tab-content">


                    <h1>Show Appointment data here</h1>


                    @foreach($data['rows'] as $item)
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th colspan="3">{{ $item['service'] }}</th>
                            </tr>
                            @foreach($item['price_data'] as $price)
                                <tr>
                                    <td></td>
                                    <td>{{ $price['price_title'] . ' ' . $price['price'] }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    @endforeach


                </div>

            </div>

        </section>

    </div>

    <!-- /.content -->
@endsection




















@section('extra-js')

@endsection