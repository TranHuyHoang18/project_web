<?php

namespace App\Http\Controllers\Frontend;

use App\Events\Message;
use App\Model\DocumentModel;
use App\Model\ReportDocumentModel;
use App\Model\RoomDocument;
use App\Model\RoomModel;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Pusher\Pusher;

class RoomController extends Controller
{
    
    public function __construct()
    {
        /* $this->middleware('auth:shipper')->only('index');*/
        $this->middleware('auth');
    }
    
    public function index()
    {
        $items         = DB::table('room')->paginate(12);
        $data          = [];
        $data['rooms'] = $items;
        
        return view('frontend.content.room.room_index', $data);
    }
    
    public function math()
    
    {
        $items         = DB::table('room')->where('type', 1)->paginate(5);
        $data          = [];
        $data['rooms'] = $items;
        
        return view('frontend.content.room.math.room_math', $data);
    }
    
    public function literature()
    {
        $items         = DB::table('room')->where('type', 2)->paginate(5);
        $data          = [];
        $data['rooms'] = $items;
        
        return view('frontend.content.room.literature.room_literature', $data);
    }
    
    public function physics()
    {
        $items         = DB::table('room')->where('type', 3)->paginate(5);
        $data          = [];
        $data['rooms'] = $items;
        
        return view('frontend.content.room.physics.room_physics', $data);
    }
    
    public function chemistry()
    {
        $items         = DB::table('room')->where('type', 4)->paginate(5);
        $data          = [];
        $data['rooms'] = $items;
        
        return view('frontend.content.room.chemistry.room_chemistry', $data);
    }
    
    public function biology()
    {
        $items         = DB::table('room')->where('type', 7)->paginate(5);
        $data          = [];
        $data['rooms'] = $items;
        
        return view('frontend.content.room.biology.room_biology', $data);
    }
    
    public function geography()
    {
        $items         = DB::table('room')->where('type', 5)->paginate(5);
        $data          = [];
        $data['rooms'] = $items;
        
        return view('frontend.content.room.geography.room_geography', $data);
    }
    
    public function other()
    {
        $items         = DB::table('room')->where('type', 8)->paginate(5);
        $data          = [];
        $data['rooms'] = $items;
        
        return view('frontend.content.room.other.room_other', $data);
    }
    
    public function english()
    {
        $items         = DB::table('room')->where('type', 3)->paginate(5);
        $data          = [];
        $data['rooms'] = $items;
        
        return view('frontend.content.room.english.room_english', $data);
    }
    
    public function create()
    {
        return view('frontend.content.room.createroom');
    }
    
    public function store(Request $request)
    {
       
        $file = $request->image;
    
        $path = 'upload/image/room/';
        $validatedData = $request->validate([
            'name'      => 'required|max:255',
            'type'      => 'required',
            'type_room' => 'required',
        ]);
        $file->move($path, $file->getClientOriginalName());
        $input = $request->all();
        
        $item = new RoomModel();
        
        $item->name      = $input['name'];
        /*$item->images    = isset($input['images']) ? json_encode($input['images']) : '';*/
        $item->images    =  $path. $file->getClientOriginalName(); ;
        $item->type      = $input['type'];
        $item->type_room = $input['type_room'];
        $item->desc      = isset($input['desc']) ? $input['desc'] : '';
        $item->desc1      = isset($input['desc1']) ? $input['desc1'] : '';
        
        $item->id_author = Auth::id();
        $item->count     = 1;
        $item->file      = '';
        $member          = [];
        $member[0]       = Auth::id();
        $item->members   = json_encode($member);
        $item->save();
        
        return redirect('/room');
    }
    
    
    public function join_Room($id)
    {
        // b1: cap nhat nguoi trong phong
        $item   = RoomModel::find($id);
        $member = [];
        $member = json_decode($item->members);
        $bool   = false;
        for ($i = 0; $i < $item->count; $i++) {
            if ($member[$i] == Auth::id()) {
                $bool = true;
                break;
            }
        }
        
        if ($bool == false) {
            $item->count              = $item->count + 1;
            $member[$item->count - 1] = Auth::id();
            $item->members            = json_encode($member);
            $item->save();
        }
        // import pusher
        if ($bool == false)
        {
            $id_user = Auth::id();
            $userdetail = \App\Model\UserDetailModel::find($id_user);
            $image = $userdetail->image;
            $name = $userdetail->last_name . $userdetail->first_name;
            $data['id_member'] = Auth::id();
            $data['name'] = $name;
            $data['image']= $image;
            if ($bool== true){$data['stt'] = $i+1;}
            else {$data['stt'] =  $item->count; }
            $data['id_room'] = $id;
    
            $options = array(
                'cluster' => 'ap1',
                'encrypted' => true
            );
    
            $pusher = new Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'),
                $options
            );
    
            $pusher->trigger('Notify', 'notify-join', $data);
        }
        
        
        
        // lay thong tin tra ve view
        $item         = RoomModel::find($id);
        $data         = [];
        $data['room'] = $item;
        $item1        = DB::table('messages')->where('id_room', $id)->paginate();
        $data['mess'] = $item1;
        $item1 = DB::table('roomdocument')->where('id_room',$id)->paginate(3);
        $data['documents']= $item1;
        
        
        
