<?php

namespace App\Http\Controllers;

use App\Model\AdminModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin')->only('index');
    }
    
    /**
     * Phương thức trả về view khi đăng nhập admin thành công
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    
    public function create()
    {
        return view('admin.auth.register');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required',
            'email'    => 'required',
            'password' => 'required'
        ]);
        
        $adminModel           = new AdminModel();
        $adminModel->name     = $request->name;
        $adminModel->email    = $request->email;
        $adminModel->password = bcrypt($request->password);
        $adminModel->save();
        
        return redirect()->route('admin.auth.login');
        
    }
}
