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
            .text_new p
            {
                font-weight: bold;
            }
            .text_new
            {
                font-size: 16px;
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

            @foreach($news as $new)
                <div class="row new_body">
                    <div class="col-md-2"></div>
                    <div class="col-md-2 img_new">
                        <?php
                        $images = isset($new->images) ? json_decode($new->images) : array();
                        ?>
                        @if(!empty($images))
                            @foreach($images as $image)
                                <img src="{{ asset($image) }}" >
                            @endforeach
                        @endif
                    </div>
                    <div class="col-md-6 text_new">
                        <a  href="{{url('/newdetail/'.$new->id)}}" style="font-weight: bold; font-size: 20px">{{$new->name}}</a>
                        <p style="font-weight: lighter;font-size: 14px"><?php echo $new->intro ?></p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