        if ($item->type == 0) {
            
            return view('frontend.content.room.room_detail.join_room', $data);
        } else {
            return view('frontend.content.room.room_detail.join_rooms', $data);
        }
        
    }
    
    public function search(Request $request)
    {
        $input         = $request->all();
        $id            = $input['id'];
        $item          = RoomModel::find($id);
        $data          = [];
        $data['rooms'] = $item;
        
        return view('frontend.content.room.room_index1', $data);
    }
    
    public function outRoom($id)
    {
        // b1: cap nhat nguoi trong phong
        $item   = RoomModel::find($id);
        $member = [];
        $member = json_decode($item->members);
        $bool   = -1;
        for ($i = 0; $i < $item->count; $i++) {
            if ($member[$i] == Auth::id()) {
                $bool = $i;
                break;
            }
        }
        $item->count = $item->count - 1;
        if ($item->count == 0) {
            $item->delete();
        } else {
            for ($i = $bool; $i < $item->count; $i++) {
                $member[$i] = $member[$i + 1];
            }
            $item->members = json_encode($member);
            $item->save();
        }
        
        return redirect('/room');
    }
    
    public function writeBoard($id)
    {
    
        
        $data       = [];
        $data['id'] = $id;
        $item       = RoomModel::find($id);
        if (Auth::id() == $item->id_author) {
            $data['room'] = $item;
            $item1        = DB::table('messages')->where('id_room', $id)->paginate();
            $data['mess'] = $item1; $item1 = DB::table('roomdocument')->where('id_room',$id)->paginate(3);
            $data['documents']= $item1;
        
            return view('frontend.content.room.room_detail.write_board', $data);
        } else
        {
            return redirect()->back();
        }
        
    }
    public function write(Request $request, $id)
    {
        $input = $request->all();
        // import pusher
        $data['id_room'] = $id;
        $data['title'] = $input['desc'];
        $data['content']= $input['desc1'];
       
    
        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );
    
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );
    
        $pusher->trigger('BlackBoard', 'notify-blackBoard', $data);
    
    
    
        // <!import pusher>
        $item = RoomModel::find($id);
        $item->desc = $input['desc'] ;
        $item->desc1 = $input['desc1'];
        $item->save();
        return redirect(url('/room/detail/'.$id));
    }
    public function senddocument($id)
    {
       
        
        $data       = [];
        $data['id'] = $id;
        $item       = RoomModel::find($id);
        
            $data['room'] = $item;
            $item1        = DB::table('messages')->where('id_room', $id)->paginate();
            $data['mess'] = $item1;
        $item1 = DB::table('roomdocument')->where('id_room',$id)->paginate(3);
        $data['documents']= $item1;
        
            return view('frontend.content.room.room_detail.send_document', $data);
        
    }
    public function updatedocument(Request $request,$id)
    {
        $file = $request->document;
    
        $path = 'upload/document/room/'.$id.'/';
        $file->move($path, $file->getClientOriginalName());
        //
        $validatedData     = $request->validate([
            'name' => 'required|max:255',
        ]);
        $input             = $request->all();
        
        $item              = new RoomDocument();
        $item->name        = $input['name'];
        $item->id_author   = Auth::id();
        $item->file        = $path. $file->getClientOriginalName();
        $item->id_room      = $id;
        $item->name_author = Auth::user()->name;
    
    
        $item->save();
        $tmp= DB::table('roomdocument')->where('name',$input['name'])->paginate();
        /*echo'<pre>';
        print_r($tmp[0]);
        echo '</pre>';
        exit();*/
        // import pusher
        $data['id_room'] = $id;
        $data['name'] = $input['name'];
        $data['path']= $path.$file->getClientOriginalName();
        $data['id']= $tmp[0]->id;
    
    
        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );
    
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );
    
        $pusher->trigger('Document', 'notify-document', $data);
    
    
    
        // <!import pusher>
    
        
        return redirect(url('/room/detail/'.$id));
    }
    public function download($id)
    {
        $item = RoomDocument::find($id);
        $pathToFile = $item->file;
        return response()->download($pathToFile);
    }
    public function writeBoard1($id)
    {
        
        $data       = [];
        $data['id'] = $id;
        $item       = RoomModel::find($id);
        if (Auth::id() == $item->id_author) {
            $data['room'] = $item;
            $item1        = DB::table('messages')->where('id_room', $id)->paginate();
            $data['mess'] = $item1;
            $item1 = DB::table('roomdocument')->where('id_room',$id)->paginate(3);
            $data['documents']= $item1;
            
            return view('frontend.content.room.room_detail.write_board1', $data);
        } else
        {
            return redirect()->back();
        }
        
    }
    public function senddocument1($id)
    {
        $data       = [];
        $data['id'] = $id;
        $item       = RoomModel::find($id);
        
        $data['room'] = $item;
        $item1        = DB::table('messages')->where('id_room', $id)->paginate();
        $data['mess'] = $item1;
        $item1 = DB::table('roomdocument')->where('id_room',$id)->paginate(3);
        $data['documents']= $item1;
        
        return view('frontend.content.room.room_detail.send_document1', $data);
        
    }
}
