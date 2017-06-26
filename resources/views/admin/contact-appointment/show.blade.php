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

                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td style="width: 20px">1.</td>
                            <td style="width: 250px">Full Name</td>
                            <td >{{  $data['appointment']->full_name }}</td>
                        </tr>

                            <tr>
                                <td>2.</td>
                                <td>Email</td>
                                <td>{{  $data['appointment']->email }}</td>
                            </tr>


                        <tr>
                            <td>3.</td>
                            <td>Contact Number</td>
                            <td>{{  $data['appointment']->contact_number }}</td>
                        </tr>

                        <tr>
                            <td>4.</td>
                            <td>Address</td>
                            <td>{{  $data['appointment']->address }}</td>
                        </tr>

                        <tr>
                            <td>5.</td>
                            <td>Prefered Date</td>
                            <td>{{  $data['appointment']->prefered_date }}</td>
                        </tr>

                        <tr>
                            <td>6.</td>
                            <td>Prefered Time</td>
                            <td>{{  $data['appointment']->prefered_time }}</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Message</td>
                            <td>{{  $data['appointment']->message }}</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td> Appointment Submitted Date</td>
                            <td>{{  $data['appointment']->submitted_at }}</td>
                        </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </section>

    </div>

    <!-- /.content -->
@endsection




















@section('extra-js')

@endsection