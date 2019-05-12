<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    
    public function index()
    {
        
        $data = [];
        
        return view('frontend.content.about_us.index', $data);
    }
    
    public function hoang_info()
    {
        return view('frontend.content.about_us.h_info');
    }
    public function thanh_info()
    {
        return view('frontend.content.about_us.t_info');
    }
    public function anh_info()
    {
        return view('frontend.content.about_us.a_info');
    }
    public function viet_info()
    {
        return view('frontend.content.about_us.v_info');
    }
    public function linh_info()
    {
        return view('frontend.content.about_us.l_info');
    }
}
