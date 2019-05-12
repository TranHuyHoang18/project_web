@extends('frontend.layouts.home_new')
@section('title')
    Learning Together New
@endsection
@section('style')
    <style type="text/css">
        .new_body
        {
            margin-top: 30px;
        }
        .img_new img
        {
            border: 2px solid black;
            width:150px;
            height:100px;
        }
        .body2
        {
            font-weight: lighter;
            margin-top: 20px;


        }
        .body2 img
        {
            width: 100px;
            height: 100px;
        }
        .body1
        {
            margin-top: 30px;
        }
        .body3
        {
            text-align: center;
            font-size: 25px;
        }
    </style>
@endsection
@section('content')
    <div class="banner1">
    </div>
    <div class="services">
        <div class="container">
            <div class="w3layouts_header">
                <h2>News </h2>
                <p><span><i class="fa fa-info-circle" aria-hidden="true"></i></span></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6 body1">
            <a class="body3">{{$new->name}}</a>
            <p class="body2"><?php echo $new->desc ?></p>
        </div>
        <div class="col-md-3" >

        </div>
    </div>


@endsection

