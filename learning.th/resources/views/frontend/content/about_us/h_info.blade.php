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
                <h2>Hoang <span> Tran Huy</span></h2>
                <p><span><i class="fa fa-info-circle" aria-hidden="true"></i></span></p>
            </div>
            <div class="w3layouts_skills_grids">
                <div class="col-md-6 agileinfo_about_left">

                    <p> <pre style="text-align: center;color: coral;font-size: 20px">“Với tôi,Thành công đi liền với gian khổ
   Cố gắng để thành công”
                       </pre>

                    Họ và tên : <h4>Trần Huy Hoàng</h4><br>
                    Sinh viên K62-J Đại học Công Nghệ
                        - Đại học Quốc Gia Hà Nội<br><br>
                    Ngành: CNTT định hướng thị trường Nhật Bản<br><br>
                    Mã Số sinh viên: 17021154 <br><br>
                    Chức vụ trong nhóm: Team Leader<br>
                    Hoàn thành sản phẩm: 6/05/2019<br>

                </div>
                <div class="col-md-6 agileinfo_about_right">
                    <img src="{{asset('front_assets/images/about/hoang.jpg')}}" alt=" " class="img-responsive"  style="width: 450px; height: 450px;
margin-left:50px; border:3px solid red"/>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

@endsection

