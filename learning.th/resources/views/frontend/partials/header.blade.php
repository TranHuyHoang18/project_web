<div class="header_address_mail">
    <div class="container">
        <div class="agileits_w3layouts_header_address_grid">
            <ul>
                <li><a href="mailto:info@example.com">learningtogether@vnu.vn</a></li>
                <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                <li>(+84)0868 695 383</li>
            </ul>
        </div>
    </div>
</div>
<div class="header" style="border-bottom: 5px solid red">
    <div class="container">
        <div class="w3_agile_logo">
            <h1><a href="{{url('/')}}"><span>L</span>earning<span>T</span>ogether</a></h1>
        </div>
        <div class="header-nav">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-12">
                        <ul class="nav navbar-nav w3_agile_nav">
                            <li class="active"><a href="{{url('/')}}"><span>Home</span></a></li>
                            <li><a href="{{url('/room')}}"><span>Room</span></a></li>

                            <li><a href="{{url('/document')}}"><span>Document</span></a></li>
                            <li><a href="{{url('/news')}}"><span>News</span></a></li>
                            <li><a href="{{url('/about')}}"><span>About Us</span></a></li>
                            <li  >
                                <?php if(is_object(Auth::user() )) : ?>
                                    <a href="{{route('logout')}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                <?php endif; ?>
                                <?php if(! is_object(Auth::user() )) : ?>
                                    <a href="{{ route('login') }}"><span>Login</span></a>
                                    <?php endif; ?>
                            </li>

                        </ul>

                    </nav>
                </div>
            </nav>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>

