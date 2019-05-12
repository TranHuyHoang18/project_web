@extends('frontend.layouts.home')
@section('title')
    Learning Together About US
@endsection
@section('content')
    <div class="banner1">
    </div>
    <div class="services">
        <div class="container">
            <div class="w3layouts_header">
                <h2>about <span> us</span></h2>
                <p><span><i class="fa fa-info-circle" aria-hidden="true"></i></span></p>
            </div>
            <div class="w3layouts_skills_grids">
                <div class="col-md-6 agileinfo_about_left">

                    <p> <pre style="text-align: center;color: coral;font-size: 20px">“Without you, I’m nothing
    With you, I’m something
    Together, We are everything”
                       </pre>
                    We are comprehensive web developer. We care about the learning and exchange needs of students.
                    We uphold the spirit of teamwork, and find it an indispensable skill for students.
                    The web <span style="color: crimson">"Learning Together" </span>is created to connect people with the same learning goals,
                    to achieve the highest efficiency.
                    </p>
                </div>
                <div class="col-md-6 agileinfo_about_right">
                    <img src="{{asset('front_assets/images/1.jpg')}}" alt=" " class="img-responsive" />
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="skills">
        <div class="container">
            <div class="w3layouts_header w3_agile_head">
                <h3>Our <span>Team</span></h3>
                <p><span><i class="fa fa-users" aria-hidden="true"></i></span></p>
            </div>
            <div class="w3layouts_skills_grids">
                <div class="col-md-4 agile_team_grid">
                    <div class="agileits_w3layouts_team_grid">
                        <img src="{{asset('front_assets/images/about/hoang.jpg')}}" alt=" " class="img-responsive" />
                        <div class="agileits_w3layouts_team_grid_pos">
                            <ul class="agileits_social_list">
                                <li><a href="https://www.facebook.com/profile.php?id=100008556493556" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                <li><a href="{{url('/about/hoang')}}" class="w3_agile_vimeo"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>Trần Huy Hoàng</h4>
                    <p>Team Leader</p>
                </div>
                <div class="col-md-4 agile_team_grid">
                    <div class="agileits_w3layouts_team_grid">
                        <img src="{{asset('front_assets/images/about/linh.jpg')}}" alt=" " class="img-responsive" />
                        <div class="agileits_w3layouts_team_grid_pos">
                            <ul class="agileits_social_list">
                                <li><a href="https://www.facebook.com/jumicar.duong?epa=SEARCH_BOX" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                <li><a href="{{url('/about/linh')}}" class="w3_agile_vimeo"><i class="fa fa-info-circle"aria-hidden="true"></i></a></li>
                             </ul>
                        </div>
                    </div>
                    <h4>Khánh Linh</h4>
                    <p>Dương</p>
                </div>
                <div class="col-md-4 agile_team_grid">
                    <div class="agileits_w3layouts_team_grid">
                        <img src="{{asset('front_assets/images/about/thanh.jpg')}}" alt=" " class="img-responsive" />
                        <div class="agileits_w3layouts_team_grid_pos">
                            <ul class="agileits_social_list">
                                <li><a href="https://www.facebook.com/thanhhuunguyen.amc" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                <li><a href="{{url('/about/thanh')}}" class="w3_agile_vimeo"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>Hữu Thanh</h4>
                    <p>Nguyễn</p>
                </div>
                <div class="col-md-4 agile_team_grid">
                    <div class="agileits_w3layouts_team_grid">
                        <img src="{{asset('front_assets/images/about/anh.jpg')}}" alt=" " class="img-responsive" />
                        <div class="agileits_w3layouts_team_grid_pos">
                            <ul class="agileits_social_list">
                                <li><a href="https://www.facebook.com/theanh17798" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                <li><a href="{{url('/about/anh')}}" class="w3_agile_vimeo"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>Thế Anh</h4>
                    <p>Nguyễn</p>
                </div>
                <div class="col-md-4 agile_team_grid">
                    <div class="agileits_w3layouts_team_grid">
                        <img src="{{asset('front_assets/images/about/viet.jpg')}}" alt=" " class="img-responsive" />
                        <div class="agileits_w3layouts_team_grid_pos">
                            <ul class="agileits_social_list">
                                <li><a href="https://www.facebook.com/lance.knight.351" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                <li><a href="{{url('/about/viet')}}" class="w3_agile_vimeo"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>Sĩ Việt</h4>
                    <p>Nguyễn</p>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="services">
        <div class="container">
            <div class="w3layouts_header">
                <h3>Our <span>Stats</span></h3>
                <p><span><i class="fa fa-stack-exchange" aria-hidden="true"></i></span></p>
            </div>
            <div class="w3layouts_skills_grids">
                <div class="col-md-3 wthree_stats_grid">
                    <div class="w3_agileits_stats_grid">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <h3>Skilled Employees</h3>
                        <p class="counter w3_agile_counter">974</p>
                    </div>
                </div>
                <div class="col-md-3 wthree_stats_grid">
                    <div class="w3_agileits_stats_grid">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        <h3>win awards</h3>
                        <p class="counter w3_agile_counter1">527</p>
                    </div>
                </div>
                <div class="col-md-3 wthree_stats_grid">
                    <div class="w3_agileits_stats_grid">
                        <i class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></i>
                        <h3>creative designs</h3>
                        <p class="counter w3_agile_counter2">646</p>
                    </div>
                </div>
                <div class="col-md-3 wthree_stats_grid">
                    <div class="w3_agileits_stats_grid">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                        <h3>Market Stats</h3>
                        <p class="counter w3_agile_counter3">458</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection

