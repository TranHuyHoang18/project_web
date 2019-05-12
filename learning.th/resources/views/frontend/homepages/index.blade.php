@extends('frontend.layouts.home')
@section('title')
    Learning Together
@endsection
@section('content')

    <div class="banner-slider">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides callbacks callbacks1" id="slider4">
                    <li>
                        <div class="agileits-banner-info">
                            <div class="container">
                                <div class="w3ls-banner-shadow">
                                    <h3>THE PLACE FOR HAPPY AND CREATIVE LEARNING</h3>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="agileits-banner-info agileits-banner-info1">
                            <div class="container">
                                <div class="w3ls-banner-shadow">
                                    <h3>Help on your way to academic excellence!</h3>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="agileits-banner-info agileits-banner-info2">
                            <div class="container">
                                <div class="w3ls-banner-shadow">
                                    <h3>THE PLACE FOR HAPPY AND CREATIVE LEARNING</h3>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            <script src="{{asset('front_assets/js/responsiveslides.min.js')}}"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 4
                    $("#slider4").responsiveSlides({
                        auto: true,
                        pager:true,
                        nav:false,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });

                });
            </script>
            <!--banner Slider starts Here-->
        </div>
    </div>

    <div class="services">
        <div class="container">
            <div class="w3layouts_header">
                <h2>OVERVIEW <span> </span></h2>
                <p><span><i class="fa fa-book" aria-hidden="true"></i></span></p>
            </div>
            <div class="w3_services_grids">
                <div class="col-md-6 w3l_services_grid">
                    <div class="w3ls_services_grid agileits_services_grid3">
                        <div class="wthree_service_text">
                            <h3>EDUCATION</h3>
                            <h4>DOCUMENT</h4>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 w3l_services_grid">
                    <div class="w3ls_services_grid agileits_services_grid4">
                        <div class="wthree_service_text">
                            <h3>NEWS </h3>
                            <h4>IN THE WORLD</h4>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 w3l_services_grid">
                    <div class="w3ls_services_grid agileits_services_grid">
                        <div class="wthree_service_text">
                            <h3>INTERNET </h3>

                        </div>
                    </div>

                </div>
                <div class="col-md-4 w3l_services_grid">
                    <div class="w3ls_services_grid agileits_services_grid2">
                        <div class="wthree_service_text">
                            <h3>LEARNING WITH FRIEND</h3>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 w3l_services_grid">
                    <div class="w3ls_services_grid agileits_services_grid1">
                        <div class="wthree_service_text">
                            <h3>SELF LEARNING</h3>
                        </div>
                    </div>

                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <div class="statistics">
        <div class="container">
            <div class="col-md-6 w3layouts_statistics_grid_left">
                <div class="w3_statistics_grid_left_grid">
                    <img src="{{asset('front_assets/images/g5.jpg')}}" alt=" " class="img-responsive" />

                </div>
            </div>
            <div class="col-md-6 w3layouts_statistics_grid_right">
                <h4> statistics of members</h4>
                <div class="col-md-4 w3_stats_grid">
                    <h3 id="w3l_stats1" class="odometer">0</h3>
                    <p>Teachers</p>
                    <div class="w3layouts_stats_grid1">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-4 w3_stats_grid">
                    <h3 id="w3l_stats2" class="odometer">0</h3>
                    <p>college students</p>
                    <div class="w3layouts_stats_grid1">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-4 w3_stats_grid">
                    <h3 id="w3l_stats3" class="odometer">0</h3>
                    <p>Students</p>
                    <div class="w3layouts_stats_grid1">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

@endsection
