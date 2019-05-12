<?php

namespace App\Http\Controllers\Frontend;

use App\Model\UserDetailModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function index()
    {
        $id         = Auth::id();
        $data       = [];
        $data['id'] = $id;
        
        return view('auth.user_detail', $data);
    }
    
    public function store(Request $request)
    {
        $file = $request->image;
        $id   = Auth::id();
        $path = 'upload/' . $id . '/user/';
        $file->move($path, $file->getClientOriginalName());
        //
        
        $input             = $request->all();
        $item              = new UserDetailModel();
        $item->id          = $id;
        $item->first_name        = $input['first_name'];
        $item->last_name        = $input['last_name'];
        $item->image        = $path.$file->getClientOriginalName();
        $item->birthday        = $input['birthday'];
        $item->country      = $input['country'];
        $item->phone  = $input['phone'];
        $item->level = $input['level'];
        $item->job = $input['job'];
        
        $item->save();
        
        return redirect('/');
    }
}
