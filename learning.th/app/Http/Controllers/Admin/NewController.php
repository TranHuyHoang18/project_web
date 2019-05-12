<?php

namespace App\Http\Controllers\Admin;

use App\Model\NewModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    public function index()
    {
        $items = DB::table('news')->paginate(10);
    
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();
        $data['news'] = $items;
    
        return view('admin.content.new.new_index', $data);
    }
    public function create() {
        $data = array();
        return view('admin.content.new.submit_new', $data);
    }
    
    public function edit($id) {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();
        
        $item = NewModel::find($id);
        $data['new'] = $item;
        
        return view('admin.content.new.edit_new', $data);
    }
    
    public function delete($id) {
        
        $data = array();
        
        $item = NewModel::find($id);
        $data['new'] = $item;
        
        return view('admin.content.new.delete_new', $data);
    }
    
    
    public function store(Request $request) {
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'images' => 'required',
            'slug' => 'required',
        ]);
        
        $input = $request->all();
        
        $item = new NewModel();
        
        /*echo '<pre>';
        print_r($input['images']);
        echo '</pre>';*/
        
        $item->name = $input['name'];
        $item->images = isset($input['images']) ? json_encode($input['images']) : '';
    
        $item->slug = $input['slug'];
        $item->intro = isset($input['intro']) ? $input['intro'] : '';
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        
        $item->save();
        
        return redirect('/admin/new');
    }
    
    public function update(Request $request, $id) {
    
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'images' => 'required',
            'slug' => 'required',
        ]);
    
        $input = $request->all();
        
        $item = NewModel::find($id);
    
        $item->name = $input['name'];
        $item->images = isset($input['images']) ? json_encode($input['images']) : '';
        $item->slug = $input['slug'];
        $item->intro = isset($input['intro']) ? $input['intro'] : '';
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
    
        $item->save();
    
        return redirect('/admin/new');
    }
    
    public function destroy($id) {
        $item = NewModel::find($id);
        
        $item->delete();
        
        return redirect('/admin/new');
    }
    
}
