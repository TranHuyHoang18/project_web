<div class="footer-top">
    <div class="container">
        <div class="col-md-4 welcome">
            <h3>Learning together</h3>
            <p>The opportunity to help students learn and grow. Come be a part of our schools, whether as an involved parent, a student, a community volunteer, or a partner. Pulling together, we can accomplish our goal.</p>

        </div>
        <div class="col-md-3 address">
            <h3>Address</h3>
            <p>
                <span>Xuân Thủy, Cầu Giấy, Hà Nội</span>
            </p>
            <p class="phone">Phone : +84 0868 695 383
                <span>Email : <a href="mailto:example@email.com">learningtogether@vnu.vn</a></span>
                <span>FAX : <a href="mailto:example@email.com">123 456 7890</a></span>
            </p>
        </div>
        <div class="col-md-5 wthree-subscribe">
            <h3>Newsletter </h3>
            <p>Receive the latest useful information, daily.</p>
            <div class="w3-agileits-subscribe-form">
                <form action="{{url('/newletter')}}" method="post">
                    @csrf
                    <input type="text" placeholder="Email" name="subscribe" required="">
                    <button class="btn1">Subscribe</button>
                </form>
            </div>
            <div class="agile_header_social">
                <ul class="agileits_social_list">
                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="copy-right-grids">
    <div class="container">
        <div class="copy-left">
            <p class="footer-gd">© 2019 Learning Together. All Rights Reserved | Design by <a href="#" target="_blank">HuyHoangTran</a> and
                   <a href="#" target="_blank"> friends</a></p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
