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
            @include('frontend.partials.sidebar_room')
        </div>
        <div  class="col-md-10" style="margin-top:50px; background: white">
            <div class="top_index_room">
                <div class="col-md-4"><a class="btn btn-success" href="{{url('/room/create')}}" style="width:150px">Create New Room</a></div>
                <div class="col-md-5"></div>
                <div class="col-md-3 search_room" style="float:right;">
                    <form action="{{url('/room/search')}}" method="post">
                        @csrf
                        <input  name="id" type="text" placeholder="ID room =? " style="width:150px;height:35px">
                        <button type="submit" class="btn btn-success"style=""><i class="fa fa-search" aria-hidden="true"
                                                                                                          style="margin-left: 5px; "></i></button>

                    </form>
                </div>
            </div>

            <div class="content1">
                <div class="col-sm-12 title_document">
                    <h1>@yield('title1')</h1>
                </div>
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
