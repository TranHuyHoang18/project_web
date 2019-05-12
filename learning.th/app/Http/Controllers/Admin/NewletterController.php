<?php

namespace App\Http\Controllers\Admin;

use App\Model\NewletterModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NewletterController extends Controller
{
    public function index()
    {
        $items = DB::table('newletters')->paginate(10);
        $data = array();
        $data['newletters']= $items;
        return view('admin.content.newletter.newletter_index',$data);
    
    }
    public function create(Request $request)
    {
        $input = $request->all();
        $item = new NewletterModel();
        $item->email = $input['subscribe'];
        $item->save();
        
        return redirect(url('/'));
    }
    public function delete($id) {
        
        $data = array();
        
        $item = NewletterModel::find($id);
        $data['newletter'] = $item;
        
        return view('admin.content.newletter.delete_newletter', $data);
    }
    public function destroy($id) {
        $item = NewletterModel::find($id);
        
        $item->delete();
        
        return redirect('/admin/newletter');
    }
}
