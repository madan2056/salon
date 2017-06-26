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

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 10px">Name</th>
                                <th colspan="3">{{ $data['appointment']->full_name }}</th>
                            </tr>
                            <tr>
                                <th style="width: 10px">Email</th>
                                <th colspan="3">{{ $data['appointment']->email }}</th>
                            </tr>
                            <tr>
                                <th style="width: 10px">Contact No.</th>
                                <th colspan="3">{{ $data['appointment']->contact_no }}</th>
                            </tr>
                            <tr>
                                <th style="width: 10px">Address</th>
                                <th colspan="3">{{ $data['appointment']->address }}</th>
                            </tr>
                            <tr>
                                <th style="width: 10px">Prefered Date</th>
                                <th colspan="3">{{ $data['appointment']->prefered_date }}</th>
                            </tr>
                            <tr>
                                <th style="width: 10px">Prefered Time</th>
                                <th colspan="3">{{ $data['appointment']->prefered_time }}</th>
                            </tr>
                            <tr>
                                <th style="width: 10px">Message</th>
                                <th colspan="3">{{ $data['appointment']->message }}</th>
                            </tr>
                        </tbody>
                    </table>


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