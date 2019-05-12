<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function index(){
        return view('DemoUpload');
    }
    
    public function doUpload(Request $request)
    {
        //Kiểm tra file
        /*if ($request->hasFile('fileTest'))
        {
            echo 1;
            $file = $request->filesTest;
            
            //Lấy Tên files
            echo 'Tên Files: ' . $file->getClientOriginalName();
            echo '<br/>';
            
            //Lấy Đuôi File
            echo 'Đuôi file: ' . $file->getClientOriginalExtension();
            echo '<br/>';
            
            //Lấy đường dẫn tạm thời của file
            echo 'Đường dẫn tạm: ' . $file->getRealPath();
            echo '<br/>';
            
            //Lấy kích cỡ của file đơn vị tính theo bytes
            echo 'Kích cỡ file: ' . $file->getSize();
            echo '<br/>';
            
            //Lấy kiểu file
            echo 'Kiểu files: ' . $file->getMimeType();
            $file = $request->filesTest;
    
            $file->move('upload', $file->getClientOriginalName());
    
        }*/
        $file = $request->filesTest;
        $user = Auth::user();
        $id =Auth::id();
        $path ='upload/'.$id.'/document';
        $file->move($path, $file->getClientOriginalName());
    }
    
}
