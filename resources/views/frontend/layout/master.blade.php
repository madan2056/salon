@include('frontend.includes.head')
@stack('css')
<body>
<div id="header">
  @include('frontend.includes.header')
</div>

@yield('content')

@stack('scripts')
@include('frontend.includes.footer')
