<?php

namespace App\Http\Controllers\Admin;

use App\Model\DocumentModel;
use App\Model\ReportDocumentModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    public function index()
    {
        $items = DB::table('document')->paginate(10);
        
        $data = array();
        $data['documents'] = $items;
    
        return view('admin.content.document.admin_document_index', $data);
    }
    public function create()
    {
        return view('admin.content.document.submit');
    }
    public function edit($id) {
        
        $data = array();
        
        $item = DocumentModel::find($id);
        $data['document'] = $item;
        
        return view('admin.content.document.edit_document', $data);
    }
    public function delete($id) {
        
        $data = array();
        
        $item = DocumentModel::find($id);
        $data['document'] = $item;
        
        return view('admin.content.document.delete_document', $data);
    }
    public function update(Request $request, $id) {
    
        $validatedData =$request->validate([
            'name' => 'required|max:255',
            'id_author' => 'required',
        ]);
        
        $input = $request->all();
        
        $item = DocumentModel::find($id);
    
        $item->name = $input['name'];
/*        $item->image = $input['image'];*/
        $item->type = $input['type'];
        $item->status = $input['status'];
        $item->DateUpdate = $input['dateupdate'];
        $item->name_author ='hoang';
        $item->id_author = isset($input['id_author']) ? $input['id_author'] : '';
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
    
        $item->save();
    
        return redirect('/admin/document/repository');
    }
    public function store(Request $request)
    {
        // file
        $file = $request->file;
        $user = Auth::user();
        $id =Auth::id();
        $path ='upload/'.$request->id_author.'/document';
        $file->move($path, $file->getClientOriginalName());
        //
        $validatedData =$request->validate([
            'name' => 'required|max:255',
            'id_author' => 'required',
        ]);
        $input = $request->all();
        $item = new DocumentModel();
        $item->name = $input['name'];
        $item->id_author = isset($input['id_author']) ? $input['id_author'] : '';
        $item->file = 'upload/'.$item->id_author.'/document/'.$file->getClientOriginalName();
        $item->type = $input['type'];
        $item->status = $input['status'];
        $item->DateUpdate = $input['dateupdate'];
        $item->name_author ='hoang';
        
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        
        $item->save();
    
        return redirect('/admin/document/repository');
    }
    public function destroy($id) {
        $item = DocumentModel::find($id);
        
        $item->delete();
        
        return redirect('/admin/document/repository');
    }
    public function listReceived()
    {
        $items= DB::table('document')->where('status',0)->paginate(10);
        $data = array();
        $data['documents'] = $items;
        return view('admin.content.document.list_received_index',$data);
    }
    public function downloadFile($id)
    {
        $item = DocumentModel::find($id);
        $pathToFile = $item->file;
        return response()->download($pathToFile);
    }
    public function save($id)
    {
        $item = DocumentModel::find($id);
        $item->status= 1;
        $item->save();
       
        return redirect('/admin/document/received');
    }
    public function report()
    {
        $items = DB::table('report_document')->where('status',0)->paginate(10);
    
        $data = array();
        $data['documents'] = $items;
    
        return view('admin.content.document.report_document_index', $data);
    }
    public function seenReport($id)
    {
        $item = ReportDocumentModel::find($id);
        $item->status = 1;
        $item->save();
        return redirect('/admin/document/report');
        
    }
    public function deleteReport($id)
    {
        $item = ReportDocumentModel::find($id);
        $item->delete();
        return redirect('/admin/document/report');
    }
   
}
