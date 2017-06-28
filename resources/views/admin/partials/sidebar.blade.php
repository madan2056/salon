<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            @if(auth()->user()->image)
                <div class="pull-left image">
                    <img src="{{ asset('images/users/'.auth()->user()->image)  }}" class="img-circle" alt="User Image">
                </div>
            @endif
        </div>
        <ul class="sidebar-menu">
            <li {!! Request::is('admin/dashboard*')?'class="active"':'' !!} style="display:none;">
                <a href="{{ route('admin_home') }}">
                    <i class="fa fa-th"></i> <span>Dashboard</span>
                </a>
            </li>
            <li {!! Request::is('admin/our_service*')?'class="active"':'' !!}>
                <a href="{{ route('our_service.index') }}">
                    <i class="fa fa-image"></i>Our Service
                </a>
            </li>
            <li {!! Request::is('admin/our_feature*')?'class="active"':'' !!}>
                <a href="{{ route('our_feature.index') }}">
                    <i class="fa fa-star"></i>Our Feature
                </a>
            </li>
            <li {!! Request::is('admin/sample_work*')?'class="active"':'' !!}>
                <a href="{{ route('sample_work.index') }}">
                    <i class="fa fa-briefcase"></i>Gallery
                </a>
            </li>
            <li {!! Request::is('admin/banner*')?'class="active"':'' !!}>
                <a href="{{ route('banner.index') }}">
                    <i class="fa fa-image"></i>Banner
                </a>
            </li>
            <li {!! Request::is('admin/page*')?'class="active"':'' !!}>
                <a href="{{ route('page.index') }}">
                    <i class="fa fa-file"></i>Page
                </a>
            </li>

           {{-- <li {!! Request::is('admin/inquiry_form*')?'class="active"':'' !!}>
                <a href="{{ route('inquiry_form.index') }}">
                    <i class="fa fa-image"></i>Inqury Form
                </a>
            </li>
            <li {!! Request::is('admin/request_quotation*')?'class="active"':'' !!}>
                <a href="{{ route('request_quotation.index') }}">
                    <i class="fa fa-image"></i>Request Quotation
                </a>
            </li>--}}

            <li {!! Request::is('admin/customer_testimonials*')?'class="active"':'' !!}>
                <a href="{{ route('customer_testimonials.index') }}">
                    <i class="fa fa-user"></i>Customer And Testimonials
                </a>
            </li>
            <li {!! Request::is('admin/users*')?'class="active"':'' !!}>
                <a href="{{ route('users.index') }}">
                    <i class="fa fa-users"></i>Users
                </a>
            </li>
            <li {!! Request::is('admin/site_config*')?'class="active"':'' !!}>
                <a href="{{ route('site_config.index') }}">
                    <i class="fa fa-gears"></i>Site Config
                </a>
            </li>
            <li {!! Request::is('admin/appointment-layout*')?'class="active"':'' !!}>
                <a href="{{ route('appointment-layout.index') }}">
                    <i class="fa fa-image"></i>Service Appointment Layout
                </a>
            </li>
            <li {!! Request::is('admin/contact-appointment*')?'class="active"':'' !!}>
                <a href="{{ route('contact-appointment.index') }}">
                    <i class="fa fa-book"></i>Appointment
                </a>
            </li>
            <li {!! Request::is('admin/profile_setting*')?'class="active"':'' !!}>
                <a href="{{ route('profile_setting.edit') }}">
                    <i class="fa fa-gears"></i>Profile
                </a>
            </li>
            <li class="treeview">
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-lock"></i> <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
