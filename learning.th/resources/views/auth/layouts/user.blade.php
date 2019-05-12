<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<!-- head-->


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="">
<script>
    addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
</script>
<!-- //Meta-Tags -->

<!-- Custom Theme files -->
<link href="{{asset('login_form/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('login_form/css/font-awesome.css')}}" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->
<!-- //Custom Theme files -->

<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!--/head-->
</head>
@include('frontend.partials.head')
<body>

@include('frontend.partials.header')

<!-- main content start-->

@yield('content')


@include('frontend.partials.footer')
<!--//footer-->
<!--main-js-->
@include('frontend.partials.main-js')
<!--/main-js-->
</body>
</html>
