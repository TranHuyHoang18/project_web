<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<!-- head-->

@include('frontend.partials.head')
<!--/head-->
<head>
     <style type="text/css">
            .document1 li:hover
            {
                background-color: yellow;
            }
            .menu_document1 li
            {
                float: left;
                list-style: none;
                width: 150px;
                height: 40px;
                border: 1px solid black;
                text-align: center;

            }
            .menu_document1 
            {
                width: 100%;
            }
            .menu_document1 a
            {
                color: black;
                font-size: 16px;
            }
            .menu_document1 li:hover
            {
                background-color: yellow;
            }
            .content1
            {
                margin-top:50px;
            }
            .title_document
            {
                font-size: 20px;
                color: red;
                border: 2px solid black;
            }
            .document_content_left
            {
                border: 1px solid black;

            }



            .document_content_right
            {
                border: 1px solid black;
                float:right;
                text-align: center;
            }
            .title_document_content_right
            {
                font-size: 20px;

            }
            .title_document_content_right a, p
            {
                color: black;
            }
            .btn
            {
                widtd: 50px;
            }
     </style>
</head>
<body>

@include('frontend.partials.header')

<!-- main content start-->
<div class="container">
<div class="row" >
        <div class="banner1">
    </div>
        <div class="col-md-2 document1" style="border: 2px solid whitesmoke; background:#a7afad; ">
            @include('frontend.partials.sidebar')
        </div>
        <div  class="col-md-10" style=" background: white">
            <div class="content1">
                @yield('content')
            </div>

        </div>
</div>
</div>

@include('frontend.partials.footer')
<!--//footer-->
<!--main-js-->
@include('frontend.partials.main-js')
<!--/main-js-->
</body>
</html>
