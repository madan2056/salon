@extends('admin.layout.master')

@section('extra-css')
    <style>
        ul#menu {
            list-style: none;
        }

        ul#menu li {
            margin: 10px 0;
        }
    </style>

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

            <div class="nav-tabs-custom">

                <div class="tab-content">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Ordering Menu</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul id="menu">
                                        @foreach($page as $p)
                                            <li id="{{ $p->id  }}" class="btn btn-default btn-block">
                                               {{ $p->title1 }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>


    </div>

    <script>
        $(function () {
            $('#menu').sortable({
                stop: function () {
                    $.map($(this).find('li'), function (el) {
                        var itemID = el.id;
                        var itemIndex = $(el).index();
                        var v_token = '{{ csrf_token() }}';

                        $.ajax({
                            url: '{{ route('update_order_page') }}',
                            type: 'POST',
                            dataType: 'json',
                            data: {itemID: itemID, itemIndex: itemIndex, _token:v_token}
                        });
                    })
                }

            });
        });
    </script>

    <!-- /.content -->
@endsection


@section('extra-js')


@endsection