
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<!-- head-->

@include('frontend.partials.head')
@yield('style')
<!--/head-->
<body>

@include('frontend.partials.header')

    <!-- main content start-->
<div id="page-wrapper">

    <div class="main-page">
        @yield('content')
    </div>
</div>

@include('frontend.partials.footer')
<!--//footer-->
<!--main-js-->
@include('frontend.partials.main-js')
<!--/main-js-->
</body>
</html>
