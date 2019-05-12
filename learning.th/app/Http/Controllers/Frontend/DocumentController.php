<?php

namespace App\Http\Controllers\Frontend;

use App\Model\DocumentModel;
use App\Model\ReportDocumentModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    
    public function __construct()
    {
          $this->middleware('auth')->only('create','mydocument');
    }
    public function mydocument()
    {
        $id=Auth::id();
        $items             = DB::table('document')->where('id_author', $id)->paginate(5);
        $data              = [];
        $data['documents'] = $items;
    
        return view('frontend.content.document.index', $data);
    }
    public function index()
    {
        $items             = DB::table('document')->where('status', 1)->paginate(5);
        $data              = [];
        $data['documents'] = $items;
        
        return view('frontend.content.document.index', $data);
    }
    
    public function math()
    {
        $items             = DB::table('document')->where('type', '1')->where('status', 1)->paginate(5);
        $data              = [];
        $data['documents'] = $items;
        
        return view('frontend.content.document.math.index', $data);
    }
    
    public function literature()
    {
        $items             = DB::table('document')->where('type', '2')->where('status', 1)->paginate(5);
        $data              = [];
        $data['documents'] = $items;
        
        return view('frontend.content.document.literature.index', $data);
    }
    
    public function physics()
    
    {
        $items             = DB::table('document')->where('type', '6')->where('status', 1)->paginate(5);
        $data              = [];
        $data['documents'] = $items;
        
        return view('frontend.content.document.physics.index', $data);
    }
    
    public function chemistry()
    {
        $items             = DB::table('document')->where('type', '4')->where('status', 1)->paginate(5);
        $data              = [];
        $data['documents'] = $items;
        
        return view('frontend.content.document.chemistry.index', $data);
    }
    
    public function biology()
    {
        $items             = DB::table('document')->where('type', '7')->where('status', 1)->paginate(5);
        $data              = [];
        $data['documents'] = $items;
        
        return view('frontend.content.document.biology.index', $data);
    }
    
    public function geography()
    {
        $items             = DB::table('document')->where('type', '5')->where('status', 1)->paginate(5);
        $data              = [];
        $data['documents'] = $items;
        
        return view('frontend.content.document.geography.index', $data);
    }
    
    public function other()
    
    {
        $items             = DB::table('document')->where('type', '8')->where('status', 1)->paginate(5);
        $data              = [];
        $data['documents'] = $items;
        
        return view('frontend.content.document.other.index', $data);
    }
    
    public function english()
    {
        $items             = DB::table('document')->where('type', '3')->where('status', 1)->paginate(5);
        $data              = [];
        $data['documents'] = $items;
        
        return view('frontend.content.document.english.index', $data);
    }
    
    public function create()
    {
        
        /*if (Auth::check()) {*/
            $data       = [];
            $data['id'] = Auth::id();
            
            return view('frontend.content.document.createform', $data);
        /*} else {
            echo('Login to continue');
        }*/
        
    }
    
    public function send(Request $request)
    {
        // file
        
        $file = $request->file;
        
        $path = 'upload/document';
        $file->move($path, $file->getClientOriginalName());
        //
        $validatedData     = $request->validate([
            'name' => 'required|max:255',
        ]);
        $input             = $request->all();
        $item              = new DocumentModel();
        $item->name        = $input['name'];
        $item->id_author   = isset($input['id_author']) ? $input['id_author'] : '';
        $item->file        = 'upload/' . $item->id_author . '/document/' . $file->getClientOriginalName();
        $item->type        = $input['type'];
        $item->status      = 0;
        $item->DateUpdate  = $input['dateupdate'];
        $item->name_author = 'hoang';
        
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        
        $item->save();
        
        return redirect('/document/');
        
    }
    
    public function report($id)
    {
        $data             = [];
        $data['id']       = $id;
        $item             = DocumentModel::find($id);
        $data['document'] = $item;
        $data['idsss']    = Auth::id();
        
        return view('frontend.content.document.report_document_form', $data);
    }
    
    public function savereport(Request $request, $id)
    {
        $input             = $request->all();
        $item              = new ReportDocumentModel();
        $item->id_document = $id;
        $item->id_author = $input['id_author'];
        $item->desc = $input['desc'];
        $item->status = 0;
        $item->save();
        return redirect('/document');
    }
    
}
