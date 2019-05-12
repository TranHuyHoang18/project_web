<?php

namespace App\Http\Controllers\Frontend;

use App\Model\NewModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    public function index()
    {
    
        $items = DB::table('news')->paginate(10);
        $data = array();
        $data['news'] = $items;
        return view('frontend.content.new.new',$data);
    }
    public function detail($id)
    {
        $data = array();
    
        $item = NewModel::find($id);
        $data['new'] = $item;
    
        return view('frontend.content.new.new_detail', $data);
    }
}
